<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\NewUserRegistered;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'role' => ['required', 'string', 'in:user,premium_user,moderator,admin'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
                'provider' => $request->provider
            ]);

            event(new Registered($user));

            $admins = User::where('role', 'admin')->get();
            foreach ($admins as $admin) {
                $admin->notify(new NewUserRegistered($user));
            }

            // Kirim email selamat datang
            Mail::to($user->email)->send(new WelcomeEmail($user));

            Auth::login($user);

            $redirectRoute = $user->role === 'admin' ? route('admin.dashboard') : route('dashboard');

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Registration successful!',
                    'redirect' => $redirectRoute
                ]);
            }

            return redirect()->route('dashboard')->with('security_notice', 'Jika Anda melihat peringatan keamanan dari Google, itu adalah fitur normal. Kami sarankan Anda mengikuti saran untuk meningkatkan keamanan akun Anda.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            }

            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }
}
