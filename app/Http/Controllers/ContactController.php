<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email', 'max:255'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        Contact::create($validated);

        // Here you could also trigger emails or notifications.

        return back()->with('status', 'Thank you! Your message has been sent.');
    }
}

public function rules()
{
    return [
        'name'    => 'required|string|max:100',
        'email'   => 'required|email',
        'message' => 'required|string|max:500',
    ];
}

?>
