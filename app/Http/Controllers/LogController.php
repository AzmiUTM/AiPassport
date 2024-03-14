<?php

namespace App\Http\Controllers;

use App\Models\PpvLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(function ($request, $next)
        {
            $this->user = Auth::user();
            return $next($request);
        });
    }

    public function list()
    {
        $logs = PpvLog::with('PpvPhoto','PpvStudent')
        ->orderBy('ppv_addedon', 'desc')
        ->get();
        // dd($log);
        return view('log.list', compact('logs'));
    }
}
