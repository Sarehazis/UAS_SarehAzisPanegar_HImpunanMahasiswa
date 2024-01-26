<?php
session_start()
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="/tailwind.config.js"></script>
    <link rel="stylesheet" href="../dist/output.css">
    <title>Forum Pendaftaran Anggota Hima</title>
</head>

<body>
    <section class="">
        <div class="relative w-full h-screen bg-hero-pattern group">
            <?php
            if (isset($_SESSION['error'])) {
            ?>
                <div class="alert alert-warning" role="alert">
                    <?php echo $_SESSION['error'] ?>
                </div>
            <?php
            }
            ?>

            <?php
            if (isset($_SESSION['message'])) {
            ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['message'] ?>
                </div>
            <?php
            }
            ?>
            <div class="absolute top-1/2 -translate-y-1/2 right-1/2 translate-x-1/2 bg-white w-[800px] px-5 py-5 rounded-2xl">
                <div class="flex justify-center gap-10 shadow-xl box-content">
                    <form class="group" action="processPendaftaran.php" method="post">
                        <div class="flex flex-col w-[360px]">
                            <h5 class="font-extrabold uppercase text-2xl mb-5">Pendaftaran</h5>
                            <span class="font-poppins text-slate mb-10">Silahkan Daftar Disini jika ingin menjadi Anggota Hima</span>

                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="nim" id="nim" value="<?php echo @$_SESSION['nim'] ?>" class="block py-2.5 px-3 w-full rounded-xl text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none focus:outline-none focus:ring-1 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="name_input" class="absolute text-sm bg-white px-2 text-gray-500 duration-300 transform -translate-y-5 scale-75 top-3 left-4 z-10 origin-[0] peer-focus:scale-75 peer-placeholder-shown:scale-110 peer-focus:left-4 peer-focus:text-blue-600 peer-placeholder-shown:translate-y-0  peer-focus:-translate-y-5">NIM</label>
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="nama_pendaftar" id="nama_pendaftar" value="<?php echo @$_SESSION['nama_pendaftar'] ?>" class="block py-2.5 px-3 w-full rounded-xl text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none focus:outline-none focus:ring-1 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="name" class="absolute text-sm bg-white px-2 text-gray-500 duration-300 transform -translate-y-5 scale-75 top-3 left-4 z-10 origin-[0] peer-focus:scale-75 peer-placeholder-shown:scale-110 peer-focus:left-4 peer-focus:text-blue-600 peer-placeholder-shown:translate-y-0  peer-focus:-translate-y-5">Nama Lengkap</label>
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="no_tlp" id="no_tlp" value="<?php echo @$_SESSION['no_tlp'] ?>" class="block py-2.5 px-3 w-full rounded-xl text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none focus:outline-none focus:ring-1 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="password_input" class="absolute text-sm bg-white px-2 text-gray-500 duration-300 transform -translate-y-5 scale-75 top-3 left-4 z-10 origin-[0] peer-focus:scale-75 peer-placeholder-shown:scale-110 peer-focus:left-4 peer-focus:text-blue-600 peer-placeholder-shown:translate-y-0  peer-focus:-translate-y-5">No Telpon</label>

                            </div>


                            <button type="submit" class="text-center bg-blue-500 py-2 rounded-lg mb-10 text-white font-semibold hover:bg-blue-900 duration-300 ">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
session_destroy();
?>