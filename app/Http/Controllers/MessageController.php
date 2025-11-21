<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Kapcsolat űrlap
    public function create()
    {
        return view('messages.contact');
    }

    // Űrlap elküldése
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        Message::create($validated);

        return redirect()
            ->back()
            ->with('success', 'Köszönjük, üzenetedet elküldtük!');
    }

    // Üzenetek listázása – csak bejelentkezve
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();

        return view('messages.index', compact('messages'));
    }
}
