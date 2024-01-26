<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "hima";
$query = mysqli_connect($host, $user, $password, $database);

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == 'add') {

        $nim = $_POST['nim'];
        $nama_anggota = $_POST['nama_anggota'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $foto = "img5.jpg";
        $alamat = $_POST['alamat'];
        $hima_id = $_POST['hima_id'];

        $tambah = mysqli_query($query, "INSERT INTO `tb_anggota` ('id', 'nim', 'nama_anggota', 'jenis_kelamin', 'foto_mahasiswa', 'alamat', 'hima_id') VALUES (null, '$nim', '$nama_anggota', '$jenis_kelamin', '$foto', '$alamat', '$hima_id')");


        if ($tambah) {
            echo "Data Berhasil Ditambahkan <a href='himaadmin.php'>[Home]</a>";
        } else {
            echo "Gagal";
        }

        echo "Tambah Data <a href='himaadmin.php'>[Home]</a>";
    } else if ($_POST['aksi'] == 'edit') {
        echo "Edit Data <a href='himaadmin.php'>[Home]</a>";
    }
}

if (isset($_GET['hapus'])) {
    echo "Hapus Data <a href='himaadmin.php'>[Home]</a>";
}
