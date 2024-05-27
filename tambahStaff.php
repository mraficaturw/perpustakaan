<?php
include_once("./connect.php");

if (isset($_POST["submit"])) {
    $nama= $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db, "INSERT INTO staff VALUES (null, '$nama', '$telp', '$email') ");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Staff</title>
    <link rel="stylesheet" href="boostrap.min.css">
</head>

<body>
    <h1>Form Tambah Data Staff</h1>
    <br>
    <form action="" method="POST">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">No Telp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="telp" name="telp">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" id="submit" name="submit">Submit</button>
            <a href="daftarStaff.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Kembali ke Halaman Daftar Staff</a>
        </div>
    </form>
</body>
<script src="boostrap.js"></script>

</html>