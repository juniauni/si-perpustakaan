<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        table.static{
            position: relative;
            border :1px solid #543535;
        }
    </style>
    <title>Cetak Data</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Anggota</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>No</th>
                <th><center>Kode</th>
                <th><center>Nama</th>
                <th><center>Alamat</th>
                <th><center>Nomor HP</th>
                <th><center>Email</th>
            </tr>
            @foreach($members as $mbr)
            <tr>
                <td><center>{{$loop->iteration}}</th>
                <td><center>{{$mbr->kode}}</td>
                <td><center>{{$mbr->nama}}</td>
                <td><center>{{$mbr->alamat}}</td>
                <td><center>{{$mbr->tlp}}</td>
                <td><center>{{$mbr->email}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>