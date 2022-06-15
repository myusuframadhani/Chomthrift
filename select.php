<?php
require_once("db.php");

if (isset($_POST["sort"])) {
    $query = '';
    if ($_POST["sort"] == "asc") {
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) ORDER BY nama_fashion ASC";
    } else {
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) ORDER BY nama_fashion DESC";
    }
    $result = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($result)) {
        echo '
        <div class="col-md-4 col-xxl-3 mb-4">
            <div class="card h-100 " style="width: 18rem;">
                <img src="https://dj7u9rvtp3yka.cloudfront.net/products/PIM-1578905692978-49141390-6742-4188-8897-0f365f013a8f_v1-small.jpg" class="card-img-top" alt="...">
                <div class="card-body ">
                    <h5 class="card-title">' . $data["nama_fashion"] . '</h5>
                    <p class="card-text">' . $data["ukuran"] . '</p>
                    <p class="card-text">' . $data["harga"] . '</p>
                    
                <a href="#" class="btn mt-auto btn-primary">Go somewhere</a>
                <a href="#" class="btn mt-auto btn-danger" id="' . $data["id_fashion"] . '" onclick="hapus(' . $data["id_fashion"] . ')">Hapus</a>
                </div>
            </div>
        </div>';
    }
} else if (isset($_POST["ukuran"])) {
    $query = '';
    if ($_POST["ukuran"] == "S") {
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) WHERE ukuran='S'";
    } else if ($_POST["ukuran"] == "M") {
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) WHERE ukuran='M'";
    } else if ($_POST["ukuran"] == "L") {
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) WHERE ukuran='L'";
    } else if ($_POST["ukuran"] == "XL") {
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) WHERE ukuran='XL'";
    } else {
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) WHERE ukuran='XXL'";
    }
    $result = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($result)) {
        echo '
        <div class="col-md-4 col-xxl-3 mb-4">
            <div class="card h-100 " style="width: 18rem;">
                <img src="https://dj7u9rvtp3yka.cloudfront.net/products/PIM-1578905692978-49141390-6742-4188-8897-0f365f013a8f_v1-small.jpg" class="card-img-top" alt="...">
                <div class="card-body ">
                    <h5 class="card-title">' . $data["nama_fashion"] . '</h5>
                    <p class="card-text">' . $data["ukuran"] . '</p>
                    <p class="card-text">' . $data["harga"] . '</p>
                   
                <a href="#" class="btn mt-auto btn-primary">Go somewhere</a>
                <a href="#" class="btn mt-auto btn-danger" id="' . $data["id_fashion"] . '" onclick="hapus(' . $data["id_fashion"] . ')">Hapus</a>
                </div>
            </div>
        </div>';
    }
} else if (isset($_POST["jenis_categories"])) {
    $query = '';
    if ($_POST["jenis_categories"] == "hoddie") {
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) WHERE jenis_categories='hoddie'";
    } else if ($_POST["jenis_categories"] == "shirt") {
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) WHERE jenis_categories='shirt'";
    } else if ($_POST["jenis_categories"] == "flanel") {
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) WHERE jenis_categories='flanel'";
    } else {
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) WHERE jenis_categories='crewneck'";
    }
    $result = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($result)) {
        echo '
        <div class="col-md-4 col-xxl-3 mb-4">
            <div class="card h-100 " style="width: 18rem;">
                <img src="https://dj7u9rvtp3yka.cloudfront.net/products/PIM-1578905692978-49141390-6742-4188-8897-0f365f013a8f_v1-small.jpg" class="card-img-top" alt="...">
                <div class="card-body ">
                    <h5 class="card-title">' . $data["nama_fashion"] . '</h5>
                    <p class="card-text">' . $data["ukuran"] . '</p>
                    <p class="card-text">' . $data["harga"] . '</p>

                <a href="#" class="btn mt-auto btn-primary">Go somewhere</a>
                <a href="#" class="btn mt-auto btn-danger" id="' . $data["id_fashion"] . '" onclick="hapus(' . $data["id_fashion"] . ')">Hapus</a>
                </div>
            </div>
        </div>';
    }
} else {

    //!! >>> SEARCH <<<
    $output = '';
    if (isset($_POST["query"])) {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $limit = 8;
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) WHERE nama_fashion LIKE '%" . $search . "%' ORDER BY nama_fashion ASC LIMIT 0, $limit";

    } elseif (isset($_POST["load"])) {
        $count = "SELECT count(*) AS jumlah FROM fashion";
        $hasil = $conn->prepare($count);
        $hasil->execute();
        $res1 = $hasil->get_result();
        $row = $res1->fetch_assoc();
        $total_records = $row['jumlah'];
        $total_records -= 8;
        $jumlah_page = ceil($total_records / $_POST["load"]);
        $limit = 8;
        $limit += $_POST["load"];
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size ) ORDER BY nama_fashion ASC LIMIT 0, $limit";

    } else {
        $limit = 8;
        $query = "SELECT fashion.id_fashion, fashion.nama_fashion, fashion.harga, categories.jenis_categories, size.ukuran
        FROM ((fashion
        INNER JOIN categories ON fashion.id_categories = categories.id_categories)
        INNER JOIN size ON fashion.id_size = size.id_size) ORDER BY nama_fashion ASC LIMIT 0, $limit";
    }
    $result = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($result)) {
        $output .= '
        <div class="col-md-4 col-xxl-3 mb-4">
            <div class="card h-100 " style="width: 18rem;">
                <img src="https://dj7u9rvtp3yka.cloudfront.net/products/PIM-1578905692978-49141390-6742-4188-8897-0f365f013a8f_v1-small.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">' . $data["nama_fashion"] . '</h5>
                    <p class="card-text">' . $data["ukuran"] . '</p>
                    <p class="card-text">' . $data["harga"] . '</p>
                    
                <a href="#" class="btn mt-auto btn-primary">Go somewhere</a>
                <a href="#" class="btn mt-auto btn-danger" id="' . $data["id_fashion"] . '" onclick="hapus(' . $data["id_fashion"] . ')">Hapus</a>
                </div>
            </div>
        </div>';
    }
    echo $output;
}

?>

<script>
    //!! >>> HAPUS DATA <<<
    function hapus(id) {
        if (confirm("Apakah anda yakin?")) {
            $.ajax({
                url: "delete.php",
                method: "POST",
                data: {
                    id_fashion: id
                },
                success: function(data) {
                    console.log("Data berhasil dihapus")
                    $.ajax({
                        url: "select.php",
                        method: "POST",
                        data: {
                            query: ''
                        },
                        success: function(data) {
                            $('#content').html(data);
                        }
                    });
                }
            });

        }
    }
</script>