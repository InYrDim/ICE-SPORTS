<?php 
include 'koneksi/count.php';
include 'koneksi/connection.php';
  
$conn = get_connection();
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './components/link.php' ?>
    <title>ICE SPORTS</title>
</head>

<body>
    <?php include './admin/action_modal/admin_modal-in.php' ?>

    <div class="flex flex-col justify-between h-screen">
        <header>
            <?php include './components/nav.php' ?>
        </header>
        <main>

            <div>
                <section class="mt-10 container mx-auto max-w-4xl relative overflow-hidden shadow-lg">
                    <div
                        class="flex justify-center sm:justify-between items-center sm:ps-16 max-h-[30rem] overflow-hidden bg-slate-300 relative">
                        <div class="absolute sm:static  text-white sm:text-black z-20">
                            <div>
                                <h1 class="text-5xl font-bold font-poppins sm:text-slate-500">Pentas ICE Sport</h1>
                                <span class="block my-2 text-7xl font-bold font-rubik sm:text-slate-700">2024</span>
                            </div>
                            <a type="button" href="./pages/join.php"
                                class="inline-flex items-center text-white bg-blue-700 hover:bg-sky-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  focus:outline-none  font-rubik my-3">Join
                                Sekarang!
                                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg></a>
                            <p class="font-poppins opacity-[.67] text-sm mt-3">Jadilah Bagian Dari Acara Ini!</p>
                        </div>
                        <div class="w-full sm:w-auto">

                            <img src="./assets/banner.png" alt=""
                                class="block w-full brightness-50 sm:brightness-100 relative z-10">
                        </div>
                        <div class="absolute inset-0 z-0">
                            <svg width="757" height="566" viewBox="0 0 757 566" class="fill-none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M676.893 108.553C689.993 148.808 673.193 197.114 639.393 220.491C605.493 243.868 554.493 242.316 518.793 217.775C483.093 193.234 462.693 145.704 475.093 106.225C487.593 66.6489 532.993 35.3179 576.993 35.7059C621.093 36.0939 663.893 68.2979 676.893 108.553Z"
                                    class="stroke-slate-400" stroke-width="20" />
                                <path
                                    d="M422.693 452.224C430.793 478.317 413.893 510.424 388.093 527.884C362.393 545.441 327.793 548.254 305.293 532.928C282.793 517.505 272.393 483.943 281.593 456.395C290.793 428.847 319.493 407.41 350.493 406.731C381.493 406.052 414.593 426.131 422.693 452.224Z"
                                    class="stroke-slate-400" stroke-width="20" />
                                <path
                                    d="M116.593 433.6C127.993 469.199 113.793 511.2 82.0926 534.771C50.3926 558.245 1.09263 563.192 -29.5074 541.949C-60.0074 520.706 -71.9074 473.273 -58.6074 435.152C-45.4074 397.031 -7.00737 368.319 30.5926 368.61C68.1926 368.804 105.193 397.904 116.593 433.6Z"
                                    class="stroke-slate-400" stroke-width="20" />
                                <path
                                    d="M46.4926 29.5949C50.3926 40.9439 44.5926 55.6879 33.8926 62.9629C23.1926 70.2379 7.69261 70.1409 -3.40739 62.6719C-14.5074 55.1059 -21.2074 40.3619 -17.4074 29.0129C-13.5074 17.6639 0.892616 9.9039 14.8926 10.0009C28.8926 10.1949 42.5926 18.1489 46.4926 29.5949Z"
                                    class="stroke-slate-400" stroke-width="20" />
                                <path
                                    d="M745.093 477.541C748.393 488.308 742.693 500.918 733.493 506.932C724.393 512.849 711.693 512.267 702.593 506.059C693.593 499.851 688.093 488.017 691.093 477.638C694.093 467.259 705.693 458.238 717.593 458.141C729.593 458.044 741.793 466.871 745.093 477.541Z"
                                    class="stroke-slate-400" stroke-width="20" />
                            </svg>

                        </div>
                    </div>
                </section>
                <div>

                </div>
                <section class="bg-sky-700 relative mt-20">
                    <svg id="visual" viewBox="0 0 900 600"
                        class="block w-full overflow-hidden absolute bottom-full -z-10">
                        <path class="fill-sky-700"
                            d="M0 405L21.5 406.5C43 408 86 411 128.8 422.8C171.7 434.7 214.3 455.3 257.2 470.5C300 485.7 343 495.3 385.8 489.3C428.7 483.3 471.3 461.7 514.2 452.5C557 443.3 600 446.7 642.8 446.5C685.7 446.3 728.3 442.7 771.2 452.2C814 461.7 857 484.3 878.5 495.7L900 507L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z">
                        </path>
                    </svg>
                    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-20">
                        <h2
                            class="mb-4 text-2xl font-poppins font-bold tracking-tight leading-none text-sky-200 block ">
                            <?php echo count_mahasiswa($conn)?> Mahasiswa Telah Bergabung Untuk Memainkan
                            <span class="block mt-2"> <?php echo count_cabor($conn)?> Cabang Olahraga</span>
                        </h2>
                        <p
                            class="mb-4 text-4xl font-rubik font-extrabold tracking-tight leading-none text-slate-200 md:text-5xl lg:text-6xl ">
                            Kamu Kapan?</p>
                    </div>
                </section>
            </div>

            <div class="relative">
                <div
                    class="flex flex-col sm:flex-row items-center text-center mt-10 container mx-auto max-w-4xl relative overflow-hidden shadow-lg text-xl font-poppins font-bold">
                    <img src="./assets/land-snow.jpg" alt="banner"
                        class="absolute object-cover h-full w-full object-center -z-10 brightness-50">
                    <!-- Peserta -->
                    <a href="./pages/mahasiswa.php"
                        class="flex-1 w-full hover:bg-sky-700 text-slate-200  hover:text-white transition-all px-5 py-20">
                        <h2 id="mahasiwa">Mahasiwa</h2>
                    </a>
                    <!-- Cabang Olahraga -->
                    <a href="./pages/cabor.php"
                        class="w-full bg-slate-300 hover:bg-slate-700/50 text-slate-700  hover:text-white transition-all flex-1 px-3 py-20">
                        <h2 id="cabor">Cabang Olahraga</h2>
                    </a>
                    <!-- Tempat Pertandingan -->
                    <a href="./pages/tempat.php"
                        class="w-full flex-1 hover:bg-sky-700 text-slate-200  hover:text-white transition-all px-3 py-20">
                        <h2 id="tempat">Tempat</h2>

                    </a>

                </div>
            </div>
        </main>
        <?php include './components/footer.php' ?>
    </div>
    <?php include './components/tailwind.php'; ?>
</body>

</html>