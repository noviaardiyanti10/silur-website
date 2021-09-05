<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/keranjang.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Keranjang</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand mx-4" href="#"><h4 class="text-warning">Silur</h4></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse mx-4" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                   <a class="nav-link active" aria-current="page" href="{{ url('/') }}"> <h5 class="text-warning">Home</h5></a>
                  </li>
                  <li class="nav-item">
                   <a class="nav-link" href="{{ url('/beranda') }}"> <h5 class="text-warning">Beranda</h5></a>
                  </li>

                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Masukkan kata kunci" aria-label="Search">
                  <button class="btn btn-outline-warning" type="submit">Cari</button>
                </form>
              </div>
            </div>
          </nav>
    </header>


    <section>
        <div class="container-fluid mt-4">
          <div class="card">
            <div class="row my-5">
                <div class="col-md-3 mt-4 content">
                    <img src="{{ asset('assets/img/eggs1.jpg') }}" class="w-75 h-50" alt="telur">
                    <p class="ml-4">Jumlah telur: 12 butir</p>
                </div>
                <div class="col-md-5 mt-5">
                    <p class="fw-bold">Harga Total: Rp. 2.500 x 12 butir = Rp. 15.000</p>
                </div>
                <div class="col-md-3 mt-4">
                    <p class="fw-bold">Status</p>
                    <button class="btn btn-success disabled">Diterima</button>
                </div>
            </div>
          </div>
          <div class="card">
            <div class="row my-5">
                <div class="col-md-3 mt-4 content">
                    <img src="{{ asset('assets/img/eggs1.jpg') }}" class="w-75 h-50" alt="telur">
                    <p class="ml-4">Jumlah telur: 12 butir</p>
                </div>
                <div class="col-md-5 mt-5">
                    <p class="fw-bold">Harga Total: Rp. 2.500 x 12 butir = Rp. 15.000</p>
                </div>
                <div class="col-md-3 mt-4">
                    <p class="fw-bold">Status</p>
                    <button class="btn btn-danger disabled">Ditolak</button>
                </div>
            </div>
          </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>