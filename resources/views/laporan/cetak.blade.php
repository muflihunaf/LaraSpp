<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <link rel="stylesheet" href=" {{ asset('css/bootstrap.css') }} "> --}}
    <title>Cetak Pembayaran</title>
    <style>
        @page { size: 15cm 8cm;}
        .judul{
            font-size: 20px;
            font-style: bold;
        }
        /* #bank{
            margin-top: 0px auto;
        }
        #siswa{
            padding-top: 40px;
            margin-top: 0px auto;
        } */
    </style>
</head>
<body>
    <div id="bank">
    <label class="judul"> Bank Mini</label>
    <hr>
    <table>
        @foreach ($cetak as $list)
        <tr>
            <td><label for="">Nama Siswa:</label> </td>
            <td><label> {{ $list->nama }} </label></td>
        </tr>
        <tr>
                <td> <label >Bulan:</label> </td>
                <td> <label>{{ $list->bulan }}</label> </td>
        </tr>
            <tr>
                <td><label>Jumlah:</label></td>
                <td> <label> Rp.{{ $list->nominal }}</label> </td>
            </tr>
            <tr>
                <td><label>Tahun Ajaran:</label></td>
                <td> <label>{{ $list->tahun }}</label> </td>
            </tr>
            <tr>
                <td><label>Tanggal Bayar:</label></td>
                <td> <label>{{ $list->tanggal }}</label> </td>
            </tr>
        @endforeach    
    </table>
    <hr>
    </div>
    <br>
    <div id="siswa">
    <label class="judul"> Siswa</label>
    <hr>
    <table>
        @foreach ($cetak as $list)
        <tr>
            <td><label for="">Nama Siswa:</label> </td>
            <td><label> {{ $list->nama }} </label></td>
        </tr>
        <tr>
                <td> <label >Bulan:</label> </td>
                <td> <label>{{ $list->bulan }}</label> </td>
        </tr>
            <tr>
                <td><label>Jumlah:</label></td>
                <td> <label> Rp.{{ $list->nominal }}</label> </td>
            </tr>
            <tr>
                <td><label>Tahun Ajaran:</label></td>
                <td> <label>{{ $list->tahun }}</label> </td>
            </tr>
            <tr>
                <td><label>Tanggal Bayar:</label></td>
                <td> <label>{{ $list->tanggal }}</label> </td>
            </tr>
        @endforeach    
    </table>
    <hr>
    </div>
</body>
</html>