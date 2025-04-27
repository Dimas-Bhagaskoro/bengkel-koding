<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Periksa;
use Illuminate\Http\Request;

class PeriksaPasienController extends Controller
{
    
public function index()
{
    $dokters = User::where('role', 'dokter')->get();
    return view('pasien/periksa.index', compact('dokters'));
}
public function store(request $request)
    {
        $request->validate([
            'id_pasien' => 'required',
            'id_dokter' => 'required',
        ]);
        Periksa::createOrFail($request->all());
        return redirect()->route('periksa.index');
}
}