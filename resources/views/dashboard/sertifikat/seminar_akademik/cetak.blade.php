<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sertifikat</title>
    <style>
        .sertifikat::after {
            content: "";
            opacity: 0.10;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url({{ public_path('assets/img/logo/himti.png') }});
        }

        .sertifikat {
            border: 2px solid #000;
            padding: 20px;
            position: relative;

        }

        .ttd {
            margin-top: 140px;
            display: flex;
            justify-content: center;
            padding: 0 10px;

        }

        .barcode {
            position: absolute;
        }



        @media only screen and (max-width: 1500px) {
            .code {
                margin-right: 90px;
            }
        }

        @media only screen and (max-width: 768px) {
            .code {
                margin-right: 0px;
            }
        }

        .clearfix:after {
            content: "";
            display: block;
            clear: both;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        {{-- <div class="text-right my-4">
            <a href="{{ route('sertifikat.pdf', $sertifikat->id) }}" class="btn btn-danger">PDF</a>
        </div> --}}
        <div class="sertifikat">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center" style="text-align: center; ">
                    <img src="{{ public_path('assets/img/logo/umt.png') }}" alt="gambar" width="80">
                    <img src="{{ public_path('assets/img/logo/himti.png') }}" alt="gambar" width="100">
                </div>
            </div>
            <div class="row justify-content-end code">
                <div class="col-sm-6 barcode">
                     <div class="visible-print text-end" style="margin-right:140px;">
                        <img src="data:image/png;base64, {!! base64_encode(QrCode::size(100)->generate("https://himtiumt.org/sertifikat/$sertifikat->id ,$sertifikat->nama_peserta")) !!} ">
                    </div>
                </div>
            </div>
            <h1 class="text-center my-4 text-bold uppercase">SERTIFIKAT</h1>
            <p class="text-center mb-3">Diberikan Kepada:</p>
            <h1 class="text-center"><u>{{ $sertifikat->nama_peserta }}</u></h1>
            <h5 class="text-center">NIM: {{ $sertifikat->nim }}</h5>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p class="text-center">Atas Pertisipasinya Dalam Mengikuti Kegiatan Seminar Akademik Himpunan
                        Mahasiswa
                        Teknik
                        Informatika Universitas Muhammadiyah Tangerang</p>
                </div>
            </div>
            <div class="ttd clearfix">
                <div style="text-align: center; float: left; margin:0 20px;">
                    <div>
                        <img src="{{ public_path('assets/img/ttd/buyani.png') }}" alt="ttd" width="100">
                    </div>
                    <hr width="150">
                    <h6>Ahmad Saifullah</h6>
                    <h6>Nidn</h6>
                </div>
                <div style="text-align: center; float: left; margin:0 20px;">
                    <div>
                        <img src="{{ public_path('assets/img/ttd/buyani.png') }}" alt="ttd" width="100">
                    </div>
                    <hr width="150">
                    <h6>Ahmad Saifullah</h6>
                    <h6>Nidn</h6>
                </div>
                <div style="text-align: center; float: left; margin:0 20px;">
                    <div>
                        <img src="{{ public_path('assets/img/ttd/buyani.png') }}" alt="ttd" width="100">
                    </div>
                    <hr width="150">
                    <h6>Ahmad Saifullah</h6>
                    <h6>Nidn</h6>
                </div>
                <div style="text-align: center; float: left; margin:0 20px;">
                    <div>
                        <img src="{{ public_path('assets/img/ttd/buyani.png') }}" alt="ttd" width="100">
                    </div>
                    <hr width="150">
                    <h6>Ahmad Saifullah</h6>
                    <h6>Nidn</h6>
                </div>

            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
