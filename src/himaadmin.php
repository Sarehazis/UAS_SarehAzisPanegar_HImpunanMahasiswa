<?php
include "koneksi.php";

$query = "SELECT * FROM tb_anggota;";
$sql = mysqli_query($mysqli, $query);
$no = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HIMA | ADMIN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                CRUD | ADMIN
            </a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Typograph Start -->
    <div class="container">
        <h1 class="text-center mt-4">DATA ANGGOTA MAHASISWA</h1>
        <figure class="text-center">
            <blockquote class="blockquote">
                <p>Berisi Database Anggota</p>
                <a href="kelola.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Tambah Data</a>
            </blockquote>
        </figure>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nim</th>
                    <th>Nama Anggota</th>
                    <th>Jenis Kelamin</th>
                    <th>Foto Anggota</th>
                    <th>Alamat</th>
                    <th>Himpunan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($result = mysqli_fetch_assoc($sql)) {
                ?>
                    <tr>
                        <td>
                            <center>
                                <?php echo ++$no; ?>
                            </center>
                        </td>
                        <td><?php echo $result['nim']; ?></td>
                        <td><?php echo $result['nama_anggota']; ?></td>
                        <td><?php echo $result['jenis_kelamin']; ?></td>
                        <td><img src="../dist/image/<?php echo $result['foto_mahasiswa']; ?>" width="20" height="20" alt="">Foto</td>
                        <td><?php echo $result['alamat']; ?></td>
                        <td><?php echo $result['nama_himpunan']; ?></td>
                        <td>
                            <a href="kelola.php?ubah=<?php echo $result['id']; ?>" type="button" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="hapus.php?hapus=<?php echo $result['nim']; ?>" type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Typograph End -->

    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a50e33a747.js" crossorigin="anonymous"></script>
</body>

</html>