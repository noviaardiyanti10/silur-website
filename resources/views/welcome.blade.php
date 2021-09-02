<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> 
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

                <a class="navbar-brand" href="#">Silur</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div>
                    
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Mitra</a>
                        <a class="nav-item nav-link" href="#">Tentang Kami</a>
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
                <h1 class="display-4">Website distribusi <span>telur <br> terbesar</span> di <span>Bali </span></h1>
                <div class="tombol btn btn btn-primary">Cek</div>
            </div>
        </div>
        <!-- Akhir Jumbotron -->
    </header>

    <main class="main-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 justify-content-center d-flex">
                    <h3 class="title ">Tentang Kami</h3>
                </div>
                <div class="col-lg-6 deskripsi">
                    <img src="{{ asset('assets/img/eggs1.jpg') }}" alt="Telur" class="img-fluid" style="border-radius: 30px;">
                </div>
                <div class="col-lg-6 deskripsi text">
                    <h1>Website telur terbesar di bali</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde recusandae consequuntur vitae nostrum voluptas. Eius, nobis quae? Ab libero obcaecati maiores iste debitis sequi. Doloremque temporibus enim in consequuntur eos?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, minima! Ea autem, odit dicta Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error repellendus, sint amet deserunt, modi nobis iste mollitia assumenda quae architecto aliquid vero corporis maxime perspiciatis a aliquam tempora placeat in.</p>
                    
                </div>
                <div class="col-lg-12 mt-4">
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, ex mollitia? Quasi quisquam saepe molestias ea doloremque iure dolorum, eaque pariatur repellat neque iusto dignissimos laborum nobis facere at fuga Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ducimus voluptas nemo, illum eos quas nam nisi, nostrum enim dolorem quae nobis deserunt molestiae. Consequuntur totam facere sapiente doloribus provident!</p>
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, ex mollitia? Quasi quisquam saepe molestias ea doloremque iure dolorum, eaque pariatur repellat neque iusto dignissimos laborum nobis facere at fuga.</p>
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, ex mollitia? Quasi quisquam saepe molestias ea doloremque iure dolorum, eaque pariatur repellat neque iusto dignissimos laborum nobis facere at fuga Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur magnam, voluptatum accusamus, exercitationem consectetur ullam sit saepe perspiciatis ipsam, quas inventore iste voluptas. Iusto eius accusantium dolores ipsa commodi officia Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis incidunt provident doloremque natus, excepturi quaerat! Possimus, ipsum eaque perferendis vel voluptas dolorum deleniti nam odio facilis amet veritatis sapiente inventore.</p>
                </div>
            </div>
        </div>
        <div class="mitra">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 justify-content-center d-flex">
                        <h3 class="title ">Mitra Silur</h3>
                    </div>
                    <div class="col-lg-12 justify-content-center d-flex">
                            <div class="col-lg-3 justify-content-center d-flex" >
                                <img src="{{ asset('assets/img/profile.jpg') }}" alt="mitra" class="photo-mitra">
                            </div>
                            <div class="col-lg-3 justify-content-center d-flex">
                                <img src="{{ asset('assets/img/profile.jpg') }}" alt="mitra" class="photo-mitra">
                            </div>
                            <div class="col-lg-3 justify-content-center d-flex">
                                <img src="{{ asset('assets/img/profile.jpg') }}" alt="mitra" class="photo-mitra">
                            </div>
                            <div class="col-lg-3 justify-content-center d-flex">
                                <img src="{{ asset('assets/img/profile.jpg') }}" alt="mitra" class="photo-mitra">
                            </div>
                    </div>
                    <div class="col-lg-12 justify-content-center d-flex nama-mitra">
                        <div class="col-lg-3 justify-content-center d-flex" >
                            <h6>Tri Agustini</h6>
                        </div>
                        <div class="col-lg-3 justify-content-center d-flex">
                            <h6>Eka Nadya</h6>
                        </div>
                        <div class="col-lg-3 justify-content-center d-flex">
                            <h6>Novia Ardiyanti</h6>
                        </div>
                        <div class="col-lg-3 justify-content-center d-flex">
                            <h6>Theresia Girsang</h6>
                        </div>
                    </div>
                    <div class="col-lg-12 justify-content-center d-flex nama-mitra">
                        <div class="col-lg-3 justify-content-center d-flex" >
                            <p>Pupuan</p>
                        </div>
                        <div class="col-lg-3 justify-content-center d-flex">
                            <p>Penebel</p>
                        </div>
                        <div class="col-lg-3 justify-content-center d-flex">
                            <p>Klungkung</p>
                        </div>
                        <div class="col-lg-3 justify-content-center d-flex">
                            <p>Karangasem</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="row justify-content-center entahlah">
                <div class="col-lg-12 justify-content-center d-flex">
                    <h3 class="title ">Entahlah</h3>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <p class="text-center" style="color: white;margin-top: -10px;">Copyright : Silur</p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> 