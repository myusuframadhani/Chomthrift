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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div id="wrapper">
        <ul class="navbar-nav sidebar sidebar-white bg-primary accordion text-white shadow-lg pt-3" id="accordionSidebar">
    
            <li class="mt-5 mx-2">
                <div>
                    <h4><i class="bi bi-funnel me-2"></i>Filter</h4>
                </div>
                <!-- //!! >>> SORT <<< -->
                <div class="mt-5 mx-2">
                    <h5>Sorting</h5>
                    <div class="my-2">
                        <button class="btn btn-success mx-1" type="submit" id="AZ">A - Z</button>
                        <button class="btn btn-success mx-1" type="submit" id="ZA">Z - A</button>
                    </div>
                    <div class="my-2">
                    </div>
                    
                    <hr class="sidebar-divider my-3 bg-white">

                    <h5>Size</h5>
                    <div class="my-2">
                        <button class="btn btn-dark mx-1" type="submit" id="S">   S   </button>
                        <button class="btn btn-dark mx-1" type="submit" id="M">   M   </button>
                        <button class="btn btn-dark mx-1" type="submit" id="L">   L   </button>
                    </div>
                    <div class="my-2">
                        <button class="btn btn-dark mx-1" type="submit" id="XL">  XL  </button>
                        <button class="btn btn-dark mx-1" type="submit" id="XXL"> XXL </button>
                    </div>
                    
                    <hr class="sidebar-divider my-3 bg-white">

                    <h5>Category</h5>
                    <div class="my-2"><button class="btn btn-warning mx-1" type="submit" id="HODDIE">   Hoodie   </button></div>
                    <div class="my-2"><button class="btn btn-warning mx-1" type="submit" id="SHIRT">   T-Shirt   </button></div>
                    <div class="my-2">
                        <button class="btn btn-warning mx-1" type="submit" id="FLANEL">   Flanel   </button>
                    </div>
                    <div class="my-2">
                        <button class="btn btn-warning mx-1" type="submit" id="CREWNECK">  Crewneck </button>
                    </div>
                    
                </div>
            </li>
    
        </ul>
    

    <div id="content-wrapper" class="d-flex flex-column">
        <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">
            <div class="container mb-2">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                </ul>
                <form class="d-flex" role="search" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_text" id="search_text">
                    <button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                </div>
            </div>
        </nav>

        <!-- //!! >>> TITLE DAN BODY <<< -->
        <div class="container py-5 mt-5">
            
            <div class="d-flex justify-content-between">
                <h1 class="text-start text-black fw-bold mb-5">Dashboard</h1>
                <div>
                    <p class="d-grid gap-2 d-md-block"><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertModal"><i class="fa-solid fa-shirt me-2"></i>Tambah Produk</a></p>
                </div>
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
    </div>

    </div>

    <!-- navbar -->
    <!-- akhir navbar -->
    
    <!-- //!! >>> SEARCH <<< -->
    <!-- <div class="d-flex flex-row-reverse my-3 mx-2">
        <form class="d-flex col-4" method="POST">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_text" id="search_text">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

    </div> -->
    
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="ajax.js"></script>
</body>

</html>