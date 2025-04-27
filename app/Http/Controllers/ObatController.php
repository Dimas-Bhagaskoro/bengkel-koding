<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
public function index()
    {
        $obats = Obat::all();
        return view('dokter/obat.index',  compact('obats'));
    }

    public function create()
    {
        return view('dokter/obat.create');

    }

    public function store(request $request)
    {
        $request->validate([
            'nama_obat' => 'required',
            'kemasan' => 'required',
            'harga' => 'required',
        ]);
        Obat::create($request->all());
        return redirect()->route('obat.index');

    }
    public function edit(Obat $obat)
    {
        return view('dokter.obat.edit', compact('obat'));
    }

    public function update(Request $request, Obat $obat)
    {
        $request->validate([
            'nama_obat' => 'required',
            'kemasan' => 'required',
            'harga' => 'required'
        ]);
        $obat->update($request->all());
        return redirect()->route('obat.index');
    }

    public function destroy(Obat $obat)    
    {
        $obat->delete();
        return redirect()->route('obat.index');
    }



}
