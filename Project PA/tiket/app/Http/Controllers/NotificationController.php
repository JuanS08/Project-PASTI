<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::all(); 
        return view('admin.header', ['notifications' => $notifications]);
    }

    public function notifyUsers()
    {
        $tickets = Ticket::with('user')->where('status', 'completed')->get();

        foreach ($tickets as $ticket) {
            $user = $ticket->user;
            $message = "Pelanggan $user->name telah memesan tiket pada tanggal $ticket->tanggal_pemesanan.";

            Notification::create([
                'user_id' => $user->id,
                'message' => $message,
            ]);
        }

        return redirect()->back()->with('success', 'Notifications sent successfully');
    }
}
