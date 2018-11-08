<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.css') }} ">
    <title>Cetak Pembayaran</title>
    <style></style>
</head>
<body>



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
    
</body>
</html>