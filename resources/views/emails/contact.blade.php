<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #f4f4f4; padding: 20px; text-align: center; }
        .content { padding: 20px; }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>New Contact Form Submission</h2>
    </div>
    <div class="content">
        <p><strong>Name:</strong> {{ $contactData['name'] }}</p>
        <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
        <p><strong>Subject:</strong> {{ $contactData['subject'] }}</p>

        <h3>Message:</h3>
        <p>{{ $contactData['message'] }}</p>

        <hr>
        <p><em>This email was sent from your website contact form.</em></p>
    </div>
</div>
</body>
</html>