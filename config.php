<?php
error_reporting (E_ALL ^ E_WARNING||E_NOTICE);
$koneksi = mysqli_connect("localhost:3306", "id21028910_sabateknik", "syafan1215.", "id21028910_syafan");

$id = $_POST['Id'];
$name = $_POST['Name'];

$query = "INSERT INTO kontak VALUES ('$id', '$name') ";

mysqli_query($koneksi,$query);
?>