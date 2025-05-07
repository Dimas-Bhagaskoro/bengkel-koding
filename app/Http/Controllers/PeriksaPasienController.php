<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Periksa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeriksaPasienController extends Controller
{
    
public function index()
{
    $dokters = User::where('role', 'dokter')->get();
    return view('pasien/periksa.index', compact('dokters'));
}
public function store(Request $request)
{
    $request->validate([
        'id_dokter' => 'required|exists:users,id',
    ]);

    Periksa::create([
        'id_pasien' => Auth::id(),
        'id_dokter' => $request->id_dokter,
    ]);

    return redirect()->route('periksa.index')->with('success', 'Permintaan periksa berhasil dikirim.');
}
}