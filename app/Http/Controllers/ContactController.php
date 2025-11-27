<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactConfirmationMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'idi_name' => 'required|string|max:255',
            'idi_mail' => 'required|email|max:255',
            'idi_text' => 'required|string|max:5000',
        ], [
            'idi_name.required' => 'Name is required',
            'idi_mail.required' => 'Email is required',
            'idi_mail.email' => 'Invalid email format',
            'idi_text.required' => 'Message is required',
        ]);

        // Save to database
        $contact = Contact::create([
            'name' => $validated['idi_name'],
            'email' => $validated['idi_mail'],
            'message' => $validated['idi_text'],
        ]);

        // Log the contact submission
        Log::info('New contact form submission', [
            'contact_id' => $contact->id,
            'name' => $contact->name,
            'email' => $contact->email,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'timestamp' => now()->toDateTimeString(),
        ]);

        // Send email to admin
        try {
            Mail::to(config('mail.admin_email', 'info@loveeconomyuk.org'))
                ->send(new ContactFormMail($contact));
            
            Log::info('Contact form admin notification sent successfully', [
                'contact_id' => $contact->id,
                'admin_email' => config('mail.admin_email', 'info@loveeconomyuk.org'),
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to send contact form admin notification', [
                'contact_id' => $contact->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
        }

        // Send confirmation email to user
        try {
            Mail::to($contact->email)
                ->send(new ContactConfirmationMail($contact));
            
            Log::info('Contact form confirmation email sent successfully', [
                'contact_id' => $contact->id,
                'user_email' => $contact->email,
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to send contact form confirmation email', [
                'contact_id' => $contact->id,
                'user_email' => $contact->email,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
        }

        // Return success response
        return back()->with('success', 'Thank you for contacting us! We have sent you a confirmation email and will get back to you soon.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
