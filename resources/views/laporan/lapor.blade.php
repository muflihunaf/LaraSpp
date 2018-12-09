<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak </title>
</head>
<body>

    <table>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Bulan</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Tahun Ajaran</th>
            <th>tanggal</th>
            </tr>
        </thead>
        <tbody>
    @php
        $no = 1;
    @endphp
        @foreach ($lihat as $list)
        <tr>
            <td> {{ $no++ . '.' }} </td>
            <td> {{ $list->nama }} </td>
            <td> {{ $list->bulan }} </td> 
            <td> {{ $list->kelas }} </td> 
            <td> {{ $list->jurusan }} </td> 
            <td> {{ $list->tahun }} </td> 
            <td> {{ $list->tanggal }} </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
</body>
</html>