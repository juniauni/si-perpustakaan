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
        <p align="center"><b>Laporan Data Pinjam</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>No</th>
                <th><center>Kode</th>
                <th><center>Tanggal</th>
                <th><center>Pegawai</th>
                <th><center>Anggota</th>
                <th><center>Judul</th>
            </tr>
            @foreach($pinjams as $pjm)
            <tr>
                <td><center>{{$loop->iteration}}</th>
                <td><center>{{$pjm->kode}}</td>
                <td><center>{{$pjm->tanggal}}</td>
                <td><center>{{$pjm->pegawai_id}}</td>
                <td><center>{{$pjm->anggota_id}}</td>
                <td><center>{{$pjm->buku_id}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>