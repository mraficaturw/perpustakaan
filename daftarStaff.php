<?php
include_once("./connect.php");

$query = mysqli_query($db, "SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR STAFF</title>
    <link rel="stylesheet" href="boostrap.min.css">
</head>

<body>
    <h1>DAFTAR STAFF</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Telpon</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php foreach ($query as $staff) { ?>
            <tbody>
                <tr>
                    <td><?php echo $staff["nama"] ?></td>
                    <td><?php echo $staff["telp"] ?></td>
                    <td><?php echo $staff["email"] ?></td>
                    <td>
                        <a href=<?php echo "edit-staff.php?id=" . $staff["id"] ?>>EDIT</a>
                        or
                        <a href=<?php echo "delete-staff.php?id=" . $staff["id"] ?>>DELETE</a>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>

    <a href="tambahStaff.php">Tambah Staff</a>
    <br>
    <a href="index.php">Kembali ke Halaman Utama</a>
</body>
<script src="boostrap.js"></script>

</html>