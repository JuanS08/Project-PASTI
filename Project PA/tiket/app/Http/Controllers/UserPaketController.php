<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class UserPaketController extends Controller
{
    public function index()
    {
        $pakets = Paket::all();
        return view('users.barang', compact('pakets'));
    }

    public function create()
    {
        return view('paket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'pengirim_id' => 'required',
            'deskripsi' => 'required',
        ]);

        Paket::create($request->all());

        return redirect()->route('paket.index')
            ->with('success', 'Paket created successfully.');
    }

    public function show(Paket $paket)
    {
        return view('paket.show', compact('paket'));
    }

    public function edit(Paket $paket)
    {
        return view('paket.edit', compact('paket'));
    }

    public function update(Request $request, Paket $paket)
    {
        $request->validate([
            'nama_paket' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'pengirim_id' => 'required',
            'deskripsi' => 'required',
        ]);

        $paket->update($request->all());

        return redirect()->route('paket.index')
            ->with('success', 'Paket updated successfully');
    }

    public function destroy(Paket $paket)
    {
        $paket->delete();

        return redirect()->route('paket.index')
            ->with('success', 'Paket deleted successfully');
    }
}
