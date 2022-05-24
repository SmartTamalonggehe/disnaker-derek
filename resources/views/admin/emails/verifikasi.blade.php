<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- get app url from env --}}
    @php
        $url = env('APP_URL');
    @endphp

    <h1>Verifikasi Data</h1>
    <p>Selamat {{ $pencaker->nm_pencaker }} Data Anda Berhasil Diverifikasi. Silahkan login pada aplikasi untuk
        mendownload Kartu Kuning Anda. Atauk Silahkan Klik <a href="{{ $url }}/CetakKartu">Disini</a></p>
</body>

</html>
