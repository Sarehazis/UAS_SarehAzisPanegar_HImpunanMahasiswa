<?php
include "koneksi.php";

if (isset($_GET['hapus'])) {
    $delete = mysqli_query($mysqli, "DELETE FROM tb_anggota WHERE nim = '" . $_GET['hapus'] . "'");
    echo "<script>alert('Anggota Berhasil di Hapus')</script>";
    echo "<script>window.location='himaadmin.php'</script>";
}
