<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Admin extends Authenticatable implements AuthenticatableContract
{
    use HasFactory, Notifiable;

    protected $fillable = ['email', 'password']; // Menambahkan 'email' dan 'password' ke dalam $fillable

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isAdmin()
    {
        return $this->hasRole('admin');
    }
}
