<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './components/link.php' ?>
    <title>Tentang</title>
</head>

<body>
    <?php include './admin/action_modal/admin_modal-in.php' ?>

    <div class="flex flex-col justify-between h-screen">
        <header>
            <?php include './components/nav.php' ?>
        </header>
        <main>
            <div class="container mx-auto max-w-3xl my-10">
                <h1 class="font-bold text-sky-700 text-3xl sm:text-4xl md:text-5xl">Tentang</h1>
                <div class="mt-4 text-slate-800">
                    <p class="indent leading-7">Perkenalkan, kami dari <strong>Kelompok 2</strong> kelas PTIK C. Adapun
                        tujuan pembuatan
                        halaman ini
                        yang
                        dibuat
                        untuk memenuhi
                        tugas akhir mata
                        kuliah
                        <strong>Basis Data</strong> yang sekaligus menjadi <strong>UAS</strong> kami, yang mana mata
                        kuliah ini diampuh oleh
                        bapak <strong>M.
                            Syahid
                            Nur Wahid, M.Pd.</strong> Kami dari kelompok 2 mengucapkan banyak terimakasih atas
                        bimbingannya
                        selama semester 2 ini.
                    </p>
                    <p class="mt-4">Website ini kami beri nama <strong>SISTEM DATABASE ICE SPORTS</strong>. Di website
                        ini memungkinkan
                        kita mengelola data mahasiswa yang ingin
                        mengikuti kegiatan ini, baik menjadi panitia maupun peserta. Kita juga dapat menambahkan data
                        seperti tempat pelaksanaan dan cabang olahraga yang akan dipertandingkan.</p>
                    <p class="mt-4">Alasan dibalik pemilihan database ini disebabkan oleh waktu pelaksanaan salah satu
                        event yang di adakan oleh himpunan mahasiwa teknik informatika dan komputer (HIMATIK) - UNM
                        yakni ICE SPORTS. Salah satu dari anggota kelompok kami menyarankan pembuatan database
                        berdasarkan hal itu namun kami mengubah sedikti terkait hal tersebut sehingga jadilah halaman
                        website ini beserta databasenya.</p>
                    <div class="mt-4">
                        <p class="text-md font-semibold">Adapun anggota kelompok 2 yaitu:</p>
                        <ol class="list-decimal ms-5 mt-1">
                            <li>Muh. Dimas Januardi Nur</li>
                            <li>Muhammad Fadhil Mu'min</li>
                            <li>Paula Vebrianti Kewa Payon Riantobi</li>
                            <li>Alya Wulandari</li>
                        </ol>
                    </div>
                    <div class="mt-3">
                        <p>Sekian dari kelompok kami, mohon maaf sebelumnya jika ada kesalahan (bug dan semacamnya).
                            Terima
                            kasih.</p>

                        <a class="block mt-4 text-xs text-sky-700 underline" href="https://pastebin.com/YBxJK3KR"
                            target="_blank">Kode
                            Sumber
                            Untuk
                            Databasenya.</a>
                    </div>
                </div>
            </div>

        </main>
        <?php include './components/footer.php' ?>
    </div>
    <?php include './components/tailwind.php'; ?>
</body>

</html>