<?php
include_once("./connect.php");

if (isset($_POST["submit"])) {
    $nama_buku = $_POST["nama_buku"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db, "INSERT INTO buku VALUES (null, '$nama_buku', '$isbn', $unit) ");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" href="boostrap.min.css">
</head>

<body>
    <h1>Form Tambah Data Buku</h1>
    <br>
    <form action="" method="POST">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama Buku</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_buku" name="nama_buku">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ISBN</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" name="isbn">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Unit</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="unit" name="unit">
            </div>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" id="submit" name="submit">Submit</button>
            <a href="daftarBuku.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Kembali ke Halaman Daftar Buku</a>
        </div>
    </form>
</body>
<script src="boostrap.js"></script>

</html>