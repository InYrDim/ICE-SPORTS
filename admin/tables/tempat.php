<div class="mt-6 ">
    <div class="flex justify-between mb-4 items-center">
        <h3 class="first-letter:uppercase text-2xl font-rubik font-semibold text-slate-600" id="tempat">
            Tempat
        </h3>
        <div class="flex justify-end ">
            <button type="button" data-table="tempat" data-modal-target="table-admin-add-action-popup-modal-tempat"
                data-modal-toggle="table-admin-add-action-popup-modal-tempat"
                class="text-white bg-sky-700 font-medium text-sm px-4 py-2 flex items-center gap-2 rounded-lg"><i
                    class='bx bx-plus text-lg'></i>Tambah
                Data </button>
        </div>
    </div>
    <table class="table-auto border-2 border-sky-700 w-full">
        <thead class="text-sm text-gray-700 uppercase text-center bg-sky-700 text-sky-50">
            <tr>
                <th scope="col" class="px-6 py-3">Nama Tempat</th>
                <th scope="col" class="px-6 py-3">Lokasi</th>
                <th scope="col" class="px-6 py-3">Kapasitas</th>
                <th scope="col" class="px-6 py-3">Keterangan</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data_tempat = $tempat_data ->fetch_assoc()) { ?>
            <tr class="text-xs">
                <td class="px-6 py-4">
                    <?= $data_tempat["nama"]?></a>
                </td>
                <td class="px-6 py-4">
                    <?= $data_tempat["lokasi"]?>
                </td>
                <td class="px-6 py-4">
                    <?= $data_tempat["kapasitas"]?>
                </td>
                <td class="px-6 py-4">
                    <?= $data_tempat["keterangan"]?>
                </td>

                <!-- Action Button -->
                <td class="px-6 py-4 flex justify-center">

                    <button type="button"
                        data-modal-target="table-admin-update-records-action-popup-modal-tempat-<?= $data_tempat["id_tempat"]?>"
                        data-modal-toggle="table-admin-update-records-action-popup-modal-tempat-<?= $data_tempat["id_tempat"]?>"
                        class="me-2 border-slate-500 hover:bg-yellow-500 hover:text-white border-2 text-slate-500 font-medium rounded-lg text-lg  text-center"><i
                            class='bx bxs-edit p-3'></i></button>
                    <button type="button" data-id-table-tempat-records='<?= $data_tempat["id_tempat"]?>'
                        data-modal-target="table-admin-delete-records-action-popup-modal-tempat"
                        data-modal-toggle="table-admin-delete-records-action-popup-modal-tempat"
                        class="me-2 border-slate-500 hover:bg-red-500 hover:text-white border-2 text-slate-500 font-medium rounded-lg text-lg text-center">
                        <i class='bx bxs-trash p-3'></i></button>
                </td>
            </tr>

            <!-- Add Records Form -->
            <div id="table-admin-add-action-popup-modal-tempat"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="table-admin-add-action-popup-modal-tempat">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <div>
                                <h3 class="mb-5 text-lg font-medium text-gray-500 dark:text-gray-400">
                                    Tambah data</h3>

                                <form action="/ICE SPORTS/action/tempat/tambah-tempat.php" method="POST">
                                    <!-- Nama -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" required for="nama">Nama
                                            Tempat</label>
                                        <input id="nama" name="nama" type="text"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                    </div>
                                    <!-- Lokasi -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" for="lokasi">Lokasi</label>
                                        <input id="tabel_lokasi" name="lokasi" type="text" required
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                    </div>
                                    <!-- Kapasitas -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" for="kapasitas">Kapasitas</label>
                                        <input id="tabel_kapasitas" name="kapasitas" type="text" required
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                    </div>
                                    <!-- Keterangan -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" for="keterangan">Keterangan</label>
                                        <input id="tabel_keterangan" name="keterangan" type="text" required
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                    </div>

                                    <div class="mt-4">
                                        <button data-modal-hide="table-admin-add-action-popup-modal-tempat"
                                            type="submit"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 rounded-lg text-white bg-sky-600">Tambah</button>
                                        <a data-modal-hide="table-admin-add-action-popup-modal-tempat" type="button"
                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                            Batal
                                        </a>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Delete Records Form -->
            <div id="table-admin-delete-records-action-popup-modal-tempat"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="table-admin-delete-records-action-popup-modal-tempat">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                Yakin menghapus data tempat dengan
                                id: <span id='tempat-name-records-delete-btn'></span>?
                            </h3>
                            <a data-modal-hide="table-admin-delete-records-action-popup-modal-tempat"
                                id='tempat-acc-records-delete-btn' type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yakin
                            </a>
                            <button data-modal-hide="table-admin-delete-records-action-popup-modal-tempat" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Edit + Update Records Form -->
            <div id="table-admin-update-records-action-popup-modal-tempat-<?= $data_tempat["id_tempat"]?>"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="table-admin-update-records-action-popup-modal-tempat-<?= $data_tempat["id_tempat"]?>">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <div>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                    Edit data</h3>

                                <form action="/ICE SPORTS/action/tempat/update-tempat.php" method="POST">
                                    <input type="hidden" name="id_tempat" value='<?= $data_tempat["id_tempat"]?>' />

                                    <!-- Nama -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" required for="nama">Nama
                                            Tempat</label>
                                        <input id="nama" name="nama" type="text" value='<?= $data_tempat["nama"]?>'
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                    </div>
                                    <!-- Lokasi -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" for="lokasi">Lokasi</label>
                                        <input id="tabel_lokasi" name="lokasi" type="text" required
                                            value='<?= $data_tempat["lokasi"]?>'
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                    </div>
                                    <!-- Kapasitas -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" for="kapasitas">Kapasitas</label>
                                        <input id="tabel_kapasitas" name="kapasitas" type="text" required
                                            value='<?= $data_tempat["kapasitas"]?>'
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                    </div>
                                    <!-- Keterangan -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" for="keterangan">Keterangan</label>
                                        <input id="tabel_keterangan" name="keterangan" type="text" required
                                            value='<?= $data_tempat["keterangan"]?>'
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                    </div>

                                    <div class="mt-4">
                                        <button
                                            data-modal-hide="table-admin-update-records-action-popup-modal-tempat-<?= $data_tempat["id_tempat"]?>"
                                            type="submit"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 rounded-lg text-white bg-sky-600">Update</button>
                                        <a data-modal-hide="table-admin-update-records-action-popup-modal-tempat-<?= $data_tempat["id_tempat"]?>"
                                            type="button"
                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
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

    <script>
    function deleteTableRecordsTempat() {

        const deleteButtons = document.querySelectorAll('[data-id-table-tempat-records]');

        deleteButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const tableRecordsId = this.getAttribute('data-id-table-tempat-records');
                const accDeleteBtn = document.querySelector('#tempat-acc-records-delete-btn');

                const tableRecordsNameContainer = document.querySelector(
                    "#tempat-name-records-delete-btn")

                accDeleteBtn.href =
                    '/ICE SPORTS/action/tempat/hapus-tempat.php?id=' +
                    encodeURIComponent(
                        tableRecordsId);
                tableRecordsNameContainer.innerHTML = tableRecordsId
            });
        });
    }
    deleteTableRecordsTempat();
    </script>
</div>