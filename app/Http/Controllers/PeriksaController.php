<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriksaController extends Controller
{
public function index()
    {
        return view('dokter/periksa.index');
    }

    public function pasien()
    {
        return view('pasien/periksa.index');
    }

}
