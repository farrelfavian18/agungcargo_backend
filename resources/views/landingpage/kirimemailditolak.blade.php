<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            background-color: #ffffff;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #dddddd;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .email-body {
            font-size: 16px;
            line-height: 1.5;
        }

        .email-body p {
            margin: 10px 0;
        }

        .email-footer {
            font-size: 14px;
            color: #888888;
            text-align: center;
            margin-top: 20px;
        }

        .logo {
            width: 150px;
            margin: 0 auto 20px auto;
            display: block;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <img src={{ asset('img/logo.png') }} alt="Agung Cargo" class="logo">
        <div class="email-header">
            Maaf Lamaran anda ditolak
        </div>
        <div class="email-body">
            <p>Mohon Maaf lamaran anda kami tolak, semoga beruntung lain waktu.</p>
            <p>Terimakasih,</p>
            <p>HRD Agung Cargo</p>
        </div>
        <div class="email-footer">
            <i>Email ini dikirim secara otomatis oleh sistem, mohon tidak membalas email ini.</i>
        </div>
    </div>
</body>

</html>