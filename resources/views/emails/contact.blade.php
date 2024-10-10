<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Contact Us Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f6;
            margin: 0;
            padding: 0;
            color: #333;
            text-align: left;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 105px;
            height: 80px;
        }

        .content h1 {
            font-size: 24px;
            color: #000;
            text-align: center;
            margin: 52px 0;
        }

        .content p {
            font-size: 18px;
            color: #333;
            line-height: 28px;
            margin-bottom: 20px;
        }

        .content p strong {
            color: #000;
        }

        .footer {
            font-size: 12px;
            color: #919293;
            padding: 10px;
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="http://127.0.0.1:8000/assets/images/emaillogo.png" alt="Logo">
        </div>
        <div class="content">
            <h1>Moozway</h1>
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Phone Number:</strong> {{ $data['phone_number'] }}</p>
            @if($data['company_name'])
                <p><strong>Company Name:</strong> {{ $data['company_name'] }}</p>
            @endif
            <p><strong>Message:</strong></p>
            <p>{{ $data['message'] }}</p>
        </div>
    </div>
</body>
</html>
