<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi; 

class UserInformasiController extends Controller
{
    public function informasi()
    {
        $informasi = Informasi::all(); 
        return view('users.tiket', compact('informasi')); 
    }
}
