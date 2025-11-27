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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            border-left: 4px solid #667eea;
            border-radius: 4px;
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
            color: #667eea;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .divider {
            border-top: 1px solid #e0e0e0;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Love Economy UK</h1>
            <p style="margin: 10px 0 0 0;">Thank You for Reaching Out!</p>
        </div>
        
        <div class="content">
            <p>Dear {{ $contact->name }},</p>
            
            <p>Thank you for contacting Love Economy UK. We have received your message and will respond to you as soon as possible.</p>
            
            <div class="message-box">
                <strong>Your Message:</strong>
                <p style="margin-top: 10px;">{{ $contact->message }}</p>
            </div>
            
            {{-- <p>We typically respond within 24-48 hours during business days. If your matter is urgent, please feel free to call us directly.</p> --}}
            
            <div class="divider"></div>
            
            <div class="contact-info">
                <h3>Our Contact Information</h3>
                
                <p><strong>Reading Branch</strong><br>
                90B Great Knollys St.<br>
                Reading RG1 7HL</p>
                
                <p style="margin-top: 15px;"><strong>London Branch</strong><br>
                2D Arodene Road<br>
                Brixton Hill<br>
                London SW2 2BH</p>
                
                <p style="margin-top: 15px;"><strong>Email:</strong> info@loveeconomyuk.org<br>
                <strong>Phone:</strong> +44 (0) 123 456 7890</p>
            </div>
            
            <p style="margin-top: 20px;">We look forward to connecting with you!</p>
            
            <p>Blessings,<br>
            <strong>Love Economy UK Team</strong></p>
        </div>
        
        <div class="footer">
            <p><strong>Our Vision:</strong> Building a nation where Christ is all and in all</p>
            <p style="margin-top: 10px; font-size: 12px;">
                This is an automated confirmation email. Please do not reply to this message.<br>
                If you did not submit this contact form, please ignore this email.
            </p>
        </div>
    </div>
</body>
</html>