<?php

require_once("db.php");

$nama_fashion = $_POST["nama_fashion"];
$harga = $_POST["harga"];
$id_categories = $_POST["id_categories"];
$id_size = $_POST["id_size"];


$query = "INSERT INTO fashion (nama_fashion, harga, id_categories, id_size) VALUES ('" . $nama_fashion . "', '" . $harga . "', '" . $id_categories . "', '" . $id_size . "')";

mysqli_query($conn, $query);