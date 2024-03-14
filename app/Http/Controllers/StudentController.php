<?php

namespace App\Http\Controllers;

use App\Models\PpvStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
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
        $students = PpvStudent::orderBy('ppv_addedon', 'desc')->get();

        return view('student.list', compact('students'));
    }
}
