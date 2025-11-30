<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobApplicationAdminMail;
use App\Mail\JobApplicationConfirmationMail;


class JobController extends Controller
{
    //

    public function apply(Request $request)
    {
        $validated = $request->validate([
            'job_id' => 'required|integer',
            'job_title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'location' => 'required|string|max:255',
        ], [
            'job_id.required' => 'Please select a job position',
            'job_title.required' => 'Job title is required',
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email format',
            'location.required' => 'Location is required',
        ]);

        // Save application to database
        // uncomment when needed
        $application = JobApplication::create([
            'job_id' => $validated['job_id'],
            'job_title' => $validated['job_title'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'location' => $validated['location'],
        ]);

        // Log the application
        Log::info('New job application submitted', [
            'application_id' => $application->id,
            'job_id' => $validated['job_id'],
            'job_title' => $validated['job_title'],
            'name' => $application->name,
            'email' => $application->email,
            'ip_address' => $request->ip(),
        ]);

        // Send email to admin
        try {
            Mail::to(config('mail.admin_email', 'info@loveeconomyuk.org'))
                ->send(new JobApplicationAdminMail($application));
            
            Log::info('Job application admin notification sent successfully', [
                'application_id' => $application->id,
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to send job application admin notification', [
                'application_id' => $application->id,
                'error' => $e->getMessage(),
            ]);
        }

        // Send confirmation email to applicant
        try {
            Mail::to($application->email)
                ->send(new JobApplicationConfirmationMail($application));
            
            Log::info('Job application confirmation email sent successfully', [
                'application_id' => $application->id,
                'user_email' => $application->email,
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to send job application confirmation email', [
                'application_id' => $application->id,
                'error' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your application! We have sent you a confirmation email and will review your application soon.'
        ]);
    }
}
