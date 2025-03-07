<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Peserta Bootcamp 2023</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5 style="margin-button: 5px">Data Peserta Bootcamp 2023</h5>
    </center>
    <table class='table table-bordered'>
        <thead>
            <tr class="text-center">
                <th style="width: 2%">No</th>
                <th class="text-uppercase">Nama</th>
                <th>Nim</th>
                <th>Kelas</th>
                <th>Email</th>
                <th>Angkatan</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Pengalaman Organisasi</th>
                <th>No Handphone</th>
                <th>No Keluarga</th>
                <!--<th>Pembayaran</th>-->
            </tr>
        </thead>
        <tbody>
          @foreach ($btcmp1 as $btcmps)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $btcmps->nama }}</td>
                <td>{{ $btcmps->nim }}</td>
                <td>{{ $btcmps->kelas }}</td>
                <td>{{ $btcmps->email }}</td>
                <td>{{ $btcmps->angkatan }}</td>
                <td>{{ date('d-m-Y', strtotime($btcmps->tgl_lahir))}}</td>
                <td>{{ $btcmps->alamat }}</td>
                <td>{{ $btcmps->organ }}</td>
                <td>{{ $btcmps->no_hp }}</td>
                <td>{{ $btcmps->no_kel }}</td>
                <!--<td><img src="{{ public_path(Storage::url($btcmps->pembayaran)) }}" alt="gambar" width="100px"></td>-->
            </tr>
       @endforeach
        </tbody>
    </table>

</body>

</html>
