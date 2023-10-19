<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    <p>NIM : {{ $mahasiswa['nim'] }}</p>
    <p>Nama : {{ $mahasiswa['nama'] }}</p>
    <br>
    <a href="/mahasiswa">Kembali ke data mahasiswa</a>
</body>
</html>