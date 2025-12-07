<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        // Validated data from Form Request
        $data = $request->validated();

        // Save message to database
        Contact::create($data);

        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}
