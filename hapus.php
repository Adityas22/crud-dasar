<?php
include 'koneksi.php';

$id 	= $_GET['id'];

$sql	= "DELETE FROM provinsi WHERE id = '$id' ";
$query	= mysqli_query($connect, $sql);

if ($query) {
	header("Location: index.php?pesan=delete");
} else {
	echo "Hapus data gagal...";
}