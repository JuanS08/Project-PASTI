<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        return view('admin.informasi', compact('informasi'));
    }

    public function create()
    {
        return view('admin.informasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tgl_publikasi' => 'required|date',
            'image' => 'required|image',
            'kategori' => 'required',
        ]);

        $informasi = new Informasi();
        $informasi->judul = $request->judul;
        $informasi->deskripsi = $request->deskripsi;
        $informasi->kategori = $request->kategori;
        $informasi->tanggal_publikasi = $request->tgl_publikasi;
        $informasi->admin_id = auth()->guard('admin')->user()->id;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/informasi');
            // Remove 'public/' prefix and add 'storage/' to ensure proper URL for web access
            $informasi->image = Str::replaceFirst('public/', 'storage/', $imagePath);
        }

        $informasi->save();

        return redirect()->route('admin.tabel_informasi')->with('success', 'Informasi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $informasi = Informasi::find($id);
        return view('admin.edit_informasi', compact('informasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tgl_publikasi' => 'required|date',
            'image' => 'sometimes|image',
            'kategori' => 'required',
        ]);

        $informasi = Informasi::findOrFail($id);
        $informasi->judul = $request->judul;
        $informasi->deskripsi = $request->deskripsi;
        $informasi->kategori = $request->kategori;
        $informasi->tanggal_publikasi = $request->tgl_publikasi;

        if ($request->hasFile('image')) {
            // Delete old image if a new one is uploaded
            if ($informasi->image) {
                $oldImagePath = Str::replaceFirst('storage/', 'public/', $informasi->image);
                Storage::delete($oldImagePath);
            }
            $imagePath = $request->file('image')->store('public/informasi');
            $informasi->image = Str::replaceFirst('public/', 'storage/', $imagePath);
        }

        $informasi->save();

        return redirect()->route('admin.tabel_informasi')->with('success', 'Informasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $informasi = Informasi::find($id);
        if ($informasi->image) {
            $imagePath = Str::replaceFirst('storage/', 'public/', $informasi->image);
            Storage::delete($imagePath);
        }
        $informasi->delete();

        return redirect()->route('admin.informasi')->with('success', 'Informasi berhasil dihapus');
    }

    public function tabelInformasi()
    {
        $informasi = Informasi::all();
        return view('admin.tabel_informasi', ['informasi' => $informasi]);
    }
}
