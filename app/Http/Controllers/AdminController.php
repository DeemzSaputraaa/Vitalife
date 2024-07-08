<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Spa;
use App\Models\Spesialis;
use App\Models\Yoga;


class AdminController extends Controller
{
    public function Adminhomepage()
    {
        $spacount = Spa::count();
        $yogacount = Yoga::count();
        $spescount = Spesialis::count();
        return view('admin.dashboard', compact('spacount','yogacount','spescount'));
    }
}
