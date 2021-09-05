<!doctype html>
<html lang="en">

<head>
    <title>Silur | Beranda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   

    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">

                <a class="navbar-brand font-weight-bold text-warning" href="#">Silur</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div>
                    
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <a class="nav-item nav-link font-weight-bold text-warning" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link font-weight-bold text-warning" href="#">Hubungi Kami</a>
                        <a class="nav-item nav-link font-weight-bold text-warning" href="{{ url('/keranjangpembeli') }}">Keranjang</a>
                    </ul>
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Masukan kata kunci" aria-label="Search">
                    <button class="btn btn-outline-warning my-4 my-sm-0 font-weight-bold text-white" type="submit">Search</button>
                  </form>
            </div>
        </nav>
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