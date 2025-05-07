<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index()
    {
        // Ambil semua periksa milik pasien yang login
        $riwayats = Periksa::where('id_pasien', Auth::id())->with('detailPeriksas.obat')->get();

        return view('pasien.riwayat.index', compact('riwayats'));
    }
}
