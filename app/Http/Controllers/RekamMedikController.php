<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekamMedikController extends Controller
{
    //
    public function index()
    {
        return view('page.rm.dashboard');
    }

    public function rekapUsia()
    {
        return view('page.rm.rekapusia');
    }
}
