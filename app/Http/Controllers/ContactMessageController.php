<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Store a visitor's contact message.
     *
     * Validation failures redirect back automatically with errors and old
     * input. On success we redirect back to the contact section with a flash
     * message. (No email is sent yet — messages are stored only.)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10|max:5000',
        ]);

        ContactMessage::create($validated);

        return redirect()
            ->to(url('/#contact'))
            ->with('success', 'Thanks! Your message has been sent.');
    }
}
