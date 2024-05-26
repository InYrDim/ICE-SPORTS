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
        <main class="flex-1 overflow-scroll flex items-center justify-center font-rubik">
            <div class="max-w-2xl">
                <h1 class="block font-bold text-5xl text-sky-600 leading-1 tracking-tighter ">Selamat Datang
                    di
                    <br /><span class="text-sky-800">Panel
                        Admin</span>
                </h1>
                <p class="text-lg mt-5 font-poppins text-slate-700">Disini dapat dilakukan proses penginputan,
                    penghapusan dan
                    pengeditan data
                    <strong>ICE
                        SPORTS</strong> yang ada pada database ini.
                </p>

                <div>
                    <a href="./dashboard.php"
                        class="inline-flex items-center text-white bg-sky-700 hover:bg-sky-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none  font-rubik my-3">Dashboard
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" /></a>
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