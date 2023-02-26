@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col-12 mb-4">
        <img src="{{ asset('img/banner1.gif') }}" class="d-block rounded-3" height="500" width="100%"
                  alt="">
    </div>
    <div class="col-12">
            <Article>
                <h1 class="fw-bold mb-2">Layanan Aspirasi Siswa</h1>
                <p>Selamat datang di Layanan Pengaduan Sekolah, disini tempat untuk para siswa/i mengajukan
                    aspirasi nya sebagai mana siswa/i SMK Telkom Jakarta juga merupakan Warga SMK Telkom.</p>
                <p>Untuk memulai pengajuan silahkan klik tombol dibawah ini dan masukkan aspirasi kalian!
                </p>
            </Article>
      
    </div>
    <div class="col-12">
        <a href="/aspirasi" class="btn btn-primary fw-bold">Yuk Kirimkan Aspirasi</a>
    </div>
</div>
@endsection