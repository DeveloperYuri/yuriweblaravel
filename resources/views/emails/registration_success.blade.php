<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Berhasil</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }

        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #777;
        }

        img.logo {
            height: 60px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Halo, {{ $nama }}!</h2>
        <p>Terima kasih telah melakukan pendaftaran. Kami telah menerima data kamu.</p>
        <p>Semoga sukses dalam lombanya ya!</p>

        <p>Salam hangat,</p>
        <p><strong>Tim Yuri Indonesia</strong></p>

        <img class="logo" src="https://yuri-indonesia.co.id/images/logo-8.png" alt="Logo Yuri Indonesia">

        <div class="footer">
            PT. Joenoes Ikamulya<br>
            Website: <a href="https://yuri-indonesia.co.id">yuri-indonesia.co.id</a><br>
            Jika kamu tidak merasa mendaftar, silakan abaikan email ini.
        </div>
    </div>
</body>

</html>

