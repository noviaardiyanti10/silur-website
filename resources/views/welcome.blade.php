<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">

    <!-- My css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <title>Silur</title>
  </head>
    <body>
        <!-- Navbar -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container">

                    <h3><a class="navbar-brand" href="#">Silur</a></h3>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div>
                        
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <a class="nav-item nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="#section2">Mitra</a>
                            <a class="nav-item nav-link" href="#section1">Tentang Kami</a>
                        <li class="nav-item">
                            <a class="tombol btn btn-primary" href="{{ url('/login') }}">Login <span class="sr-only">(current)</span></a>
                            <a class="tombol btn btn-primary" href="{{ url('/register') }}">Register <span class="sr-only">(current)</span></a>
                        </li> 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Akhir Navbar -->

            <!-- Jumbotron -->
            <div class="jumbotron jumbotron-fluid" style="background-image: url({{ asset('assets/img/jumbotron-bg.jpg') }});">
                <div class="container">
                    <h1 class="display-4">Website distribusi <span>telur</span> di <span>Bali </span></h1>
                    <button type="submit" class="tombol btn btn btn-warning text-white"><a href="#section1">Cek</a></button>
                </div>
            </div>
            <!-- Akhir Jumbotron -->
        </header>

        <main class="main-content">
            <div class="container mb-4" id="section1">
                <div class="row justify-content-center">
                    <div class="col-lg-12 justify-content-center d-flex">
                        <h3 class="title ">Tentang Kami</h3>
                    </div>
                    <div class="col-lg-6 deskripsi">
                        <img src="{{ asset('assets/img/eggs1.jpg') }}" alt="Telur" class="img-fluid" style="border-radius: 30px;">
                    </div>
                    <div class="col-lg-6 deskripsi text">
                        <h1>Website Sistem Informasi Distribusi Telur</h1>
                        <p class="mt-4">Silur merupakan aplikasi berbasis website yang tempat bagi supplier telur agar dapat memasarkan telurnya dengan mudah.
                        Pada saat ini mitra kami tersebar pada wilayah Kabupaten Tabanan dan melayani pembeli hingga ke beberapa wilayah seperti Tabanan, Buleleng dan Badung</p>

                        <p>Ingin membeli telur? <br> <a href="{{ url('/beranda') }}">Pesan ke mitra kami sekarang juga!</a></p>
                        
                    </div>
                </div>
            </div>
            <div class="mitra">
                <div class="container" id="section2">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 justify-content-center d-flex">
                            <h3 class="titl" id="ourmitra">Mitra Silur</h3>
                        </div>

                        <div class="col-lg-12 justify-content-center d-flex">
                            <div id="carouselExampleIndicators" class="carousel slide photo-mitra" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-bloc " src="{{ asset('assets/img/pak-karsana.jpg') }}" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block" src="{{ asset('assets/img/poto.jpg')}} " alt="Second slide">
                                  </div>
                
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-12 justify-content-center d-flex mt-3 ">
                            <div class="col-lg-3 justify-content-center d-flex">
                                 <h6 class="font-weight-light">Bapak Karsana</h6>
                             </div>
                         </div>
                         <div class="col-lg-12 justify-content-center d-flex">
                             <div class="col-lg-3 justify-content-center d-flex">
                                 <h6>Pupuan</h6>
                             </div>
                         </div>

                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="container">
                <p class="text-center" style="color: white;">Copyright : Silur</p>
            </div>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html> 