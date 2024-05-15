<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $table = 'informasi'; // Sesuaikan dengan nama tabel yang digunakan

    protected $fillable = [
        'judul', 'deskripsi', 'kategori', 'tanggal_publikasi', 'admin_id', 'image'
    ];

    // Relasi dengan model Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
