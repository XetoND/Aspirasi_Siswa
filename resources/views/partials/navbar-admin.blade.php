<nav class="navbar navbar-expand-lg" style="background-color: #b8e4d4;">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-dark fs-3" href="/admin">Aspirasi Siswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-sm btn-danger">Log Out</button>
            </form>
        </div>
    </div>
</nav>