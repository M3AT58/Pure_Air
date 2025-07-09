<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display the contact form.
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Store a contact inquiry.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $inquiry = Inquiry::create($request->all());

        // Send email notification (you would implement this based on your email setup)
        // Mail::to('info@pureair.com')->send(new InquiryReceived($inquiry));

        return redirect()->back()->with('success', 'Thank you for your inquiry! We will get back to you soon.');
    }
}
