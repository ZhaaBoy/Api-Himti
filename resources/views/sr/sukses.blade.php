@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | HIFEST Rakit PC Sukses/')
@section('pendaftaran', 'active')
@section('content')

    <section class="section">
        <div class="container mt-2">
            <div class="page-error">
                <div class="page-inner text-center">
                    <h1 class="text-bold text-dark">Berhasil</h1>
                    <div class="page-description">
                        Terima Kasih <b>{{ $sr->nama_pendaftar }}</b> Sudah Mendaftar <i class="text-dark text-bold">HIFEST
                            Lomba Rakit PC</i>
                    </div>
                    <br>
                    <div class="page-search contact-details">
                        <h4>Untuk informasi lebih lanjut silahkan hubungi</h4>
                        <h5><a href="https://www.instagram.com/himtiumt/" class="text-dark" style="text-decoration: none;"><i
                                    class="mdi mdi-instagram"> @himtiumt</i> </a></h5>
                        <h5><a href="https://api.whatsapp.com/send?phone=6289630626130" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> 089630626130 (Deril Hamdani)</i>
                            </a></h5>
                        <h5><a href="https://api.whatsapp.com/send?phone=6282261038505" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> 082261038505 (Haidar Nabil
                                    Hibatullah)</i></a></h5>
                        <hr>
                        <h4>Subscribe Youtube HIMTI-UMT</h4>
                        <h5><a href="https://www.youtube.com/channel/UCiIhUjjcEp4S_kOvQU_BW8A" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-arrow-right-drop-circle"> HiTV</i></a></h5>
                    </div>
                    <div class="mt-3 btn btn-primary">
                        <a href="{{ route('home') }}">Back to
                            Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
