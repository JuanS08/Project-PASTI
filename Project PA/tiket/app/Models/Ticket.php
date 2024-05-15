<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets'; 

    protected $fillable = [
        'user_id',
        'tanggal_pemesanan',
        'tanggal_keberangkatan',
        'waktu_keberangkatan',
        'asal_keberangkatan',
        'tujuan',
        'kelas',
        'status_pembayaran',
        'metode_pembayaran',
        'jumlah_penumpang',
        'nomor_kursi',
        'catatan_tambahan',
    ];

    // Definisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}

