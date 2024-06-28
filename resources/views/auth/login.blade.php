{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-center mb-6 lg:mb-12">
        <div class="bg-blue-50 w-64 flex justify-center mx-auto rounded-xl p-2">
            <a
                href="{{ route('login') }}"
                class="py-3 w-1/2 h-full bg-white dark:bg-slate-800 text-black dark:text-white rounded-xl"
            >
                <button>Sign In</button>
            </a>
            <a
                href="{{ route('register') }}"
                class="py-3 w-1/2 h-full opacity-60"
            >
                <button>Sign Up</button>
            </a>
        </div>
        <h2 className="text-center dark:text-dark text-2xl font-bold mb-3">
            Welcome to Vitalife
        </h2>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Sign in Sign up -->
    <div class="flex flex-col justify-center mb-6">
        <div class="bg-white flex justify-center rounded-md p-2 shadow-md h-12 w-96 mx-auto relative">
            <div class="flex justify-between items-center w-full px-2">
                <a href="{{ route('login') }}" id="signInBtn"
                    class="w-[45%] h-[34px] rounded-md transition-all duration-300 z-10 text-sm font-medium focus:outline-none">
                    <span class="px-2 py-1 rounded">Sign In</span>
                </a>
                <div class="h-8 w-px bg-gray-300 mx-2 px-4">|</div>
                <a href="{{ route('register') }}" id="signUpBtn"
                    class="w-[45%] h-[34px] rounded-md transition-all duration-300 z-10 text-sm font-medium focus:outline-none">
                    <span class="px-2 py-1 rounded">Sign Up</span>
                </a>
                <div id="slider"
                    class="absolute top-[5px] left-[9px] w-[45%] h-[34px] bg-blue-500 rounded-md transition-all duration-300">
                </div>
            </div>
        </div>
        <div class="mt-4 text-center">
            <h2 class="dark:text-dark text-3xl font-bold">
                Welcome to Vitalife
            </h2>
        </div>
    </div>

    <!-- Login Form -->
    <form id="loginForm" method="POST" action="{{ route('login') }}" class="pb-20">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex justify-between items-center mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-white border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-900 dark:text-gray-600">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <div class="mt-4 flex flex-col items-center bg-gray-500 rounded-md">
            <div class="w-full">
                <button type="submit"
                    class="w-full bg-blue-300 text-white py-2 px-4 rounded-md hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out uppercase font-semibold transform active:scale-90 active:bg-blue-500"
                    onclick="animateButton(this)">
                    {{ __('Log in') }}
                </button>
            </div>
        </div>
    </form>

    <script>
        const signInBtn = document.getElementById('signInBtn');
        const signUpBtn = document.getElementById('signUpBtn');
        const slider = document.getElementById('slider');

        function setActiveButton(activeBtn, inactiveBtn) {
            activeBtn.querySelector('span').classList.add('border', 'border-gray-400', 'bg-gray-100');
            inactiveBtn.querySelector('span').classList.remove('border', 'border-gray-400', 'bg-gray-100');
        }

        function animateButton(button) {
            button.classList.add('animate-pulse', 'scale-90');
            setTimeout(() => {
                button.classList.remove('animate-pulse', 'scale-90');
            }, 300);
        }

        signInBtn.addEventListener('click', () => {
            slider.style.left = '9px';
            setActiveButton(signInBtn, signUpBtn);
        });

        signUpBtn.addEventListener('click', () => {
            slider.style.left = 'calc(50% + 5px)';
            setActiveButton(signUpBtn, signInBtn);
        });

        // Set initial active state
        setActiveButton(signInBtn, signUpBtn);
    </script>
</x-guest-layout>
