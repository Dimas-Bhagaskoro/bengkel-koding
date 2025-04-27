<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa; 
use App\Models\User;   
use Illuminate\Support\Facades\Auth;

class PeriksaController extends Controller
{
    public function index()
{
    $periksa = Periksa::with('pasien')->get(); 

    return view('dokter.periksa.index', compact('periksa'));
}
    public function store(Request $request)
    {
        $request->validate([
            'id_pasien' => 'required',
            'id_dokter' => 'required',
        ]);

        Periksa::create([
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
        ]);

        return redirect()->route('periksa.index')->with('success', 'Data periksa berhasil ditambahkan.');
    }
}
