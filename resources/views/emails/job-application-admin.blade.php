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
            background-color: #0057a2;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .header h2 {
            margin: 0;
            font-size: 22px;
        }
        .alert {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 20px 0;
        }
        .content {
            background-color: #ffffff;
            padding: 30px;
            border: 1px solid #e0e0e0;
            border-top: none;
        }
        .field {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 4px;
        }
        .field strong {
            display: block;
            color: #0057a2;
            margin-bottom: 5px;
            font-size: 14px;
            text-transform: uppercase;
        }
        .field-value {
            color: #333;
            font-size: 16px;
        }
        .job-field {
            background-color: #f0f4ff;
            padding: 15px;
            border-left: 4px solid #0057a2;
            margin: 20px 0;
        }
        .action-buttons {
            margin-top: 30px;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #0057a2;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin: 0 5px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 12px;
        }
        .meta-info {
            background-color: #f8f9fa;
            padding: 15px;
            margin-top: 20px;
            border-radius: 4px;
            font-size: 13px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>🔔 New Job Application Received</h2>
        </div>
        
        <div class="content">
            <div class="alert">
                <strong>⚠️ Action Required:</strong> A new job application has been submitted. Please review and respond within 48 hours.
            </div>
            
            <div class="job-field">
                <strong>Position Applied For:</strong>
                <div class="field-value" style="font-size: 18px; font-weight: bold; margin-top: 5px;">{{ $application->job_title }}</div>
            </div>
            
            <div class="field">
                <strong>Applicant Name:</strong>
                <div class="field-value">{{ $application->name }}</div>
            </div>
            
            <div class="field">
                <strong>Email Address:</strong>
                <div class="field-value">
                    <a href="mailto:{{ $application->email }}" style="color: #0057a2;">{{ $application->email }}</a>
                </div>
            </div>
            
            <div class="field">
                <strong>Location:</strong>
                <div class="field-value">{{ $application->location }}</div>
            </div>
            
            <div class="field">
                <strong>Application Date:</strong>
                <div class="field-value">{{ $application->created_at->format('l, F j, Y \a\t g:i A') }}</div>
            </div>
            
            <div class="action-buttons">
                <a href="mailto:{{ $application->email }}?subject=Re: Your Application for {{ $application->job_title }}" class="btn">
                    Reply to Applicant
                </a>
            </div>
            
            <div class="meta-info">
                <strong>Application Details:</strong><br>
                Application ID: #{{ $application->id }}<br>
                Job ID: #{{ $application->job_id }}<br>
                Status: {{ ucfirst($application->status) }}<br>
                Timestamp: {{ $application->created_at->toDateTimeString() }}<br>
                <br>
                A confirmation email has been automatically sent to the applicant.
            </div>
        </div>
        
        <div class="footer">
            <p>Love Economy UK - Job Application Management System</p>
            <p>This email was sent from your church website job portal.</p>
        </div>
    </div>
</body>
</html>