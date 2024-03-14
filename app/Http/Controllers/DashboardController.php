<?php

namespace App\Http\Controllers;

use Closure;
use App\Models\User;
use App\Models\PpvPhoto;
use App\Models\PpvSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function __construct()
    {

        $this->middleware(function (Request $request, Closure $next)
        {
            $this->user = Auth::user();
            return $next($request);
        });

    }

    public function index()
    {
        $setting = PpvSetting::all()->count();
        $setLatest = PpvSetting::orderBy('ppv_addedon', 'desc')->first();
        $photo = PpvPhoto::all()->count();

        $user = User::all()->count();

        // dd('hai');
        return view('dashboard', compact('setting','setLatest','user','photo'));

    }
}
