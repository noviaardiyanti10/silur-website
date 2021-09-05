<!doctype html>
<html lang="en">

<head>
    <title>Silur | Beranda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>

<body>
    <header>
        @include('layouts.navbar')
    </header>
        <!-- Page Content  -->
        <div>
            <div class="row d-flex justify-content-center" style="padding: 50px;">
                <div class="col-lg-3 mx-5 ">
                    <div class="card" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; border: none; width: 15rem;">
                        <img src=" {{ asset('assets/img/produk.jpg') }}" class="card-img-top" alt="test">
                        <div class="card-body">
                            <h5 class="card-title">Telur Ayam</h5>
                            <h6 class="card-subtitle">Pak Karsana </h6>
                            <p class="card-text">Rp. 50.000,00</p>
                            <a href="{{ url('/detaildagang')}}" class="btn btn-primary tombol d-flex justify-content-center">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; border: none; width: 15rem;">
                        <img src=" {{ asset('assets/img/produk.jpg') }}" class="card-img-top" alt="test">
                        <div class="card-body">
                            <h5 class="card-title">Telur Ayam</h5>
                            <h6 class="card-subtitle">Pak Karsana </h6>
                            <p class="card-text">Rp. 50.000,00</p>
                            <a href="{{ url('/detaildagang')}}" class="btn btn-primary tombol d-flex justify-content-center">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; border: none; width: 15rem;">
                        <img src=" {{ asset('assets/img/produk.jpg') }}" class="card-img-top" alt="test">
                        <div class="card-body">
                            <h5 class="card-title">Telur Ayam</h5>
                            <h6 class="card-subtitle">Pak Karsana </h6>
                            <p class="card-text">Rp. 50.000,00</p>
                            <a href="{{ url('/detaildagang')}}" class="btn btn-primary tombol d-flex justify-content-center">Detail</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>