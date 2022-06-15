<?php

require_once("db.php");


if (isset($_POST["id_fashion"])) {
    $id = $_POST["id_fashion"];
    $query = "DELETE FROM fashion WHERE id_fashion = $id";

    mysqli_query($conn, $query);
}
