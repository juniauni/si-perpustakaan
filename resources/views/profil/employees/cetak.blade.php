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
        <p align="center"><b>Laporan Data Pegawai</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>No</th>
                <th><center>Kode</th>
                <th><center>Nama</th>
                <th><center>Alamat</th>
                <th><center>Username</th>
                <th><center>Password</th>
            </tr>
            @foreach($employees as $empl)
            <tr>
                <td><center>{{$loop->iteration}}</th>
                <td><center>{{$empl->kode}}</td>
                <td><center>{{$empl->nama}}</td>
                <td><center>{{$empl->alamat}}</td>
                <td><center>{{$empl->username}}</td>
                <td><center>{{$empl->password}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>