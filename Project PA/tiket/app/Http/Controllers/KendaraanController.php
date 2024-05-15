<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailKendaraan;
use App\Models\Seat;

class KendaraanController extends Controller
{
    public function index()
    {
        $details = DetailKendaraan::all();
        return view('admin.kendaraan_kbt', compact('details'));
    }
    public function bookSeat(Request $request)
    {
        // Validasi request
        $request->validate([
            'nomor_kendaraan' => 'required',
            'nomor_kursi' => 'required'
        ]);

        // Dapatkan nomor kendaraan dan nomor kursi dari request
        $nomor_kendaraan = $request->input('nomor_kendaraan');
        $nomor_kursi = $request->input('nomor_kursi');

        // Cari kursi berdasarkan nomor kendaraan dan nomor kursi
        $seat = Seat::where('nomor_kendaraan', $nomor_kendaraan)
                    ->where('nomor_kursi', $nomor_kursi)
                    ->first();

        if ($seat) {
            // Update status kursi menjadi dipesan
            $seat->status = 'dipesan'; // Sesuaikan dengan status yang Anda gunakan
            $seat->save();

            // Berikan respons sukses
            return response()->json(['message' => 'Seat booked successfully'], 200);
        } else {
            // Jika kursi tidak ditemukan, berikan respons error
            return response()->json(['message' => 'Seat not found'], 404);
        }
    }
}
