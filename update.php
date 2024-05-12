<!DOCTYPE html>
<html>

<head>
    <title>Update Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Update Data</h1>

    <?php
    include('koneksi.php');

    // Periksa apakah ID telah diterima melalui parameter GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Query untuk mendapatkan data provinsi berdasarkan ID
        $query = "SELECT * FROM provinsi WHERE id = $id";
        $result = mysqli_query($connect, $query);

        // Periksa apakah data provinsi dengan ID yang diberikan ada di database
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Tampilkan formulir dengan data provinsi yang akan diperbarui
            echo "<form method='post' action='update_proses.php'>";
            echo "<input type='hidden' name='id' value='" . $row['id'] . "' />";
            echo "<label>Kota Provinsi:</label>";
            echo "<input type='text' name='kota_provinsi' value='" . $row['kota_provinsi'] . "' /><br>";
            echo "<label>Ibukota Provinsi:</label>";
            echo "<input type='text' name='ibukota_provinsi' value='" . $row['ibukota_provinsi'] . "' /><br>";
            echo "<button type='submit'>Update</button>";
            echo "</form>";
        } else {
            echo "Data provinsi tidak ditemukan.";
        }
    } else {
        echo "ID provinsi tidak valid.";
    }

    // Tutup koneksi ke database
    mysqli_close($connect);
    ?>

</body>

</html>