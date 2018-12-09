<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
</head>
<body>

    <table>
        <tr>
        <td>Nama Siswa</td>
        <td>Bulan</td>
        <td>Kelas</td>
        <td>tanggal</td>
        </tr>
        @foreach ($lihat as $list)
        <tr>
            <td> {{ $list->id_siswa }} </td> <br>
            <td> {{ $list->bulan }} </td> <br>
            <td> {{ $list->id_tahun }} </td> <br>
            <td> {{ $list->tanggal }} </td> <br>
        </tr>
        @endforeach
    </table>
    
</body>
</html>