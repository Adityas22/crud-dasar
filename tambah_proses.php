<?php
include "koneksi.php";

$provinsi = $_POST["nama_provinsi"];
$ibukota = $_POST["ibukota_provinsi"];

$query = "INSERT INTO provinsi (kota_provinsi, ibukota_provinsi) VALUES ('$provinsi', '$ibukota')";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));

if ($result) {
    header("Location: index.php?pesan=tambah");
} else {
    echo "Terjadi kesalahan saat menambahkan data provinsi: " . mysqli_error($connect);
}

mysqli_close($connect);
?>