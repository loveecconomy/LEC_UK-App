<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobApplicationAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    public function __construct(JobApplication $application)
    {
        $this->application = $application;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Job Application - ' . $this->application->job_title,
            replyTo: [$this->application->email],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.job-application-admin',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}