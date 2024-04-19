@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | Pendaftaran Sukses')
@section('pendaftaran', 'active')
@section('content')

    <section class="section">
        <div class="container mt-2">
            <div class="page-error">
                <div class="page-inner text-center">
                    <h1 class="text-bold text-dark">Berhasil</h1>
                    <div class="page-description">
                        Terima Kasih <b>{{ $kb->nama }}</b> Sudah Mendaftar <i class="text-dark text-bold">Kelompok
                            Belajar <b>{{ $kb->bidang }}</b></i>
                    </div>
                    <h4 class="mt-5">Silakan cek E-mail verifikasi untuk menyelesaikan proses pendaftaran</h4>
                    <div class="page-search contact-details">
                        <h4>Untuk informasi lebih lanjut</h4>
                        <h5><a href="https://www.instagram.com/himtiumt/" class="text-dark" style="text-decoration: none;"><i
                                    class="mdi mdi-instagram"> @himtiumt</i> </a></h5>
                        <h5><a href="https://api.whatsapp.com/send?phone=6285880170806" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> 085880170806 (Akmal 
                                Haidar Najib)</i> </a></h5>
                        <h5><a href="https://api.whatsapp.com/send?phone=6289512786775" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> 089512786775 (Muhammad 
                                Solehhudin Ariyanto)</i></a></h5>
                        <h5><a href="https://api.whatsapp.com/send?phone=6282316000241" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> 082316000241 (Ari 
                                Ardhika Nugraha)</i></a></h5>
                        <hr>
                        <h5><a href="https://chat.whatsapp.com/GYxTBasyxFUFXKBoM6gNjl" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> Kelompok Belajar Android </i></a></h5>
                        <h5><a href="https://chat.whatsapp.com/LvE7qe9k8pjEoYgjPbxv02" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> Kelompok Belajar Jaringan </i></a></h5>
                        <h5><a href="https://chat.whatsapp.com/ExzhcxODiHH6rZrrTQSSXD" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> Kelompok Belajar Web </i></a></h5>
                        <h5><a href="https://chat.whatsapp.com/Dw71axP7oUJ3cIxva2Ovd8" class="text-dark"
                                style="text-decoration: none;"><i class="mdi mdi-whatsapp"> Kelompok Belajar Design </i></a></h5>
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
