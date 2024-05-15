<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKendaraan extends Model
{
    use HasFactory;

    protected $table = 'detail_kendaraan'; 

    protected $fillable = [
        'user_id',
        'nomor_kendaraan',
        'nomor_kursi',
        'total_kursi',
        'kelas',
    ];

    // Define relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
