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
<div class="container">
    <h3 align="center">SMKN 1 DLANGGU</h3>
</div>
    <table border="1px">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Bulan</th>
            <th>Kelas</th>
            <th>Status</th>
            <th>Tahun Ajaran</th>
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
            <td> {{ $list->kelas }} {{ $list->jurusan }} </td> 
            <td> {{ $list->status }} </td> 
            <td> {{ $list->tahun }} </td> 
        </tr>
        @endforeach
        <tr style="float:right;">
            <td colspan="5">Total Belum Dibayar</td>
            <td> <strong> Rp. {{ $duwit }} </strong></td>
        </tr>
        </tbody>
        
    </table>
    
</body>
</html>