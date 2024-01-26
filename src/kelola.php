<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar bg-body-tertiary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                KELOLA ADMIN
            </a>
        </div>
    </nav>
    <!-- Navbar End -->
    <div class="container">
        <form method="POST" action="proses.php">
            <div class="row mb-4">
                <label for="text" class="col-form-label col-sm-2">NIM</label>
                <div class="col-sm-10">
                    <input type="text" name="nim" id="nim" class="form-control">
                </div>
            </div>
            <div class="row mb-4">
                <label for="text" class="col-form-label col-sm-2">Nama Anggota</label>
                <div class="col-sm-10">
                    <input type="text" id="nama" name="nama_anggota" class="form-control">
                </div>
            </div>
            <div class="row mb-4">
                <label for="jkel" class="col-form-label col-sm-2">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                        <option selected>Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <label for="foto" class="form-label">Upload Foto</label>
                <div class="col-sm-10">
                    <input class="form-control" name="foto" type="file" id="formFile">
                </div>
            </div>
            <div class="row mb-4">
                <label for="alamat" class="col-form-label col-sm-2">Alamat Lengkap</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="formFile"></textarea>
                </div>
            </div>
            <div class="row mb-4">
                <label for="jkel" class="col-form-label col-sm-2">Himpunan Mahasiswa</label>
                <div class="col-sm-10">
                    <select class="form-select" name="nama_himpunan" aria-label="Default select example">
                        <option selected>Himpunan Mahasiswa</option>
                        <option value="Teknologi Informasi">HIMA TEKNOLOGI INFORMASI</option>
                        <option value="Bahasa Jepang">HIMA BAHASA JEPANG</option>
                        <option value="Mekatronika">HIMA MEKATRONIKA</option>
                        <option value="Bisnis Digital">HIMA BISNIS DIGITAL</option>
                    </select>
                </div>
            </div>

            <div class="mb-4 row mt-4">
                <div class="col">
                    <?php
                    if (isset($_GET['ubah'])) {
                    ?>
                        <button type="submit" id="submit" name="aksi" value="edit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>Simpan Perubahan</button>
                    <?php
                    } else {
                    ?>
                        <button type="submit" id="submit" name="aksi" value="add" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>Tambahkan</button>
                    <?php
                    }
                    ?>
                    <a href="himaadmin.php" type="button" class="btn btn-danger"><i class="fa-solid fa-rotate-left"></i>Batal</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap Javascript -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/a50e33a747.js" crossorigin="anonymous"></script>
</body>

</html>