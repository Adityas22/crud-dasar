<?php
include 'koneksi.php';

$id	= $_POST['id'];
$provinsi    = $_POST['kota_provinsi'];
$ibukota	= $_POST['ibukota_provinsi'];


$sql	= "UPDATE provinsi SET kota_provinsi='$provinsi', ibukota_provinsi='$ibukota' WHERE id = '$id'";
$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));


if ($query) {
    header("Location: index.php?pesan=update");
} else {
	echo "Update data gagal";
}