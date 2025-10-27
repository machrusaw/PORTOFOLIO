<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
{
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'messageContent' => $request->message, // jangan pakai key 'message'
    ];

    Mail::send('emails.contact', $data, function($message) use ($request) {
        $message->to('machrusaw99@gmail.com')
        ->from('machrusaw99@gmail.com', 'Portfolio Website') // tetap kamu
        ->replyTo($request->email, $request->name) // agar saat kamu klik "Reply", balasan langsung ke pengunjung
        ->subject('Pesan Baru dari Portfolio Website');

    });

    return back()->with('success', 'Pesan berhasil dikirim!');
}

}
