<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        return view('admin.tabel_paket');
    }
    public function paymentPaket()
    {
        // Retrieve data from the 'payment_paket' table and pass it to the view
        $details = \App\Models\PaymentPaket::all(); // Assuming PaymentPaket is your model for 'payment_paket' table
        return view('admin.payment_paket', compact('details'));
    }
}
