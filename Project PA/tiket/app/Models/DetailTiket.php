<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTiket extends Model
{
    use HasFactory;

    protected $table = 'detail_tiket';

    protected $fillable = [
        'asal_keberangkatan',
        'tujuan_keberangkatan',
        'kelas',
        'harga',
        'metode_pembayaran',
    ];
}
