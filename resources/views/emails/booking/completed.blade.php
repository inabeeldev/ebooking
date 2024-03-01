<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations! Your Account has been Approved</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #FE6800;
            color: #ffffff;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #ffffff;
        }

        p {
            margin: 20px 0;
            font-size: 16px;
        }

        strong {
            color: #FE6800;
        }

        .login-btnn {
            display: inline-block;
            padding: 15px;
            background-color: #FE6800;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #D45C00;
        }

        .logo {
            width: 80px;
            height: auto;
            margin-bottom: 20px;
        }

        .attribution {
            margin-top: 20px;
            font-size: 12px;
            color: #5c0202;
        }

        .attribution a {
            color: #D45C00;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="text-align: center;">
            <h3>E-Booking</h3>
        </div>

        <h1 style="color:black">Congratulations from E-Booking! Your Booking has been Approved</h1>

        <p>Dear {{ $booking->name }},</p>

        <p>We are pleased to inform you that your booking has been approved.</p>
        <p>Your Booking No: <strong>{{ $booking->booking_no }}</strong></p>

        <p>
            <a class="login-btnn" href="{{ url('/') }}">
                Book More
            </a>
        </p>

        <p>Thank you for choosing our service.</p>
    </div>
</body>

</html>
