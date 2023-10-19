<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Student Data</h1>
        <p>{{ $students['001'] }}</p>
        <p>{{ "<script>alert('Kamu kena hack!!!!')</script>" }} </p>

        @php
            $nilai = 90;
        @endphp

        @if ($nilai > 60)
            <h5>Kamu Lulus</h5>
        @else
            <h5>Kamu tidak lulus!</h5>    
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>NAMA</th>
            </tr>
            @foreach ($students as $nim => $nama)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $nim }}</td>
                <td>{{ $nama }}</td>
            </tr>
            @endforeach
        </table>

        @switch(true)
            @case($nilai >= 81 && $nilai <= 100)
                @php
                    $warna = "success";
                    $grade = "A";
                @endphp
                @break
            @case($nilai >= 71 && $nilai <= 80)
                @php
                    $warna = "success";
                    $grade = "B";
                @endphp
                @break
            @case($nilai >= 61 && $nilai <= 70)
                @php
                    $warna = "warning";
                    $grade = "C";
                @endphp
                @break  
            @case($nilai >= 51 && $nilai <= 60)
                @php
                    $warna = "danger";
                    $grade = "D";
                @endphp
                @break 
            @case($nilai >= 0 && $nilai <= 50)
                @php
                    $warna = "danger";
                    $grade = "E";
                @endphp
                @break         
            @default
                @php
                    $warna = "dark";
                    $grade = "Tidak Valid";
                @endphp
        @endswitch

        <div class="alert alert-{{ $warna }}" role="alert">
            Nilai Anda {{ $nilai }}, Grade {{ $grade }}
        </div>
    </div>
    <script src="/bootstrap/bootstrap.bundle.min.js" ></script>
</body>
</html>