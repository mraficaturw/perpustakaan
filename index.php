<?php 
    session_start();

    if(!isset ($_SESSION['email'])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI PERPUSTAKAAN</title>
</head>
<body>
    <h1>Aplikasi Perpustakaan</h1>
    <a href="daftarBuku.php">LIHAT DAFTAR BUKU</a>
    <br>
    <a href="daftarStaff.php">LIHAT DAFTAR STAFF</a>
    <br>
    <br>
    <form action="./logout_proccess.php" method="POST">
        <button type="submit">LOGOUT</button>
    </form>
</body>
</html>