<?php 
include '../koneksi/count.php';
include '../koneksi/connection.php';
  
$conn = get_connection();

$sql_mahasiswa = 'SELECT * FROM mahasiswa';
$sql_tempat = 'SELECT * FROM tempat';
$sql_cabor = 'SELECT * FROM cabang_olahraga';
$sql_divisi = 'SELECT * FROM divisi';

$mahasiswa_data = $conn->query($sql_mahasiswa);
$tempat_data = $conn->query($sql_tempat);
$cabor_data = $conn->query($sql_cabor);
$divisi_data = $conn->query($sql_divisi);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../components/link.php' ?>
    <?php include '../components/icons.php' ?>
    <title>ADMIN - ICE SPORTS</title>
</head>

<body>

    <div class="flex">
        <?php include '../components/aside-nav.php' ?>
        <main class="flex-1 overflow-y-scroll flex justify-center font-rubik h-screen px-4">
            <div class="max-w-4xl mt-16">
                <h1 class="block font-bold text-5xl text-sky-600 leading-1 tracking-tighter ">Tables
                </h1>

                <p class="mt-2">Disini merupakan tempat utama proses CRUD data yang ada. Semua data yang ada berasal
                    dari halaman
                    <strong>tables</strong> ini. Baik itu views, maupun queries.
                </p>


                <div class="flex flex-col gap-4 mt-7 pb-20 ">
                    <p>Table utama yang terdapat pada sistem database adalah sebagai berikut:</p>
                    <ul class="text-md">
                        <li>
                            <a href="#mahasiswa" class="flex items-center">
                                <i class='bx bxs-circle text-sky-600'></i>
                                <span class="ms-2 block first-letter:uppercase">Mahasiswa</span>
                            </a>
                            <a href="#cabor" class="flex items-center">
                                <i class='bx bxs-circle text-sky-600'></i>
                                <span class="ms-2 block first-letter:uppercase">Cabang Olahraga</span>
                            </a>
                            <a href="#mahastempatiswa" class="flex items-center">
                                <i class='bx bxs-circle text-sky-600'></i>
                                <span class="ms-2 block first-letter:uppercase">Tempat</span>
                            </a>
                            <a href="#mahastempatiswa" class="flex items-center">
                                <i class='bx bxs-circle text-sky-600'></i>
                                <span class="ms-2 block first-letter:uppercase">Divisi</span>
                            </a>
                        </li>
                    </ul>
                    <p>Table selain dari itu merupakan table penguhubung yang dibuat untuk menghubungkan sistem database
                        ICE SPORTS ini.</p>

                    <!-- Tabel Mahasiswa -->
                    <?php include './tables/mahasiswa.php' ?>
                    <!-- Tabel Cabor -->
                    <?php include './tables/cabor.php' ?>
                    <!-- Tabel Tempat -->
                    <?php include './tables/tempat.php'; ?>
                    <!-- Tabel Divisi -->
                    <?php include './tables/divisi.php' ?>

                </div>
            </div>
        </main>
    </div>
    <a href="./" class="fixed z-10 right-0 bottom-0 p-2 bg-sky-700 text-white mr-7 mb-7 rounded-lg">
        <i class='bx bxs-home bx-lg text-2xl'></i>
    </a>
    <?php include '../components/tailwind.php'; ?>
    <script>

    </script>
</body>

</html>