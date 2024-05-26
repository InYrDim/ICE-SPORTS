<?php 
include '../koneksi/count.php';
include '../koneksi/connection.php';
  
$conn = get_connection();
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
        <main class="flex-1 overflow-scroll flex justify-center font-rubik">
            <div class="container px-7 mt-16">
                <h1 class="text-center block font-bold text-5xl text-sky-600 leading-1 tracking-tighter ">Dashboard
                </h1>

                <div class="flex flex-col gap-4 mt-7">

                    <a href="./tables.php"
                        class="max-w-xs  bg-slate-300 border border-gray-200 rounded-lg shadow flex overflow-hidden">
                        <div class="flex-1 py-5 px-4">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-700 ">Tables
                            </h5>
                            <p class="mb-3 font-normal text-gray-700">Total ada
                                <?php echo count_table($conn)?> Table.</p>
                        </div>
                        <div
                            class="flex px-5 items-center justify-center bg-slate-500 hover:bg-sky-700 hover:text-white ">
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </div>
                    </a>
                    <a href="./views.php"
                        class="max-w-xs  bg-slate-300 border border-gray-200 rounded-lg shadow flex overflow-hidden">
                        <div class="flex-1 py-5 px-4">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-700 ">Views
                            </h5>
                            <p class="mb-3 font-normal text-gray-700">Total ada
                                <?php echo count_views($conn)?> View.</p>
                        </div>
                        <div
                            class="flex px-5 items-center justify-center bg-slate-500 hover:bg-sky-700 hover:text-white ">
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </div>
                    </a>
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