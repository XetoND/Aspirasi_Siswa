{{-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b8e4d4;">
  <div class="container-fluid">
    <a class="navbar-brand text-dark fw-bold fs-3" href="/">Aspirasi Siswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b8e4d4;">
    <div class="container-fluid">
      <a class="navbar-brand text-dark fw-bold fs-3" href="/">
        Aspirasi Siswa
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/check">Apirasi</a>
          </li>
        </ul>
      </div>
      <a class="navbar-brand text-dark fw-bold fs-3" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-person-circle d-inline-block align-text-top "></i>
      </a>

    </div>
  </nav>
  <div class="container">  @if (session()->has('LoginError'))
    <div class="alert alert-danger my-3 alert-dismissible fade show" role="alert">
      {{ session('LoginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif</div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Login Admin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/login" method="post">
            @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Username</label>
              <input type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" autofocus name="username" id="recipient-name">
              @error('username')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Password:</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" autofocus name="password" id="">
              @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
            </div>
       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline-primary">Login</button>
        </form>
        </div>
      </div>
    </div>
  </div>