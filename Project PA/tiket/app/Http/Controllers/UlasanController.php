<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function index()
    {
        $ulasans = Ulasan::all();
        return view('admin.dashboard', compact('ulasans'));
    }
}
