<?php 
include '../koneksi/count.php';
include '../koneksi/connection.php';
  
$conn = get_connection();

$sql = 'SELECT TABLE_NAME AS view_name FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA ="db_ice_sports"';

$views_view = $conn->query($sql);
$views_data = $conn->query($sql);

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
    <!-- Delete View -->
    <div id="view-admin-delete-action-popup-modal"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="view-admin-delete-action-popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Yakin menghapus view <span
                            id="view-name-container"></span>?</h3>
                    <!-- href="./views/delete.php?name=" -->
                    <a data-modal-hide="view-admin-delete-action-popup-modal" id="view-acc-delete-btn" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Yakin
                    </a>
                    <button data-modal-hide="view-admin-delete-action-popup-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Records View -->

    <div id="view-admin-delete-records-action-popup-modal"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="view-admin-delete-records-action-popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Yakin menghapus data dengan
                        NIM: <span id="view-records-name-container"></span>?</h3>
                    <a data-modal-hide="view-admin-delete-records-action-popup-modal" id="view-acc-records-delete-btn"
                        type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Yakin
                    </a>
                    <button data-modal-hide="view-admin-delete-records-action-popup-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Main -->
    <div class="flex">

        <!-- Nav -->
        <?php include '../components/aside-nav.php' ?>

        <!-- Content -->
        <main class="flex-1 overflow-scroll flex justify-center font-rubik h-screen">
            <div class="max-w-2xl mt-16">
                <h1 class="block font-bold text-5xl text-sky-600 leading-1 tracking-tighter ">Views
                </h1>
                <p class="mt-2">Menampilkan beberapa <strong>view</strong> yang berasal dari tabel mahasiswa yang
                    terdapat dalam database. Primary key di view ini adalah <strong>NIM</strong>.</p>

                <div class="flex flex-col gap-4 mt-7 ">
                    <ul class="text-md">
                        <?php while($row_up = $views_view -> fetch_assoc()) {
                            $viewname = $row_up['view_name'];
                        ?>
                        <li>
                            <a href="#<?= $viewname ?>" class="flex items-center">
                                <i class='bx bxs-circle text-sky-600'></i>
                                <span class="ms-2 block first-letter:uppercase"><?= $viewname?></span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>

                    <div class="text-md  mb-10">
                        <?php while($row = $views_data -> fetch_assoc()) {
                            $viewname = $row['view_name'];
                        ?>



                        <div class="mt-6 ">
                            <div class="flex justify-between mb-2">
                                <h3 class="first-letter:uppercase text-2xl font-rubik font-semibold  text-slate-600"
                                    id="<?= $viewname ?>">
                                    <?= $viewname?>
                                </h3>
                            </div>
                            <table class="table-auto border-2 border-sky-700 w-full">
                                <thead class="text-sm text-gray-700 uppercase text-center bg-sky-700 text-sky-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Nim</th>
                                        <th scope="col" class="px-6 py-3">Nama</th>
                                        <th scope="col" class="px-6 py-3">Kelas</th>
                                        <th scope="col" class="px-6 py-3">Angkatan</th>
                                        <th scope="col" class="px-6 py-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                
                                    $data_query = "SELECT * FROM $viewname";
                                    $data_result = $conn->query($data_query);
                                    while ($data_row = $data_result ->fetch_assoc()) { ?>

                                    <tr class="text-xs">
                                        <td class="px-6 py-4"><?=$data_row["nim"]?></td>
                                        <td class="px-6 py-4">
                                            <?= $data_row["nama"]?></a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $data_row["kelas"]?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $data_row["angkatan"]?>
                                        </td>

                                        <!-- Action Button -->
                                        <td class="px-6 py-4">

                                            <button type="button" data-id-view-records="<?=$data_row["nim"]?>"
                                                data-view="<?= $viewname?>"
                                                data-modal-target="view-admin-update-records-action-popup-modal-<?= $data_row['nim']?>"
                                                data-modal-toggle="view-admin-update-records-action-popup-modal-<?= $data_row['nim']?>"
                                                class="me-2 border-slate-500 hover:bg-yellow-500 hover:text-white border-2 text-slate-500 font-medium rounded-lg text-lg  text-center"><i
                                                    class='bx bxs-edit p-3'></i></button>
                                            <button type="button" data-id-view-records="<?=$data_row["nim"]?>"
                                                data-view="<?= $viewname?>"
                                                data-modal-target="view-admin-delete-records-action-popup-modal"
                                                data-modal-toggle="view-admin-delete-records-action-popup-modal"
                                                class="me-2 border-slate-500 hover:bg-red-500 hover:text-white border-2 text-slate-500 font-medium rounded-lg text-lg text-center">
                                                <i class='bx bxs-trash p-3'></i></button>
                                        </td>
                                    </tr>

                                    <!-- Update Records Form -->
                                    <div id="view-admin-update-records-action-popup-modal-<?= $data_row['nim']?>"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button"
                                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="view-admin-update-records-action-popup-modal-<?= $data_row['nim']?>">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-4 md:p-5 text-center">
                                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                    <div>
                                                        <h3
                                                            class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                            Edit data</h3>

                                                        <form action="./views/update.php" method="POST">
                                                            <input type="hidden" name="role"
                                                                value='<?= $data_row["role"]?>' />
                                                            <input type="hidden" name="view" value="<?= $viewname?>">

                                                            <!-- NIM -->
                                                            <input id="nim" name="nim" type="hidden"
                                                                value='<?= $data_row["nim"]?>'
                                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                                            <!-- Nama -->
                                                            <div>
                                                                <label class="text-white dark:text-gray-200"
                                                                    for="nama">Nama</label>
                                                                <input id="nama" name="nama" type="text"
                                                                    value='<?= $data_row["nama"]?>'
                                                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                                            </div>
                                                            <!-- Kelas -->
                                                            <div>
                                                                <label class="text-white dark:text-gray-200"
                                                                    for="kelas">Kelas</label>
                                                                <input id="kelas" name="kelas" type="text"
                                                                    value='<?= $data_row["kelas"]?>'
                                                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                                            </div>
                                                            <!-- Angakatan -->
                                                            <div>
                                                                <label class="text-white dark:text-gray-200"
                                                                    for="angkatan">Angkatan</label>
                                                                <input id="angkatan" name="angkatan" type="number"
                                                                    value='<?= $data_row["angkatan"]?>'
                                                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                                            </div>

                                                            <div class="mt-4">
                                                                <button
                                                                    data-modal-hide="view-admin-update-records-action-popup-modal"
                                                                    type="submit"
                                                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 rounded-lg text-white bg-sky-600">Update</button>
                                                                <a data-modal-hide="view-admin-update-records-action-popup-modal-<?= $data_row['nim']?>"
                                                                    type="button"
                                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                    Batal
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php  }  ?>
                                </tbody>



                            </table>
                        </div>

                        <!-- Action Button -->
                        <div class="flex justify-end ">
                            <div class="mt-3 flex rounded-lg overflow-hidden">
                                <button type="button" data-view="<?= $viewname?>"
                                    data-modal-target="view-admin-delete-action-popup-modal"
                                    data-modal-toggle="view-admin-delete-action-popup-modal"
                                    class="text-white bg-red-500 font-medium text-sm px-4 py-2 text-center">Hapus

                                    View</button>

                            </div>
                        </div>
                        <?php } ?>
                    </div>



                </div>
                <hr />

                <!-- Recovery View -->
                <div class="mb-20">
                    <h2 class="text-3xl font-rubik font-semibold  text-sky-700">Recovery</h2>
                    <p class="mt-2">Tombol ini dapat mengembalikan view yang telah dihapus, silahkan tekan tombol
                        <strong>Kembalikan</strong> jika ingin mengembalikan view.
                    </p>
                    <button type="button" onclick="fetch('./views/recovery.php'); setTimeout((location.reload()), 1)"
                        class="mt-5 text-white bg-sky-800 font-medium rounded-lg text-sm px-4 py-2 text-center">Kembalikan
                    </button>
                </div>
            </div>
        </main>
    </div>

    <a href="./" class="fixed z-10 right-0 bottom-0 p-2 bg-sky-700 text-white mr-7 mb-7 rounded-lg">
        <i class='bx bxs-home bx-lg text-2xl'></i>
    </a>
    <?php include '../components/tailwind.php'; ?>
    <script>
    function deleteViewButton() {
        const deleteButtons = document.querySelectorAll('[data-view]');
        deleteButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const viewName = this.getAttribute('data-view');
                const accDeleteBtn = document.querySelector('#view-acc-delete-btn');
                const viewNameContainer = document.querySelector("#view-name-container")
                accDeleteBtn.href = './views/delete.php?type=' + encodeURIComponent(viewName);
                viewNameContainer.innerHTML = viewName
            });
        });
    }

    function deleteViewRecordsButton() {

        const deleteButtons = document.querySelectorAll('[data-id-view-records]');
        deleteButtons.forEach(btn => {
            btn.addEventListener('click', function() {

                const viewRecordsNim = this.getAttribute('data-id-view-records');
                const viewName = this.getAttribute('data-view');
                const accDeleteBtn = document.querySelector('#view-acc-records-delete-btn');

                console.log(viewRecordsNim);
                const viewNameContainer = document.querySelector("#view-records-name-container")
                accDeleteBtn.href = './views/delete.php?type=' + encodeURIComponent(
                    viewName) + '&nim=' + encodeURIComponent(
                    viewRecordsNim);
                viewNameContainer.innerHTML = viewRecordsNim
            });
        });
    }
    deleteViewButton()
    deleteViewRecordsButton()
    </script>
</body>

</html>