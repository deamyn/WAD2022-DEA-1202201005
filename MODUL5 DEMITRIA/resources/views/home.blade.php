@extends('layouts.layout')
@extends('layouts.navbar')
@section('content')
<!-- Jumbotron -->
<section id="home">
    <div class="container">
        <div class="d-flex gap-5 wrap justify-content-center align-items-center">
            <div>
                <h1>Selamat Datang Di<br><b>Show Room Demitria!</b></h1>
                <p class="mt-3">Mau sewa mobil berkualitas dengan harga terjangkau? Kami spesialisnya!<br>Selalu menyediakan berbagai jenis mobil untuk keperluan anda.</p>
                <div class="d-flex  justify-content-lg-start mt-2">

                </div>
                <div class="d-flex align-items-center gap-5 mt-5">
                    <img src="assets/img/logo-ead.png" alt="logoead" style="width:100px;">
                    <p style="margin-top: 20px; font-size:14px;">Demitria_1202201005</p>
                </div>
            </div>
            {{-- display image from assets/img --}}
            <img src="assets/img/mini-cooper.png" alt="" style="width: 550px;height: 400px;">
        </div>
    </div>
</section>
<!-- Jumbotron End -->
@endsection