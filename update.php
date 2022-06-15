<?php

require_once("db.php");

$id  = $_POST["id_fashion"];
$nama_fashion = $_POST["nama_fashion"];
$harga = $_POST["harga"];
$id_categories = $_POST["id_categories"];
$id_size = $_POST["id_size"];


$query = "UPDATE fashion SET nama_fashion = '" . $nama_fashion . "'
    ,harga = '" . $harga. "'
    ,id_categories = '" . $jenis_categories . "'
    ,id_size = '" . $ukuran . "'
    WHERE id_fashion = '" . $id . "'";

mysqli_query($conn, $query);