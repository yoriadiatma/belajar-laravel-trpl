<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php
        foreach ($listMahasiswa as $mhs) { ?>
            <li><?= $mhs ?></li>
        <?php } ?>
    </ol>
    <table border="1" width="60%">
        <tr>
            <th width="50px">No</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>AKSI</th>
        </tr>
        <?php
        $nomor = 1;
        foreach ($arrayMhs as $mhs => $value) { ?>
            <tr>
                <td align="center"><?= $nomor++ ?></td>
                <td><?= $mhs ?></td>
                <td><?= $value ?></td>
                <td align="center">
                    <a href="mahasiswa/{{ $mhs }}">Detail</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <p>Copyright &copy; <?= date("Y") ?> </p>
</body>

</html>