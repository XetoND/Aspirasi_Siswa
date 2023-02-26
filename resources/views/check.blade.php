@extends('layouts.main')
@section('container')
    <section class="py-4 justify-content-center" style="height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-12 mb-3">
                <img src="{{ asset('img/banner1.gif') }}" class="d-block shadow mb-2" height="350"
                    width="100%" alt="">
                <nav class="navbar navbar-expand-lg rounded shadow" style="background: linear-gradient(to right, #6dd5fa, #86fde8);">
                    <div class="container-fluid">
                        <a class="navbar-brand fw-bold" href="/check">Cari Aspirasi</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            </ul>
                            <div class="d-flex" role="search">
                                <div class="collapse navbar-collapse justify-content-center-end" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-6 mt-4"> 
                <div class="card shadow">
                    <div class="card-body" style="background: linear-gradient(to bottom, #6dd5fa, #ffffff);">
                        <div class="row">
                            <div class="col-12 pb-3 border-bottom">
                                <form action="/check" class="" method="get">
                                    <label class="form-label fw-bold">Nomor Pengaduan</label>
                                    <div class="input-group">
                                        <input type="text" required name="search" value="{{ request('search') }}"
                                            class="form-control" placeholder="Masukkan Nomor Pengaduan"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" style="background-color: #fffffff8"><i
                                                class="bi bi-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            @if (request('search') != null)
                            <div class="col-12 px-4  py-3">
                                @foreach ($aspirasi as $as)
                                <div class="d-flex">
                                    <p class="fw-bold p-0 m-0 me-2">Nomor Pengaduan : </p>
                                    <p class="p-0 m-0">{{ $as->id }}</p>
                                </div>
                                <div class="d-flex">
                                    <p class="fw-bold p-0 m-0 me-2">Status : </p>
                                    <p class="p-0 m-0">{{ $as->status }}</p>
                                </div>
                                <div class="d-flex">
                                    <p class="fw-bold p-0 m-0 me-2">Kategori : </p>
                                    <p class="p-0 m-0">{{ $as->kategori->ket_kategori }}</p>
                                </div>
                                <div class="d-flex">
                                    <p class="fw-bold p-0 m-0 me-2">Alamat : </p>
                                    <p class="p-0 m-0">{{ $as->input_aspirasi->lokasi }}</p>
                                </div>
                                <div class="d-block">
                                    <p class="fw-bold p-0 m-0 me-2">Keterangan : </p>
                                    <p class="p-0 m-0">{{ $as->input_aspirasi->ket }}</p>
                                </div>
    
                                @if ($as['status'] == 'Selesai' and $as['feedback'] == null)
                                <form action="/aspirasi/feedback" method="POST" class=" p-2  rounded-2 text-center">
                                    @csrf
                                    <div class="btn btn-dark">
                                        <input type="hidden" name="id_aspirasi" value="{{ $as->id  }}">
                                        <input type="radio" class="" required name="feedback" value="1" id="">
                                        <label class="form-check-label">
                                            1
                                        </label>
                                    </div>
                                    <div class="btn-danger btn">
                                        <input type="radio" name="feedback" required value="2" id="">
                                        <label class="form-check-label">
                                            2
                                        </label>
                                    </div>
                                    <div class="btn btn-warning">
                                        <input type="radio" name="feedback" required value="3" id="">
                                        <label class="form-check-label">
                                            3
                                        </label>
                                    </div>
                                    <div class="btn btn-success">
                                        <input type="radio" name="feedback" required value="4" id="">
                                        <label class="form-check-label">
                                            4
                                        </label>
                                    </div>
                                    <div class="btn btn-primary"> <input type="radio" required name="feedback" value="5"
                                            id="">
                                        <label class="form-check-label">
                                            5
                                        </label></div>
                                    <button type="submit" class="btn btn-secondary text-light"><i
                                            class="bi bi-send-fill"></i> </button>
                                </form>
                                @endif
                        
                            </div>
                            @endforeach
                            @else
                            @endif
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </section>
@endsection     