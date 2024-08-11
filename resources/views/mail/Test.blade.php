<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successful</title>
    <style>
        /* Inline Bootstrap CSS for email compatibility */
        @import url('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css');
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #007bff;
            padding: 20px;
            text-align: center;
            color: #ffffff;
        }
        .email-body {
            padding: 20px;
            color: #333333;
        }
        .email-footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>
<body>

<div class="email-container">
    <!-- Header -->
    <div class="email-header">
        <h1>Login Successful</h1>
    </div>

    <!-- Body -->
    <div class="email-body">
        <p>Dear User,</p>
        <p>You have successfully logged into your account. If this wasn't you, please contact our support team immediately.</p>
        <p>Thank you for choosing our service.</p>
        
        <a href="#" class="btn btn-primary">Go to Dashboard</a>
    </div>

    <!-- Footer -->
    <div class="email-footer">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
        <p>1234 Main Street, Anytown, USA</p>
    </div>
</div>

</body>
</html>
