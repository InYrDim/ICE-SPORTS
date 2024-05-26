<?php 
include '../koneksi/count.php';
include '../koneksi/connection.php';
  
$conn = get_connection();
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../components/link.php' ?>
    <title>ICE SPORTS</title>
</head>

<body>
    <?php include '../admin/action_modal/admin_modal-in.php' ?>

    <div class="flex flex-col justify-between h-screen">
        <header>
            <?php include '../components/nav.php' ?>
        </header>
        <main>

            <div class="container mx-auto max-w-4xl my-20 px-4 sm:px-0">
                <div class="">
                    <h1 id="peserta" class=" text-4xl font-poppins font-bold text-slate-700">Tempat Pertandingan</h1>
                    <p class="text-slate-500 mt-2">Berikut table tempat yang tersedia untuk melakukan pertandingan
                        sesuai dengan spesifikasi pertandingannya.</p>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-2xl border-collapse border-2 rounded-3xl">
                        <thead class="text-xs text-gray-700 uppercase text-center bg-sky-700 text-sky-50">
                            <tr class="text-lg">
                                <th scope="col" class="border border-2 px-6 py-3">
                                    Nama Tempat
                                </th>
                                <th scope="col" class="border border-2 px-6 py-3">
                                    Lokasi
                                </th>
                                <th scope="col" class="border border-2 px-6 py-3">
                                    Kapasitas
                                </th>
                                <th scope="col" class="border border-2 px-6 py-3">
                                    Keterangan
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-slate-600">

                            <?php 
                            $sql = "SELECT * FROM `tempat`";
                            $result= $conn->query($sql);
                            
                            while($row = $result -> fetch_assoc()) { ?>
                            <tr class="text-lg">
                                <th class="px-6 py-4">
                                    <?= $row['nama'] ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?= $row['lokasi'] ?>
                                </td>

                                <td class="px-6 py-4">
                                    <?= $row['kapasitas'] ?> Orang
                                </td>
                                <td class="px-6 py-4">
                                    <?= $row['keterangan'] ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
        <?php include '../components/footer.php' ?>
    </div>
    <?php include '../components/tailwind.php'; ?>
</body>

</html>