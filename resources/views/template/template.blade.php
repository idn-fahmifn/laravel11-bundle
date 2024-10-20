<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <!-- Area Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #173158;">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- End Area -->
  <div class="container mt-3">
    <div class="row">
      <!-- area-header -->
      <div class="col-md-12">
        <div class="card p-2" style="background-color: #173158;">
          <div class="card-body text-white">
            <!-- Area Judul -->
            <h3>Halaman data seluruh barang</h3>
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem aut ullam excepturi debitis autem facilis. Minima, ut ipsa a minus tempora aperiam? Maiores, exercitationem unde! Tempora quaerat quos, repellendus et aut maiores nesciunt eum, soluta natus, doloribus itaque temporibus ex?</p>
            <div class="button-area">
              <button class="btn btn-danger">Tambah data</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end-area-header -->

      <!-- Area Body -->
       <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <th>Nama Barang</th>
                  <th>Merek</th>
                  <th>Harga</th>
                  <th>Pilihan</th>
                </thead>
              </table>
            </div>
          </div>
        </div>
       </div>
       <!-- End Area -->
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>