<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message Received</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            margin: 0;
            padding: 20px;
            background-color: #f7f9fc;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .header {
            background-color: #3f51b5;
            color: white;
            padding: 25px 30px;
            border-radius: 8px 8px 0 0;
        }
        .content {
            padding: 30px;
        }
        .detail-item {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-left: 4px solid #3f51b5;
            border-radius: 4px;
        }
        .message-content {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 4px;
            white-space: pre-wrap;
        }
        .label {
            font-weight: 600;
            color: #3f51b5;
            display: block;
            margin-bottom: 5px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666666;
            font-size: 0.9em;
            border-top: 1px solid #eeeeee;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 style="margin: 0; font-size: 24px;">New Contact Form Submission</h1>
        </div>
        
        <div class="content">
            <div class="detail-item">
                <span class="label">From:</span>
                {{ $data['name'] }}<br>
                {{ $data['email'] }}
            </div>

            <div class="detail-item">
                <span class="label">Message:</span>
                <div class="message-content">
                    {{ $data['message'] }}
                </div>
            </div>
        </div>

        <div class="footer">
            <p>This message was sent via the contact form on<br>
            {{ config('app.name') }} • {{ date('Y') }}</p>
        </div>
    </div>
</body>
</html>