<?php

namespace App\Http\Controllers;

use App\Models\TicketApproval;
use Illuminate\Http\Request;
use App\Models\DetailTiket;

class UserController extends Controller
{
    
    public function index()
    {
        // Mengambil token dari session
        $token = session('token');

        // Jika token tidak tersedia, redirect ke halaman login
        if (!$token) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk mengakses halaman ini');
        }

        // Jika token tersedia, lanjutkan dengan menampilkan halaman users.tiket
        return view('users.tiket');
    }

    public function pemesanan()
    {
        return view('users.pemesanan');
    }
    public function pembayaran()
    {
        return view('users.pembayaran');
    }
    public function history()
    {
        return view('users.history');
    }
    public function cekPesanan()
    {
        $ticketApprovals = TicketApproval::all(); // Ambil semua data dari tabel ticket_approvals
        return view('users.cek_pesanan', compact('ticketApprovals'));
    }
}
