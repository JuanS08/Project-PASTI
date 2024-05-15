<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketApproval extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'kelas',
        'subtotal',
        'status',
    ];
}
