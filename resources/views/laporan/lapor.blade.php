<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak </title>
</head>
<body>
<style>
    *{
        font-family: arial;
    }
    table{
        margin: 0px auto;
        border-collapse: collapse;
        border: 1px solid #3d3d3d;
    }
    thead{
        background-color: #f1f1f1;
        color:#3d3d3d;
    }
    th{
        padding: 10px;
    }
    td{
        padding: 5px;
    }
    .container{
        margin: 0px auto;
        max-width: 500px;
    }
    .des{
        margin-top: -20px;
    }
</style>
{{-- <div class="container">
    <h1 align="center">SMKN 1 DLANGGU</h1>
    <p class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste odio placeat explicabo eveniet aut quos adipisci ab doloribus similique vero, iusto maxime rerum corporis iure quo possimus quaerat aspernatur numquam?</p>
</div> --}}
    <table border="1px">
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
        <tr>
            <td colspan="6">Total Sudah Dibayar</td>
            <td> <strong> Rp. {{ $duwit }} </strong> </td>
        </tr>
        </tbody>
    </table>
    
</body>
</html>