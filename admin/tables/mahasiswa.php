<div class="mt-6 ">
    <div class="flex justify-between mb-4 items-center">
        <h3 class="first-letter:uppercase text-2xl font-rubik font-semibold text-slate-600" id="mahasiswa">
            Mahasiswa
        </h3>
        <div class="flex justify-end ">
            <button type="button" data-table="mahasiswa"
                data-modal-target="table-admin-add-action-popup-modal-mahasiswa"
                data-modal-toggle="table-admin-add-action-popup-modal-mahasiswa"
                class="text-white bg-sky-700 font-medium text-sm px-4 py-2 flex items-center gap-2 rounded-lg"><i
                    class='bx bx-plus text-lg'></i>Tambah
                Data </button>
        </div>
    </div>
    <table class="table-auto border-2 border-sky-700 w-full">
        <thead class="text-sm text-gray-700 uppercase text-center bg-sky-700 text-sky-50">
            <tr>
                <th scope="col" class="px-6 py-3">Nim</th>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Role</th>
                <th scope="col" class="px-6 py-3">Kelas</th>
                <th scope="col" class="px-6 py-3">Angkatan</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data_mahasiswa = $mahasiswa_data ->fetch_assoc()) { ?>
            <tr class="text-xs">
                <td class="px-6 py-4">
                    <?= $data_mahasiswa["nim"]?></a>
                </td>
                <td class="px-6 py-4">
                    <?= $data_mahasiswa["nama"]?>
                </td>
                <td class="px-6 py-4">
                    <?= $data_mahasiswa["role"]?>
                </td>
                <td class="px-6 py-4">
                    <?= $data_mahasiswa["kelas"]?>
                </td>
                <td class="px-6 py-4">
                    <?= $data_mahasiswa["angkatan"]?>
                </td>

                <!-- Action Button -->
                <td class="px-6 py-4 flex justify-center">
                    <button type="button"
                        data-modal-target="table-admin-update-records-action-popup-modal-mahasiswa-<?= $data_mahasiswa["nim"]?>"
                        data-modal-toggle="table-admin-update-records-action-popup-modal-mahasiswa-<?= $data_mahasiswa["nim"]?>"
                        class="me-2 border-slate-500 hover:bg-yellow-500 hover:text-white border-2 text-slate-500 font-medium rounded-lg text-lg  text-center"><i
                            class='bx bxs-edit p-3'></i></button>
                    <button type="button" data-id-table-mahasiswa-records='<?= $data_mahasiswa["nim"]?>'
                        data-modal-target="table-admin-delete-records-action-popup-modal-mahasiswa"
                        data-modal-toggle="table-admin-delete-records-action-popup-modal-mahasiswa"
                        class="me-2 border-slate-500 hover:bg-red-500 hover:text-white border-2 text-slate-500 font-medium rounded-lg text-lg text-center">
                        <i class='bx bxs-trash p-3'></i></button>
                </td>
            </tr>

            <!-- Add Records Form -->
            <div id="table-admin-add-action-popup-modal-mahasiswa"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="table-admin-add-action-popup-modal-mahasiswa">
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

                                <form action="/ICE SPORTS/action/mahasiswa/tambah-mahasiswa.php" method="POST"
                                    class="text-left">
                                    <input type="hidden" name="view" value='mahasiswa' />

                                    <!-- NIM -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" for="nim">NIM:
                                        </label>
                                        <input required id="nim" placeholder="Nim Anda" name="nim" type="text"
                                            maxlength="9"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md">
                                    </div>
                                    <!-- Nama -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" required for="nama">Nama</label>
                                        <input id="nama" name="nama" placeholder="Nama Anda" type="text"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                    </div>

                                    <!-- Kelas -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" for="kelas">Kelas</label>
                                        <input id="kelas" name="kelas" placeholder="Masukkan Kelas" type="text" required
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                    </div>
                                    <div class="mt-2 flex justify-between items-center">
                                        <!-- Angkatan -->
                                        <div class="flex flex-col w-1/2">
                                            <label class="text-gray-500 text-left" for="angkatan">Angkatan</label>
                                            <select name="angkatan" id="angkatan"
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md">
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                            </select>
                                        </div>
                                        <!-- Role -->
                                        <div class="pl-4 flex flex-col w-1/2">
                                            <div class="flex flex-1">
                                                <input required id="mahasiswa-role-peserta" name="role" type="radio"
                                                    value="Peserta"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                                <label class="ml-2 text-gray-500 text-left"
                                                    for="mahasiswa-role-peserta">Peserta</label>
                                            </div>
                                            <div class="flex flex-1">
                                                <input id="mahasiswa-role-panitia" name="role" type="radio"
                                                    value="Panitia"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300"><label
                                                    class="ml-2 text-gray-500 text-left"
                                                    for="mahasiswa-role-panitia">Panitia</label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button data-modal-hide="table-admin-add-action-popup-modal-mahasiswa"
                                            type="submit"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 rounded-lg text-white bg-sky-600">Tambah</button>
                                        <a data-modal-hide="table-admin-add-action-popup-modal-mahasiswa" type="reset"
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
            <!-- Delete Records Form -->
            <div id="table-admin-delete-records-action-popup-modal-mahasiswa"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="table-admin-delete-records-action-popup-modal-mahasiswa">
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
                                Yakin menghapus data dengan
                                NIM: <span id="mahasiswa-records-name-container"></span>?</h3>
                            <a data-modal-hide="table-admin-delete-records-action-popup-modal-mahasiswa"
                                id="mahasiswa-acc-records-delete-btn" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yakin
                            </a>
                            <button data-modal-hide="table-admin-delete-records-action-popup-modal-mahasiswa"
                                type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Edit + Update Records Form -->
            <div id="table-admin-update-records-action-popup-modal-mahasiswa-<?= $data_mahasiswa["nim"]?>"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="table-admin-update-records-action-popup-modal-mahasiswa-<?= $data_mahasiswa["nim"]?>">
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

                                <form action="/ICE SPORTS/action/mahasiswa/update-mahasiswa.php" method="POST">
                                    <input type="hidden" name="view" value='mahasiswa' />

                                    <!-- NIM -->
                                    <label class="text-white dark:text-gray-200" for="nim">NIM:
                                    </label>
                                    <input required id="nim" placeholder="Nim Anda" name="nim" type="text" maxlength="9"
                                        value='<?= $data_mahasiswa["nim"]?>'
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md">

                                    <!-- Nama -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" required for="nama">Nama</label>
                                        <input id="nama" name="nama" placeholder="Nama Anda" type="text"
                                            value='<?= $data_mahasiswa["nama"]?>'
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                    </div>

                                    <!-- Kelas -->
                                    <div class="flex flex-col">
                                        <label class="text-gray-500 text-left" for="kelas">Kelas</label>
                                        <input id="kelas" name="kelas" placeholder="Masukkan Kelas" type="text" required
                                            value='<?= $data_mahasiswa["kelas"]?>'
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                                    </div>

                                    <div class="mt-2 flex justify-between items-center">
                                        <!-- Angkatan -->
                                        <div class="flex flex-col w-1/2">
                                            <label class="text-gray-500 text-left" for="angkatan">Angkatan</label>
                                            <select name="angkatan" id="angkatan"
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md">
                                                <option value="2019"
                                                    <?php echo $data_mahasiswa["angkatan"] === "2019"  ?  "selected" : "";?>>
                                                    2019</option>
                                                <option value="2020"
                                                    <?php echo $data_mahasiswa["angkatan"] === "2020"  ?  "selected" : "";?>>
                                                    2020</option>
                                                <option value="2021"
                                                    <?php echo $data_mahasiswa["angkatan"] === "2021"  ?  "selected" : "";?>>
                                                    2021</option>
                                                <option value="2022"
                                                    <?php echo $data_mahasiswa["angkatan"] === "2022"  ?  "selected" : "";?>>
                                                    2022</option>
                                                <option value="2023"
                                                    <?php echo $data_mahasiswa["angkatan"] === "2023"  ?  "selected" : "";?>>
                                                    2023</option>
                                                <option value="2024"
                                                    <?php echo $data_mahasiswa["angkatan"] === "2024"  ?  "selected" : "";?>>
                                                    2024</option>
                                                <option value="2025"
                                                    <?php echo $data_mahasiswa["angkatan"] === "2025"  ?  "selected" : "";?>>
                                                    2025</option>
                                            </select>
                                        </div>
                                        <!-- Role -->
                                        <div class="pl-4 flex flex-col w-1/2">
                                            <div class="flex flex-1">
                                                <input required id="mahasiswa-role-peserta" name="role" type="radio"
                                                    value="Peserta"
                                                    <?php echo $data_mahasiswa["role"] === "Peserta"  ?  "checked" : "";?>
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                                <label class="ml-2 text-gray-500 text-left"
                                                    for="mahasiswa-role-peserta">Peserta</label>
                                            </div>
                                            <div class="flex flex-1">
                                                <input id="mahasiswa-role-panitia" name="role" type="radio"
                                                    value="Panitia"
                                                    <?php echo $data_mahasiswa["role"] === "Peserta"  ?  "checked" : "";?>
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300"><label
                                                    class="ml-2 text-gray-500 text-left"
                                                    for="mahasiswa-role-panitia">Panitia</label>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="mt-4">
                                        <button
                                            data-modal-hide="table-admin-update-records-action-popup-modal-mahasiswa-<?= $data_mahasiswa["nim"]?>"
                                            type="submit"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 rounded-lg text-white bg-sky-600">Update</button>
                                        <a data-modal-hide="table-admin-update-records-action-popup-modal-mahasiswa-<?= $data_mahasiswa["nim"]?>"
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
    <script>
    function deleteTableRecordsMahasiswa() {

        const deleteButtons = document.querySelectorAll('[data-id-table-mahasiswa-records]');
        deleteButtons.forEach(btn => {
            btn.addEventListener('click', function() {

                const tableRecordsNim = this.getAttribute('data-id-table-mahasiswa-records');
                const accDeleteBtn = document.querySelector('#mahasiswa-acc-records-delete-btn');

                const recordsNameContainer = document.querySelector("#mahasiswa-records-name-container")
                accDeleteBtn.href = '/ICE SPORTS/action/mahasiswa/hapus-mahasiswa.php?nim=' +
                    encodeURIComponent(
                        tableRecordsNim);
                recordsNameContainer.innerHTML = tableRecordsNim
            });
        });
    }
    deleteTableRecordsMahasiswa();
    </script>
</div>