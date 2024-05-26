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
                    <h1 id="peserta" class=" text-4xl font-poppins font-bold text-slate-700">Mahasiswa Yang Ikut
                        Dalam Acara
                        Kali Ini</h1>
                    <p class="text-slate-500 mt-2">Berikut adalah table mahasiswa yang mengikuti acara ICE Sports ini.
                        Tidak
                        peduli rolenya sebagai
                        peserta
                        maupun panitia.</p>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-2xl border-collapse border-2 rounded-3xl">
                        <thead class="text-xs text-gray-700 uppercase text-center bg-sky-700 text-sky-50">
                            <tr class="text-lg">
                                <th scope="col" class="border border-2 px-6 py-3">
                                    Nim
                                </th>
                                <th scope="col" class="border border-2 px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="border border-2 px-6 py-3">
                                    Kelas
                                </th>
                                <th scope="col" class="border border-2 px-6 py-3">
                                    Angkatan
                                </th>
                                <th scope="col" class="border border-2 px-6 py-3">
                                    Role
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-slate-600">
                            <?php 
                            $sql = "SELECT * FROM `mahasiswa`";
                            $result= $conn->query($sql);
                            
                            while($row = $result -> fetch_assoc()) { ?>
                            <tr class="text-lg">
                                <th class="px-6 py-4">
                                    <?= $row['nim'] ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?= $row['nama'] ?>
                                </td>

                                <td class="px-6 py-4">
                                    <?= $row['kelas'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $row['angkatan'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $row['role'] ?>
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