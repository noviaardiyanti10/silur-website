<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <h1><a class="navbar-brand font-weight-bold text-warning mt-2" href="#">Silur</a></h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-2">
          <li class="nav-item">
            <a class="nav-item nav-link font-weight-bold text-warning" href="{{ url('/') }}"><i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link font-weight-bold text-warning" href="{{ url('/notifikasi') }}"><i class="far fa-bell"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link font-weight-bold text-warning" href="{{ url('/keranjangpembeli') }}"><i class="fas fa-shopping-cart"></i></a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Masukan kata" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Cari</button>
        </form>
      </div>
    </div>
  </nav>

