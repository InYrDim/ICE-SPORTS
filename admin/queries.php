<?php 
include '../koneksi/count.php';
include '../koneksi/connection.php';
  
$conn = get_connection();

$sql_pertandingan = "SELECT `pertandingan`.`tanggal`, `mahasiswa`.`nama` AS penanggung_jawab, `cabang_olahraga`.`nama_cabor`, `tempat`.`nama` AS nama_tempat, `tempat`.`lokasi`
FROM `pertandingan` 
	LEFT JOIN `mahasiswa` ON `pertandingan`.`id_penanggung_jawab` = `mahasiswa`.`nim` 
	LEFT JOIN `cabang_olahraga` ON `pertandingan`.`id_cabang_olahraga` = `cabang_olahraga`.`id_cabor` 
	LEFT JOIN `tempat` ON `pertandingan`.`id_tempat` = `tempat`.`id_tempat`";

$sql_jobdesk = "SELECT `jobdesk`.`id_divisi`, `mahasiswa`.`nama`, `divisi`.`tugas`, `divisi`.`nama_divisi`
FROM `jobdesk` 
	LEFT JOIN `mahasiswa` ON `jobdesk`.`id_mahasiswa` = `mahasiswa`.`nim` 
	LEFT JOIN `divisi` ON `jobdesk`.`id_divisi` = `divisi`.`id`";

$pertandingan_data = $conn->query($sql_pertandingan);
$jobdesk_data = $conn->query($sql_jobdesk);

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
        <main class="flex-1 overflow-scroll flex justify-center font-rubik h-screen">
            <div class="max-w-4xl mt-16">
                <h1 class="block font-bold text-5xl text-sky-600 leading-1 tracking-tighter ">Queries
                </h1>
                <p class="mt-2">Beberapa contoh data yang dapat saling ter <strong>Join</strong> ditampilkan disini.
                    Menggunakan Foreign Key Ada Pada Table.</p>

                <div class="flex flex-col gap-4 mt-7 mb-20">

                    <ul class="text-md">
                        <li>
                            <a href="#mahasiswa" class="flex items-center">
                                <i class='bx bxs-circle text-sky-600'></i>
                                <span class="ms-2 block first-letter:uppercase">Pertandingan</span>
                            </a>
                            <a href="#cabor" class="flex items-center">
                                <i class='bx bxs-circle text-sky-600'></i>
                                <span class="ms-2 block first-letter:uppercase">Jobdesk</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tabel Pertandingan -->
                    <div class="mt-6 ">
                        <div class="flex justify-between mb-2">
                            <h3 class="first-letter:uppercase text-2xl font-rubik font-semibold  text-slate-600"
                                id="cabor">
                                Pertandingan
                            </h3>
                        </div>
                        <table class="table-auto border-2 border-sky-700 w-full">
                            <thead class="text-sm text-gray-700 uppercase text-center bg-sky-700 text-sky-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Nama Cabor</th>
                                    <th scope="col" class="px-6 py-3">Penanggung Jawab</th>
                                    <th scope="col" class="px-6 py-3">Tanggal</th>
                                    <th scope="col" class="px-6 py-3">Tempat</th>
                                    <th scope="col" class="px-6 py-3">Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($data_pertandingan = $pertandingan_data ->fetch_assoc()) { ?>
                                <tr class="text-xs">
                                    <td class="px-6 py-4">
                                        <?= $data_pertandingan["nama_cabor"]?></a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $data_pertandingan["penanggung_jawab"]?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $data_pertandingan["tanggal"]?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $data_pertandingan["nama_tempat"]?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $data_pertandingan["lokasi"]?>
                                    </td>

                                </tr>
                                <?php  }  ?>
                            </tbody>



                        </table>
                    </div>

                    <!-- Tabel Jobdesk -->
                    <div class="mt-6 ">
                        <div class="flex justify-between mb-2">
                            <h3 class="first-letter:uppercase text-2xl font-rubik font-semibold  text-slate-600"
                                id="cabor">
                                Jobdesk
                            </h3>
                        </div>
                        <table class="table-auto border-2 border-sky-700 w-full">
                            <thead class="text-sm text-gray-700 uppercase text-center bg-sky-700 text-sky-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Nama</th>
                                    <th scope="col" class="px-6 py-3">Divisi</th>
                                    <th scope="col" class="px-6 py-3">Tugas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($data_jobdesk = $jobdesk_data ->fetch_assoc()) { ?>
                                <tr class="text-xs">
                                    <td class="px-6 py-4">
                                        <?= $data_jobdesk["nama"]?></a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $data_jobdesk["nama_divisi"]?></a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $data_jobdesk["tugas"]?>
                                    </td>
                                    <?php  }  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <a href="./" class="fixed z-10 right-0 bottom-0 p-2 bg-sky-700 text-white mr-7 mb-7 rounded-lg">
        <i class='bx bxs-home bx-lg text-2xl'></i>
    </a>
    <?php include '../components/tailwind.php'; ?>
</body>

</html>