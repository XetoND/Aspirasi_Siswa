@extends('layouts.main')
@section('container')
<section id="input" style="height: 100vh;">
    <div class="row d-flex  justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            @if (request('id') != null)
            <div class="alert mt-3 alert-warning alert-dismissible fade show" role="alert">
                <strong>Terimakasih Telah Melakukan Pengaduan <br>
                    Nomor Pengaduan : {{ request('id') }}</strong><br>
                <small class="">Silahkan Di Ingat Nomor pengaduannya!!</small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          
            @endif
            @if (request('nis') != null)
            <div class="alert mt-3 alert-danger alert-dismissible fade show" role="alert">
               <strong> nis Anda Belum Terdaftar!! </strong><br>
               <small>Silahkan Isi Datanya Kembali Dengan Benar</small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          
            @endif
            <div class="card">
                <div class="card-body p-5">
                    <h2>Isi Data Aspirasi</h2>
                    <form action="/aspirasi/store" method="POST">
                        @csrf 
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nomor Pengaduan</label>
                            <input type="text" name="id" class="form-control text-dark fw-bold" readonly
                                value="{{ $no }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nomor Induk Siswa</label>
                            <input type="number" name="nis" value="{{ old('nis') }}"
                                class="form-control @error('nis') is-invalid @enderror">
                            @error('nis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Kategori</label>
                                        {{-- @foreach ($kategori as $kat) --}}
                                        <div>
                                            <select id="id_kategori1" name="kategori_id" class="form-select @error('kategori_id') is-invalid @enderror">
                                                <option value="1">Kebersihan</option>
                                                <option value="2">Keamanan</option>
                                                <option value="3">Kesehatan</option>
                                            </select>
                                            @error('kategori_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            
                                            {{-- <input class="form-check-input" value="{{ $kat->id }}" type="radio"
                                                name="kategori_id" id="id_kategori1">
                                            <label class="form-check-label" for="id_kategori1">
                                                {{ $kat->ket_kategori }}
                                            </label> --}}
                                        </div>
                                        {{-- @endforeach --}}
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Lokasi</label>
                            <input type="text" name="lokasi" value="{{ old('lokasi') }}"
                                class="form-control  @error('lokasi') is-invalid @enderror">
                            @error('lokasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Keterangan</label>
                            <textarea name="ket" id="" value="{{ old('ket') }}"
                                class="form-control @error('ket') is-invalid @enderror" rows="2"></textarea>
                            @error('ket')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
          
            </div>
        </div>
    </div>
</section>

@endsection