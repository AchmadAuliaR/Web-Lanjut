<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController2 extends Controller
{
    //halaman home
    function Index()
    {
        return view('mahasiswa');
    }
}
