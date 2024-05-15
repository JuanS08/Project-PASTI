<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentPaket extends Model
{
    use HasFactory;

    protected $table = 'payment_paket'; // Sesuaikan dengan nama tabel yang digunakan
    protected $fillable = [
        'paket_id',
        'amount',
        'payment_method',
        'status',
        'payment_date',
        'image',
        'notes',
    ];

    // Definisi relasi jika diperlukan
    // public function paket()
    // {
    //     return $this->belongsTo(Paket::class);
    // }
}
