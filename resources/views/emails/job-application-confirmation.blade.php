<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #0057a2 0%, #15215b 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            background-color: #ffffff;
            padding: 30px;
            border: 1px solid #e0e0e0;
            border-top: none;
        }
        .message-box {
            background-color: #f9f9f9;
            padding: 20px;
            margin: 20px 0;
            border-left: 4px solid #0057a2;
            border-radius: 4px;
        }
        .application-details {
            background-color: #f0f4ff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .application-details h3 {
            margin-top: 0;
            color: #0057a2;
        }
        .application-details p {
            margin: 8px 0;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 14px;
        }
        .contact-info {
            background-color: #f0f4ff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .contact-info h3 {
            margin-top: 0;
            color: #0057a2;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .divider {
            border-top: 1px solid #e0e0e0;
            margin: 20px 0;
        }
        .highlight {
            color: #0057a2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Love Economy UK</h1>
            <p style="margin: 10px 0 0 0;">Thank You for Your Application!</p>
        </div>
        
        <div class="content">
            <p>Dear {{ $application->name }},</p>
            
            <p>Thank you for your interest in joining the Love Economy UK team! We have successfully received your job application and appreciate the time you took to apply.</p>
            
            <div class="application-details">
                <h3>Your Application Details</h3>
                <p><strong>Position Applied For:</strong> <span class="highlight">{{ $application->job_title }}</span></p>
                <p><strong>Application Date:</strong> {{ $application->created_at->format('l, F j, Y \a\t g:i A') }}</p>
                <p><strong>Location:</strong> {{ $application->location }}</p>
                <p><strong>Status:</strong> <span style="color: #ff9800; font-weight: bold;">Under Review</span></p>
            </div>
            
            <div class="message-box">
                <strong>What's Next?</strong>
                <p style="margin-top: 10px;">Our team will carefully review your application and qualifications. We typically review applications within 5-7 business days. If your profile matches our requirements, we will contact you via email or phone to schedule an interview.</p>
            </div>
            
            <p>We appreciate your patience during this process and look forward to the possibility of working together to serve our community.</p>
            
            <div class="divider"></div>
            
            <div class="contact-info">
                <h3>Have Questions?</h3>
                <p>If you have any questions about your application or the position, please feel free to contact us:</p>
                
                <p><strong>Email:</strong> info@loveeconomyuk.org<br>
                <strong>Phone:</strong> +44 (0) 123 456 7890</p>
            </div>
            
            <p style="margin-top: 20px;">Once again, thank you for your interest in Love Economy UK!</p>
            
            <p>Blessings,<br>
            <strong>Love Economy UK Team</strong></p>
        </div>
        
        <div class="footer">
            <p><strong>Our Vision:</strong> Building a nation where Christ is all and in all</p>
            <p style="margin-top: 10px; font-size: 12px;">
                This is an automated confirmation email. Please do not reply to this message.<br>
                If you did not submit this job application, please contact us immediately.
            </p>
        </div>
    </div>
</body>
</html>