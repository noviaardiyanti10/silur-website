<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/keranjang.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <title>Keranjang</title>
</head>
<body>
  <header>
    @include('layouts.navbar')
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