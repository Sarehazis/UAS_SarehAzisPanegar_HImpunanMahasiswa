<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "hima";
$query = mysqli_connect($host, $user, $password, $database);

if (!$query) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == 'add') {

        $nim = $_POST['nim'];
        $nama_anggota = $_POST['nama_anggota'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $foto = "img5.jpg";
        $alamat = $_POST['alamat'];
        $nama_himpunan = $_POST['nama_himpunan'];

        // Use prepared statement to prevent SQL injection
        $tambah = mysqli_prepare($query, "INSERT INTO `tb_anggota` (`id`, `nim`, `nama_anggota`, `jenis_kelamin`, `foto_mahasiswa`, `alamat`, `nama_himpunan`, `roles_id`) VALUES (NULL, ?, ?, ?, ?, ?, ?, '3');");
        mysqli_stmt_bind_param($tambah, 'ssssss', $nim, $nama_anggota, $jenis_kelamin, $foto, $alamat, $nama_himpunan);
        $result = mysqli_stmt_execute($tambah);

        if ($result) {
            echo "<script>alert('Data sudah ditambahkan')</script>";
            echo "<script>window.location.href='himaadmin.php'</script>";
        } else {
            echo "Gagal";
        }
    } else if ($_POST['aksi'] == 'edit') {
        echo "Edit Data <a href='himaadmin.php'>[Home]</a>";
    }
}

if (isset($_GET['hapus'])) {
    echo "Hapus Data <a href='himaadmin.php'>[Home]</a>";
}

mysqli_close($query);
