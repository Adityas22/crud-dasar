<!DOCTYPE html>
<html>

<head>
    <title>Data Provinsi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <h1>Data Provinsi</h1>

    <div class="button-container">
        <!-- Tombol Tambah -->
        <form method="post" action="tambah.php">
            <input type="submit" value="Tambah" />
        </form>
    </div>

    <br>

    <?php
    include('koneksi.php');

    // Cek apakah ada pesan alert yang dikirimkan dari halaman sebelumnya
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "tambah") {
            echo "<script>Swal.fire('Berhasil', 'Data sudah ditambahkan', 'success');</script>";
        } elseif ($pesan == "update") {
            echo "<script>Swal.fire('Berhasil', 'Data sudah diperbarui', 'success');</script>";
        } elseif ($pesan == "delete") {
            echo "<script>Swal.fire('Berhasil', 'Data sudah dihapus', 'success');</script>";
        }
    }

    // Query untuk mendapatkan data provinsi dari database
    $query = "SELECT * FROM provinsi";
    $result = mysqli_query($connect, $query);

    // Periksa apakah ada data provinsi
    if (mysqli_num_rows($result) > 0) {
        // Tampilkan data provinsi dalam tabel
        echo "<table>";
        echo "<tr><th>No</th><th>Kota Provinsi</th><th>Ibukota Provinsi</th><th colspan='2'>Action</th></tr>";

        $no = 1; // Variabel nomor

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $row['kota_provinsi'] . "</td>";
            echo "<td>" . $row['ibukota_provinsi'] . "</td>";
            echo "<td class='actions'>";
            
            // Tombol Update
            echo "<a href='update.php?id=" . $row['id'] . "'>Update</a>";

            echo "</td>";
            echo "<td>";
            echo "<a href='hapus.php?id=" . $row['id'] . "'>Delete</a>";
            echo "</td>";
            echo "</tr>";

            $no++; // Tambahkan nomor
        }

        echo "</table>";
    } else {
        echo "Belum ada data provinsi.";
    }

    // Tutup koneksi ke database
    mysqli_close($connect);
    ?>

</body>

</html>