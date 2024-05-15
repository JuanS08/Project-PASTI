<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'paket';

    protected $fillable = [
        'nama_paket',
        'berat',
        'harga',
        'kategori',
        'pengirim_id',
        'penerima_id',
        'deskripsi',
        'waktu_kedatangan',
        'waktu_keberangkatan',
    ];
    public function sender()
    {
        return $this->belongsTo(User::class, 'name_pengirim', 'users_id');
    }
}
