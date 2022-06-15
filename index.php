<?php
require_once("db.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>KATALOG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="style.css" rel="stylesheet">

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow p-2 mb-5 bg-primary fixed-top">
        <div class="container mb-2">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
            <form class="d-flex" role="search" method="POST">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_text" id="search_text">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->
    
    <!-- //!! >>> SEARCH <<< -->
    <!-- <div class="d-flex flex-row-reverse my-3 mx-2">
        <form class="d-flex col-4" method="POST">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_text" id="search_text">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

    </div> -->
    
    <!-- //!! >>> TITLE DAN BODY <<< -->
    <div class="container py-5 mt-5">
        <h1 class="text-center">Katalog Trift Shop</h1>

        <p class="d-grid gap-2 d-md-block"><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertModal">Tambah Catalog</a></p>
        
        <!-- //!! >>> SORT <<< -->
        <div class="">
            <h4>filter</h4>
            <button class="btn btn-outline-primary mx-1" type="submit" id="ZA">Z - A</button>
            <button class="btn btn-outline-primary mx-1" type="submit" id="AZ">A - Z</button>
            <br><br>
            <h5>ukuran</h5>
            <button class="btn btn-outline-primary mx-1" type="submit" id="S">   S   </button>
            <button class="btn btn-outline-primary mx-1" type="submit" id="M">   M   </button>
            <button class="btn btn-outline-primary mx-1" type="submit" id="L">   L   </button>
            <button class="btn btn-outline-primary mx-1" type="submit" id="XL">  XL  </button>
            <button class="btn btn-outline-primary mx-1" type="submit" id="XXL"> XXL </button>
            <br><br>
            <h5>categories</h5>
            <button class="btn btn-outline-primary mx-1" type="submit" id="HODDIE">   Hoodie   </button>
            <button class="btn btn-outline-primary mx-1" type="submit" id="SHIRT">   T-Shirt   </button>
            <button class="btn btn-outline-primary mx-1" type="submit" id="FLANEL">   Flanel   </button>
            <button class="btn btn-outline-primary mx-1" type="submit" id="CREWNECK">  Crewneck </button>
        </div>
        <div class="row my-5" id="content"> 

        </div>
        <div class="d-grid gap-2 mt-4 mx-5">
            <button class="btn btn-primary shadow fw-bold my-auto halaman mx-3" type="submit" id="load-menu"><i class="bi bi-arrow-down-circle mx-2 fw-bold fs-5"></i>Load More</button>
        </div>

    </div>
    <!-- //!! >>> MODAL UNTUK ADD DATA <<< -->
    <div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Koleksi Katalog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="title" class="form-label">nama_fashion:</label>
                            <input type="text" class="form-control" id="nama_fashion" name="nama_fashion" style="text-transform:uppercase">
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Harga:</label>
                            <input type="number" class="form-control" min="0" max="9999999" name="harga" id="harga">
                        </div>
                        <div class="mb-3"> 
                            <label for="kategori" class="col-form-label wajib">Kategori</label>
                            <div class="">
                                <select class="form-select" id="id_categories" name="id_categories" required="required">
                                <option selected></option>
                                <option value="1">Hoddie</option>
                                <option value="2">Shirt</option>
                                <option value="3">Flanel</option>
                                <option value="4">Crewneck</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3"> 
                            <label for="ukuran" class="col-form-label wajib">Ukuran</label>
                            <div class="">
                                <select class="form-select" id="id_size" name="id_size" required="required">
                                <option selected></option>
                                <option value="1">S</option>
                                <option value="2">M</option>
                                <option value="5">L</option>
                                <option value="3">XL</option>
                                <option value="4">XXL</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" id="save">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="ajax.js"></script>
</body>

</html>