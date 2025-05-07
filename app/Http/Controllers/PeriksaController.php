<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;
use App\Models\Obat;  
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
    public function edit($id)
{
    $periksa = Periksa::findOrFail($id);
    $obats = Obat::all(); 

    $selected_obats = []; 

    return view('dokter.periksa.edit', compact('periksa', 'obats', 'selected_obats'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'tgl_periksa' => 'required|date',
        'catatan' => 'required|string',
        'biaya_periksa' => 'required|numeric',
        'obat' => 'nullable|array',
    ]);

    $periksa = Periksa::findOrFail($id);
    $periksa->tgl_periksa = $request->tgl_periksa;
    $periksa->catatan = $request->catatan;
    $periksa->biaya_periksa = $request->biaya_periksa;
    $periksa->save();

    // Sync obat
    if ($request->has('obat')) {
        $periksa->obats()->sync($request->obat);
    } else {
        $periksa->obats()->detach(); // kalau tidak pilih obat, kosongin
    }

    return redirect()->route('memeriksa.index')->with('success', 'Data periksa berhasil diperbarui.');
}

}
