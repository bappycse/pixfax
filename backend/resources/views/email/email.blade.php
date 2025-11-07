<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['email'] ?? 'Notification' }}</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            background: #ffffff;
            margin: 40px auto;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 { color: #4f46e5; }
        .field { margin-bottom: 10px; }
        .field span { font-weight: bold; }
    </style>
</head>
<body>
<div class="email-container">
    <h1>{{ config('app.name', '') }}</h1>
    <p>Hello,</p>
    <p>Here is the information you submitted:</p>

    <div class="data-fields">
        @foreach ($data as $key => $value)
            <div class="field">
                <span>{{ ucfirst(str_replace('_', ' ', $key)) }}:</span> {{ $value }}
            </div>
        @endforeach
    </div>

    <p>Thank you!</p>
    <p><strong>Pixfax.com</strong></p>
</div>
</body>
</html>
