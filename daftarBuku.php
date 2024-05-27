<?php
include_once("./connect.php");

$query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR BUKU</title>
    <link rel="stylesheet" href="boostrap.min.css">
</head>

<body>
    <h1>DAFTAR BUKU</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama Buku</th>
                <th scope="col">ISBN</th>
                <th scope="col">Unit</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php foreach ($query as $buku) { ?>
            <tbody>
                <tr>
                    <td><?php echo $buku["nama_buku"] ?></td>
                    <td><?php echo $buku["isbn"] ?></td>
                    <td><?php echo $buku["unit"] ?></td>
                    <td>
                        <a href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>EDIT</a>
                        or
                        <a href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>DELETE</a>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>

    <a href="tambahBuku.php">Tambah Buku</a>
    <br>
    <a href="index.php">Kembali ke Halaman Utama</a>
</body>
<script src="boostrap.js"></script>

</html>