<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan Data</title>
</head>

<body>
    <h1>Menambahkan Data</h1>

    <form method="post" action="tambah_proses.php">
        <label for="nama_provinsi">Nama Provinsi:</label>
        <input type="text" name="nama_provinsi" required>

        <label for="ibukota_provinsi">Ibukota Provinsi:</label>
        <input type="text" name="ibukota_provinsi" required>
        <br>
        <input type="submit" value="Tambah">
    </form>

</body>

</html>