<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('emails.welcome') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            text-align: center;
            padding-bottom: 20px;
        }
        .email-header h1 {
            margin: 0;
            color: #007bff;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.5;
            color: #333333;
        }
        .email-footer {
            text-align: center;
            padding-top: 20px;
        }
        .btn-success {
            color: #ffffff;
            background-color: rgba(23, 192, 110, 0.267);
            border-color: rgba(36, 207, 124, 0.267);
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-success:hover {
            background-color: rgba(65, 189, 129, 0.891);
            border-color: rgba(65, 189, 129, 0.173);
        }
    </style>
</head>
<body>

<div class="email-container">
    <div class="email-header">
        <h1>{{ __('emails.welcome') }}</h1>
    </div>
    <div class="email-body">
        <p>
            {{ __('emails.hello', ['name' => $user->name]) }}

        </p>

        <p>
            {{ __('emails.verify_email') }}
        </p>
    </div>
    <div class="email-footer">
        <a href="{{ route('verify', ['token' => $token]) }}" class="btn btn-success">{{ __('emails.verify_button') }}</a>
    </div>
</div>

</body>
</html>
