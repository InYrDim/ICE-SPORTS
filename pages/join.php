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


            <div class="container max-w-lg mx-auto bg-white p-8 rounded shadow-lg mt-8">
                <form action="/ICE SPORTS/koneksi/join.php" method="POST" class="text-left">

                    <h3 class="text-4xl font-bold text-sky-700 mt-2 mb-4">HI Isi Form Dulu Yahh!</h3>
                    <hr class="mb-4">
                    <input type="hidden" name="view" value='mahasiswa' />

                    <!-- NIM -->

                    <label class="text-slate-700" for="nim">NIM:
                    </label>
                    <input required id="nim" placeholder="Nim Anda" name="nim" type="text" maxlength="9"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md">

                    <!-- Nama -->
                    <div>
                        <label class="text-slate-700" required for="nama">Nama</label>
                        <input id="nama" name="nama" placeholder="Nama Anda" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                    </div>

                    <!-- Kelas -->
                    <div>
                        <label class="text-slate-700" for="kelas">Kelas</label>
                        <input id="kelas" name="kelas" placeholder="Masukkan Kelas" type="text" required
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md ">
                    </div>
                    <!-- Angkatan -->
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
                                <input required id="mahasiswa-role-peserta" name="role" type="radio" value="Peserta"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                <label class="ml-2 text-gray-500 text-left" for="mahasiswa-role-peserta">Peserta</label>
                            </div>
                            <div class="flex flex-1">
                                <input id="mahasiswa-role-panitia" name="role" type="radio" value="Panitia"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300"><label
                                    class="ml-2 text-gray-500 text-left" for="mahasiswa-role-panitia">Panitia</label>

                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button data-modal-hide="table-admin-add-action-popup-modal-mahasiswa" type="submit"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 rounded-lg text-white bg-sky-600">Bergabung</button>
                        <a data-modal-hide="table-admin-add-action-popup-modal-mahasiswa" type="reset"
                            href="/ICE SPORTS"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Batal
                        </a>
                    </div>
                </form>
            </div>


        </main>
        <div class="relative">
            <?php include '../components/footer.php' ?>
            <div class="block fixed top-0 lg:w-full brightness-50 sm:brightness-100 -z-10">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 995.89 792.55"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>game day</title>
                    <path
                        d="M523.64,68.48C401,21.61,258.72,91,170.5,211.58c-26,35.59-47.95,77.63-57.65,125.16-11.74,57.56-4.72,119.51,11.75,175.06C149.44,595.57,196.74,669,258.32,709.19s137.28,45.14,199.61,6.89c34.69-21.29,66.11-55.51,104.21-61.19,58.32-8.69,107.66,50.8,160.44,84.3,36.13,22.93,75.87,34.11,115.19,44.95,44.58,12.3,91.76,24.24,134.89,5.09,35.72-15.87,64.71-52.08,83.93-94.43s29.48-90.61,36.18-139c4.2-30.37,7.08-61.5,3.67-92-3.55-31.86-13.88-62-27.35-88.93-30.4-60.85-76.47-106.25-126.27-138.77s-103.59-53.1-157.18-72.88C689.31,127.58,623,86.63,523.88,68.28Z"
                        transform="translate(-102.06 -53.73)" fill="#0489c1" opacity="0.1" />
                    <path
                        d="M883,574c-22.49,73.35-31.52,213.34-31.52,213.34H308.17c1.77-66.58-37.12-204.47-38.3-215.07-1-8.86,35-54.68,46.91-69.57a12.47,12.47,0,0,1,9.74-4.68H817.59a12.59,12.59,0,0,1,7.16,2.26,186.79,186.79,0,0,1,57.34,64.25A12.43,12.43,0,0,1,883,574Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <rect x="255.02" y="603.38" width="436.05" height="50.68" fill="#3f3d56" />
                    <rect x="255.02" y="603.38" width="436.05" height="50.68" rx="21.5" fill="#fff" opacity="0.1" />
                    <path
                        d="M334.69,545.14s-27.11-83.67,17.68-95.46S495,453.22,495,453.22s76.61-38.89,165-8.25c0,0,126.1-37.71,150.85-1.18s-5.89,101.35-5.89,101.35Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <polygon points="213.19 519.11 235.58 474.33 254.44 561.54 250.9 593.36 213.19 519.11"
                        opacity="0.1" />
                    <polygon points="727.01 519.11 704.62 474.33 685.77 561.54 689.3 593.36 727.01 519.11"
                        opacity="0.1" />
                    <polygon points="252.79 559.16 678.7 556.82 683.41 603.96 254.44 602.79 252.79 559.16"
                        opacity="0.1" />
                    <path
                        d="M566.18,612.64a4.39,4.39,0,0,0-.57,1.22c-.44,1.25-.92,2.49-1.39,3.73l-.67,1.73A44.64,44.64,0,0,1,561,625.2a5.33,5.33,0,0,1-1,1.34c-.42.38-1,.82-.84,1.35a4.35,4.35,0,0,0,2.06,0,8.63,8.63,0,0,0,2.4-1.22l8.75-5.64a13.57,13.57,0,0,0,2.69-2.07,25.74,25.74,0,0,0,1.82-2.47c1.78-2.41,4.32-4.23,5.81-6.84a.34.34,0,0,0,.05-.14c0-.18-.25-.23-.44-.21-4.45.45-8.68,2.07-13.11,2.74C568.24,612.13,566.82,611.81,566.18,612.64Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M567.05,614.1c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M568,617.72c-.14.33-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M562.28,624.15c-.14.33-.25.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M564.26,622.88c-.13.33-.25.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M575.18,615.89c-.13.34-.25.76,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M571.57,616.8c-.13.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M570.3,614.82c-.13.33-.25.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M565,620.1c-.1.19-.19.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M563,623.58c-.09.2-.18.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M570,619.13c-.09.2-.18.45,0,.6l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M566.84,623.13c-.13-.18-.3-.38-.5-.32l0,.2.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M565.93,619.51c-.13-.18-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M573.56,615.53c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M575.54,614.26c-.13.34-.25.77,0,1l.27-.17-.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M576.25,611.48c-.1.2-.19.45,0,.59l.17-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M574.28,615c-.1.2-.19.46,0,.6l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M578.12,614.51c-.13-.18-.31-.38-.5-.32v.21l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M577.21,610.9c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M569.9,617c-.13-.18-.31-.37-.5-.32v.21l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M574.87,613.8c-.13-.18-.31-.38-.51-.32l0,.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M569.72,615a4.1,4.1,0,0,0-.58,1.21c-.43,1.26-.91,2.5-1.39,3.74l-.66,1.73a45.26,45.26,0,0,1-2.59,5.87,5,5,0,0,1-1,1.34c-.42.38-1,.82-.83,1.36a4.44,4.44,0,0,0,2,0,9,9,0,0,0,2.41-1.22l8.74-5.64a13.35,13.35,0,0,0,2.7-2.07,29.64,29.64,0,0,0,1.82-2.47c1.77-2.42,4.32-4.24,5.8-6.84a.24.24,0,0,0,0-.14c0-.19-.25-.23-.43-.22-4.46.46-8.69,2.08-13.11,2.75C571.77,614.49,570.36,614.17,569.72,615Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M570.58,616.46c-.13.34-.25.76,0,1l.27-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M571.49,620.07c-.13.34-.25.77,0,1l.27-.17-.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M565.81,626.5c-.13.34-.25.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M567.8,625.23c-.13.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M578.72,618.25c-.13.33-.25.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M575.11,619.16c-.14.34-.26.76,0,1l.28-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M573.84,617.18c-.14.33-.26.76,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M568.51,622.45c-.1.2-.19.45,0,.59l.18-.11-.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M566.54,625.94c-.1.2-.19.45,0,.59l.17-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M573.49,621.49c-.1.2-.19.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M570.38,625.48c-.13-.17-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M569.47,621.87c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M577.09,617.89c-.13.34-.25.76,0,1l.27-.18-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M579.08,616.62c-.14.34-.26.76,0,1l.28-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M579.78,613.84c-.09.2-.18.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M577.82,617.32c-.1.2-.19.45-.05.59l.18-.11-.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M581.66,616.87c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M580.74,613.26c-.13-.18-.3-.38-.5-.32l0,.2.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M573.44,619.33c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M578.4,616.15c-.13-.17-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M546.15,611.46a4.15,4.15,0,0,0-.58,1.22c-.43,1.25-.91,2.49-1.39,3.74l-.67,1.73a45,45,0,0,1-2.58,5.87,5.2,5.2,0,0,1-1,1.34c-.42.38-1,.82-.83,1.35a4.31,4.31,0,0,0,2-.05,8.69,8.69,0,0,0,2.41-1.22l8.74-5.63a13.77,13.77,0,0,0,2.7-2.08,28.07,28.07,0,0,0,1.82-2.47c1.77-2.41,4.32-4.23,5.8-6.83a.3.3,0,0,0,.05-.15c0-.18-.25-.23-.43-.21-4.46.46-8.69,2.07-13.11,2.74C548.2,611,546.79,610.63,546.15,611.46Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M547,612.92c-.13.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M547.92,616.54c-.13.33-.25.76,0,1l.27-.17-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M542.24,623c-.13.34-.25.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M544.23,621.7c-.13.34-.25.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M555.15,614.71c-.13.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M551.54,615.63c-.14.33-.26.76,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M550.27,613.64c-.14.34-.26.76,0,1l.28-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M544.94,618.92c-.1.2-.19.45-.05.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M543,622.4c-.1.2-.19.45,0,.59l.17-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M549.92,618c-.1.2-.19.46,0,.6l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M546.81,622c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M545.9,618.34c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M553.52,614.36c-.13.33-.25.76,0,1l.27-.17-.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M555.51,613.08c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M556.21,610.3c-.09.2-.18.45,0,.59l.18-.11-.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M554.24,613.79c-.09.2-.18.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M558.09,613.33c-.13-.17-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M557.17,609.72c-.13-.18-.3-.38-.5-.32l0,.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M549.87,615.79c-.13-.17-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M554.83,612.62c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M563.82,606.75a4.39,4.39,0,0,0-.57,1.22c-.44,1.25-.91,2.49-1.39,3.73l-.67,1.73a44.64,44.64,0,0,1-2.59,5.88,5.11,5.11,0,0,1-1,1.33c-.42.38-1,.82-.83,1.36a4.44,4.44,0,0,0,2.05,0,8.77,8.77,0,0,0,2.4-1.22l8.75-5.64a13.93,13.93,0,0,0,2.7-2.07,27.45,27.45,0,0,0,1.81-2.47c1.78-2.42,4.32-4.24,5.81-6.84a.34.34,0,0,0,0-.14c0-.18-.25-.23-.43-.22-4.46.46-8.69,2.08-13.11,2.75C565.88,606.24,564.46,605.92,563.82,606.75Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M564.69,608.21c-.14.34-.26.76,0,1l.27-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M565.6,611.82c-.13.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M559.92,618.26c-.13.33-.25.76,0,1l.27-.17-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M561.91,617c-.14.33-.26.76,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M572.83,610c-.14.34-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M569.21,610.91c-.13.34-.25.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M567.94,608.93c-.13.33-.25.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M562.61,614.2c-.09.2-.18.45,0,.59l.18-.11-.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M560.65,617.69c-.1.2-.19.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M567.59,613.24c-.09.2-.18.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M564.49,617.23c-.13-.17-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M563.57,613.62c-.13-.18-.3-.38-.5-.32l0,.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M571.2,609.64c-.14.34-.25.76,0,1l.27-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M573.18,608.37c-.13.34-.25.76,0,1l.28-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M573.89,605.59c-.1.2-.19.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M571.92,609.07c-.09.2-.18.45,0,.59l.18-.11-.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M575.76,608.62c-.13-.18-.3-.38-.5-.32l0,.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M574.85,605c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M567.54,611.08c-.12-.18-.3-.38-.5-.32l0,.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M572.51,607.91c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M560.29,604.39a3.89,3.89,0,0,0-.57,1.22c-.44,1.25-.92,2.49-1.4,3.73l-.66,1.73a46,46,0,0,1-2.59,5.88,5.37,5.37,0,0,1-1,1.34c-.41.38-1,.82-.83,1.35a4.3,4.3,0,0,0,2,0,8.55,8.55,0,0,0,2.41-1.22l8.74-5.63a13.77,13.77,0,0,0,2.7-2.08,26.19,26.19,0,0,0,1.82-2.47c1.77-2.41,4.32-4.23,5.8-6.84a.35.35,0,0,0,.06-.14c0-.18-.25-.23-.44-.21-4.46.45-8.69,2.07-13.11,2.74C562.35,603.88,560.93,603.56,560.29,604.39Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M560.29,604.39a3.89,3.89,0,0,0-.57,1.22c-.44,1.25-.92,2.49-1.4,3.73l-.66,1.73a46,46,0,0,1-2.59,5.88,5.37,5.37,0,0,1-1,1.34c-.41.38-1,.82-.83,1.35a4.3,4.3,0,0,0,2,0,8.55,8.55,0,0,0,2.41-1.22l8.74-5.63a13.77,13.77,0,0,0,2.7-2.08,26.19,26.19,0,0,0,1.82-2.47c1.77-2.41,4.32-4.23,5.8-6.84a.35.35,0,0,0,.06-.14c0-.18-.25-.23-.44-.21-4.46.45-8.69,2.07-13.11,2.74C562.35,603.88,560.93,603.56,560.29,604.39Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M561.15,605.85c-.13.34-.25.77,0,1l.27-.17-.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M562.07,609.47c-.14.33-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M556.39,615.9c-.14.33-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M558.37,614.63c-.13.33-.25.76,0,1l.27-.17-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M569.29,607.64c-.13.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M565.68,608.55c-.14.34-.26.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M564.41,606.57c-.14.34-.26.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M559.08,611.85c-.1.2-.19.45,0,.59l.17-.11L559,612" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M557.11,615.33c-.1.2-.19.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M564.06,610.88c-.1.2-.19.45,0,.6l.17-.11L564,611" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M561,614.88c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M560,611.26c-.13-.17-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M567.66,607.28c-.13.34-.25.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M569.65,606c-.14.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M570.36,603.23c-.1.2-.19.45-.05.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M568.39,606.72c-.1.19-.19.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M572.23,606.26c-.13-.18-.31-.37-.5-.32v.21l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M571.32,602.65c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M564,608.72c-.13-.18-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M569,605.55c-.13-.18-.31-.38-.5-.32l0,.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M553.22,615a3.84,3.84,0,0,0-.57,1.21c-.44,1.26-.92,2.5-1.4,3.74l-.66,1.73a45.26,45.26,0,0,1-2.59,5.87,5,5,0,0,1-1,1.34c-.42.38-1,.82-.83,1.36a4.44,4.44,0,0,0,2,0,9,9,0,0,0,2.41-1.22l8.74-5.64a13.35,13.35,0,0,0,2.7-2.07,27.55,27.55,0,0,0,1.82-2.47c1.77-2.42,4.32-4.24,5.8-6.84a.35.35,0,0,0,.06-.14c0-.19-.26-.23-.44-.22-4.46.46-8.69,2.08-13.11,2.75C555.28,614.49,553.86,614.17,553.22,615Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M554.08,616.46c-.13.34-.25.76,0,1l.27-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M555,620.07c-.13.34-.25.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M549.32,626.5c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M551.3,625.23c-.13.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M562.22,618.25c-.13.33-.25.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M558.61,619.16c-.14.34-.26.76,0,1l.28-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M557.34,617.18c-.14.33-.26.76,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M552,622.45c-.1.2-.19.45,0,.59l.18-.11-.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M550,625.94c-.1.2-.19.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M557,621.49c-.1.2-.19.45,0,.59l.17-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M553.88,625.48c-.13-.17-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M553,621.87c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M560.59,617.89c-.13.34-.25.76,0,1l.27-.18-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M562.58,616.62c-.14.34-.26.76,0,1l.27-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M563.28,613.84c-.09.2-.18.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M561.32,617.32c-.1.2-.19.45-.05.59l.18-.11-.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M565.16,616.87c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M564.24,613.26c-.12-.18-.3-.38-.5-.32l0,.2.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M556.94,619.33c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M561.9,616.15c-.13-.17-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M573.25,603.21a4.39,4.39,0,0,0-.57,1.22c-.44,1.25-.92,2.5-1.39,3.74l-.67,1.73a45.1,45.1,0,0,1-2.59,5.87,5.16,5.16,0,0,1-1,1.34c-.42.38-1,.82-.84,1.35a4.35,4.35,0,0,0,2.06-.05,8.63,8.63,0,0,0,2.4-1.22l8.75-5.63a14,14,0,0,0,2.69-2.08,24.55,24.55,0,0,0,1.82-2.47c1.78-2.41,4.32-4.23,5.81-6.83a.38.38,0,0,0,0-.15c0-.18-.25-.23-.44-.21-4.45.46-8.68,2.08-13.1,2.74C575.31,602.7,573.89,602.38,573.25,603.21Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M573.25,603.21a4.39,4.39,0,0,0-.57,1.22c-.44,1.25-.92,2.5-1.39,3.74l-.67,1.73a45.1,45.1,0,0,1-2.59,5.87,5.16,5.16,0,0,1-1,1.34c-.42.38-1,.82-.84,1.35a4.35,4.35,0,0,0,2.06-.05,8.63,8.63,0,0,0,2.4-1.22l8.75-5.63a14,14,0,0,0,2.69-2.08,24.55,24.55,0,0,0,1.82-2.47c1.78-2.41,4.32-4.23,5.81-6.83a.38.38,0,0,0,0-.15c0-.18-.25-.23-.44-.21-4.45.46-8.68,2.08-13.1,2.74C575.31,602.7,573.89,602.38,573.25,603.21Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M574.12,604.68c-.14.33-.26.76,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M575,608.29c-.14.34-.26.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M569.35,614.72c-.13.34-.25.76,0,1l.27-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M571.34,613.45c-.14.34-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M582.26,606.46c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M578.64,607.38c-.13.33-.25.76,0,1l.27-.17-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M577.37,605.39c-.13.34-.25.76,0,1l.27-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M572,610.67c-.09.2-.18.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M570.07,614.15c-.09.2-.18.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M577,609.71c-.09.19-.18.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M573.91,613.7c-.13-.18-.3-.38-.5-.32l0,.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M573,610.09c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M580.63,606.11c-.14.33-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M582.61,604.84c-.13.33-.25.76,0,1l.27-.17-.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M583.32,602.05c-.1.2-.19.45,0,.59l.17-.11-.17-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M581.35,605.54c-.1.2-.19.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M585.19,605.08c-.13-.17-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M584.28,601.47c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M577,607.55c-.13-.18-.31-.38-.5-.32l0,.2.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M581.94,604.37c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M588.74,612.64a4.39,4.39,0,0,1,.57,1.22c.44,1.25.92,2.49,1.39,3.73l.67,1.73A44.64,44.64,0,0,0,594,625.2a5.33,5.33,0,0,0,1,1.34c.42.38,1,.82.84,1.35a4.35,4.35,0,0,1-2.06,0,8.63,8.63,0,0,1-2.4-1.22L582.56,621a13.57,13.57,0,0,1-2.69-2.07,25.74,25.74,0,0,1-1.82-2.47c-1.78-2.41-4.32-4.23-5.81-6.84a.34.34,0,0,1,0-.14c0-.18.25-.23.44-.21,4.45.45,8.68,2.07,13.1,2.74C586.68,612.13,588.1,611.81,588.74,612.64Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M588.74,612.64a4.39,4.39,0,0,1,.57,1.22c.44,1.25.92,2.49,1.39,3.73l.67,1.73A44.64,44.64,0,0,0,594,625.2a5.33,5.33,0,0,0,1,1.34c.42.38,1,.82.84,1.35a4.35,4.35,0,0,1-2.06,0,8.63,8.63,0,0,1-2.4-1.22L582.56,621a13.57,13.57,0,0,1-2.69-2.07,25.74,25.74,0,0,1-1.82-2.47c-1.78-2.41-4.32-4.23-5.81-6.84a.34.34,0,0,1,0-.14c0-.18.25-.23.44-.21,4.45.45,8.68,2.07,13.1,2.74C586.68,612.13,588.1,611.81,588.74,612.64Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M587.87,614.1c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M587,617.72c.14.33.26.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M592.64,624.15c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M590.65,622.88c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M579.73,615.89c.14.34.26.76,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M583.35,616.8c.13.34.25.77,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M584.62,614.82c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M590,620.1c.09.19.18.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M591.92,623.58c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M585,619.13c.09.2.18.45,0,.6l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M588.08,623.13c.13-.18.3-.38.5-.32l0,.2-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M589,619.51c.13-.18.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M581.36,615.53c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M579.38,614.26c.13.34.25.77,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M578.67,611.48c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M580.64,615c.1.2.19.46,0,.6l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M576.8,614.51c.13-.18.31-.38.5-.32v.21l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M577.71,610.9c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M585,617c.13-.18.31-.37.5-.32l0,.21-.39,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M580.05,613.8c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M585.2,615a3.84,3.84,0,0,1,.57,1.21c.44,1.26.92,2.5,1.4,3.74l.66,1.73a45.26,45.26,0,0,0,2.59,5.87,5,5,0,0,0,1,1.34c.42.38,1,.82.83,1.36a4.44,4.44,0,0,1-2.05,0,9,9,0,0,1-2.41-1.22L579,623.34a13.35,13.35,0,0,1-2.7-2.07,27.55,27.55,0,0,1-1.82-2.47c-1.77-2.42-4.32-4.24-5.8-6.84a.35.35,0,0,1-.06-.14c0-.19.26-.23.44-.22,4.46.46,8.69,2.08,13.11,2.75C583.14,614.49,584.56,614.17,585.2,615Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M585.2,615a3.84,3.84,0,0,1,.57,1.21c.44,1.26.92,2.5,1.4,3.74l.66,1.73a45.26,45.26,0,0,0,2.59,5.87,5,5,0,0,0,1,1.34c.42.38,1,.82.83,1.36a4.44,4.44,0,0,1-2.05,0,9,9,0,0,1-2.41-1.22L579,623.34a13.35,13.35,0,0,1-2.7-2.07,27.55,27.55,0,0,1-1.82-2.47c-1.77-2.42-4.32-4.24-5.8-6.84a.35.35,0,0,1-.06-.14c0-.19.26-.23.44-.22,4.46.46,8.69,2.08,13.11,2.75C583.14,614.49,584.56,614.17,585.2,615Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M584.34,616.46c.13.34.25.76,0,1l-.27-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M583.43,620.07c.13.34.25.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M589.1,626.5c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M587.12,625.23c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M576.2,618.25c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M579.81,619.16c.14.34.26.76,0,1l-.28-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M581.08,617.18c.14.33.26.76,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M586.41,622.45c.1.2.19.45.05.59l-.18-.11.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M588.38,625.94c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M581.43,621.49c.1.2.19.45,0,.59l-.17-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M584.54,625.48c.13-.17.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M585.45,621.87c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M577.83,617.89c.13.34.25.76,0,1l-.27-.18.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M575.84,616.62c.14.34.26.76,0,1l-.27-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M575.14,613.84c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M577.1,617.32c.1.2.19.45,0,.59l-.18-.11.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M573.26,616.87c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M574.18,613.26c.13-.18.3-.38.5-.32l0,.2-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M581.48,619.33c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M576.52,616.15c.13-.17.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M598.17,607.93a4.33,4.33,0,0,1,.57,1.21c.44,1.26.91,2.5,1.39,3.74l.67,1.73a44.51,44.51,0,0,0,2.59,5.87,5,5,0,0,0,1,1.34c.42.38,1,.82.83,1.36a4.44,4.44,0,0,1-2.05,0,8.77,8.77,0,0,1-2.4-1.22L592,616.27a14,14,0,0,1-2.7-2.08,27.3,27.3,0,0,1-1.81-2.46c-1.78-2.42-4.32-4.24-5.81-6.84a.34.34,0,0,1,0-.14c0-.19.25-.24.43-.22,4.46.46,8.69,2.08,13.11,2.75C596.11,607.42,597.53,607.1,598.17,607.93Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M598.17,607.93a4.33,4.33,0,0,1,.57,1.21c.44,1.26.91,2.5,1.39,3.74l.67,1.73a44.51,44.51,0,0,0,2.59,5.87,5,5,0,0,0,1,1.34c.42.38,1,.82.83,1.36a4.44,4.44,0,0,1-2.05,0,8.77,8.77,0,0,1-2.4-1.22L592,616.27a14,14,0,0,1-2.7-2.08,27.3,27.3,0,0,1-1.81-2.46c-1.78-2.42-4.32-4.24-5.81-6.84a.34.34,0,0,1,0-.14c0-.19.25-.24.43-.22,4.46.46,8.69,2.08,13.11,2.75C596.11,607.42,597.53,607.1,598.17,607.93Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M597.3,609.39c.14.34.26.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M596.39,613c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M602.07,619.43c.13.34.25.77,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M600.08,618.16c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M589.16,611.18c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M592.78,612.09c.13.34.25.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M594.05,610.1c.13.34.25.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M599.38,615.38c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M601.34,618.87c.1.19.19.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M594.4,614.42c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M597.5,618.41c.13-.18.31-.37.5-.32v.21l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M598.42,614.8c.13-.18.3-.38.5-.32l0,.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M590.79,610.82c.14.34.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M588.81,609.55c.13.34.25.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M588.1,606.77c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M590.07,610.25c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M586.23,609.8c.13-.18.3-.38.5-.32l0,.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M587.14,606.19c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M594.45,612.26c.13-.18.3-.38.5-.32l0,.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M589.48,609.08c.13-.18.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M554.56,609.11a3.84,3.84,0,0,1,.57,1.21c.44,1.26.92,2.5,1.4,3.74l.66,1.73a45.87,45.87,0,0,0,2.59,5.87,5,5,0,0,0,1,1.34c.41.38,1,.82.83,1.36a4.44,4.44,0,0,1-2.05-.06,8.69,8.69,0,0,1-2.41-1.22l-8.74-5.63a13.4,13.4,0,0,1-2.7-2.08,27.41,27.41,0,0,1-1.82-2.46c-1.77-2.42-4.32-4.24-5.8-6.84a.42.42,0,0,1-.06-.14c0-.19.25-.24.44-.22,4.46.46,8.69,2.08,13.11,2.74C552.5,608.6,553.92,608.28,554.56,609.11Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M554.56,609.11a3.84,3.84,0,0,1,.57,1.21c.44,1.26.92,2.5,1.4,3.74l.66,1.73a45.87,45.87,0,0,0,2.59,5.87,5,5,0,0,0,1,1.34c.41.38,1,.82.83,1.36a4.44,4.44,0,0,1-2.05-.06,8.69,8.69,0,0,1-2.41-1.22l-8.74-5.63a13.4,13.4,0,0,1-2.7-2.08,27.41,27.41,0,0,1-1.82-2.46c-1.77-2.42-4.32-4.24-5.8-6.84a.42.42,0,0,1-.06-.14c0-.19.25-.24.44-.22,4.46.46,8.69,2.08,13.11,2.74C552.5,608.6,553.92,608.28,554.56,609.11Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M553.7,610.57c.13.33.25.76,0,1l-.27-.17.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M552.78,614.18c.14.34.26.76,0,1l-.28-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M558.46,620.61c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M556.48,619.34c.13.34.25.77,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M545.56,612.36c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M549.17,613.27c.14.33.26.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M550.44,611.28c.14.34.26.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M555.77,616.56c.1.2.19.45,0,.59l-.17-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M557.74,620c.1.2.19.45,0,.6l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M550.79,615.6c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M553.9,619.59c.13-.18.31-.38.5-.32v.21l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M554.81,616c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M547.19,612c.13.33.25.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M545.2,610.73c.14.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M544.5,608c.09.19.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M546.46,611.43c.1.2.19.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M542.62,611c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M543.53,607.36c.13-.18.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M550.84,613.44c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M545.88,610.26c.13-.18.31-.38.5-.32l0,.21-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M586.38,605.57a4.13,4.13,0,0,1,.57,1.22c.44,1.25.92,2.49,1.4,3.73l.66,1.73a46,46,0,0,0,2.59,5.88,5.37,5.37,0,0,0,1,1.34c.41.38,1,.81.83,1.35a4.3,4.3,0,0,1-2-.05,8.82,8.82,0,0,1-2.41-1.22l-8.74-5.64a13.35,13.35,0,0,1-2.7-2.07,27.55,27.55,0,0,1-1.82-2.47c-1.77-2.41-4.32-4.23-5.8-6.84a.35.35,0,0,1-.06-.14c0-.18.25-.23.44-.21,4.46.45,8.69,2.07,13.11,2.74C584.32,605.06,585.74,604.74,586.38,605.57Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M585.52,607c.13.34.25.77,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M584.6,610.65c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M590.28,617.08c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M588.3,615.81c.13.33.25.76,0,1l-.27-.17.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M577.38,608.82c.13.34.25.76,0,1l-.27-.18.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M581,609.73c.14.34.26.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M582.26,607.75c.14.33.26.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M587.59,613c.1.2.19.45,0,.6l-.17-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M589.56,616.51c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M582.61,612.06c.1.2.19.45,0,.59l-.17-.11.17-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M585.72,616.06c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M586.63,612.44c.13-.18.31-.37.5-.32v.21l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M579,608.46c.13.34.25.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M577,607.19c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M576.31,604.41c.1.2.19.45.05.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M578.28,607.89c.1.2.19.45,0,.6l-.17-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M574.44,607.44c.13-.18.31-.38.5-.32v.21l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M575.35,603.83c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M582.66,609.9c.13-.18.31-.38.5-.32v.21l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M577.7,606.73c.13-.18.3-.38.5-.32l0,.2-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M608.77,611.46a3.89,3.89,0,0,1,.57,1.22c.44,1.25.92,2.49,1.4,3.74l.66,1.73A46.5,46.5,0,0,0,614,624a5.2,5.2,0,0,0,1,1.34c.42.38,1,.82.83,1.35a4.31,4.31,0,0,1-2-.05,8.69,8.69,0,0,1-2.41-1.22l-8.74-5.63a13.77,13.77,0,0,1-2.7-2.08,26.19,26.19,0,0,1-1.82-2.47c-1.77-2.41-4.32-4.23-5.8-6.83a.47.47,0,0,1-.06-.15c0-.18.26-.23.44-.21,4.46.46,8.69,2.07,13.11,2.74C606.71,611,608.13,610.63,608.77,611.46Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M607.91,612.92c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M607,616.54c.13.33.25.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M612.67,623c.14.34.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M610.69,621.7c.13.34.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M599.77,614.71c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M603.38,615.63c.14.33.26.76,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M604.65,613.64c.14.34.26.76,0,1l-.28-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M610,618.92c.1.2.19.45,0,.59l-.18-.11L610,619" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M612,622.4c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M605,618c.1.2.19.46,0,.6l-.17-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M608.11,622c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M609,618.34c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M601.4,614.36c.13.33.25.76,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M599.41,613.08c.14.34.26.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M598.71,610.3c.09.2.18.45,0,.59l-.18-.11.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M600.67,613.79c.1.2.19.45.05.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M596.83,613.33c.13-.17.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M597.75,609.72c.13-.18.3-.38.5-.32l0,.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M605.05,615.79c.13-.17.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M600.09,612.62c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M601.7,615a3.84,3.84,0,0,1,.57,1.21c.44,1.26.92,2.5,1.4,3.74l.66,1.73a45.26,45.26,0,0,0,2.59,5.87,5,5,0,0,0,1,1.34c.41.38,1,.82.83,1.36a4.43,4.43,0,0,1-2.05,0,9,9,0,0,1-2.41-1.22l-8.74-5.64a13.35,13.35,0,0,1-2.7-2.07A27.55,27.55,0,0,1,591,618.8c-1.77-2.42-4.32-4.24-5.8-6.84a.35.35,0,0,1-.06-.14c0-.19.26-.23.44-.22,4.46.46,8.69,2.08,13.11,2.75C599.64,614.49,601.06,614.17,601.7,615Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M600.84,616.46c.13.34.25.76,0,1l-.27-.18.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M599.92,620.07c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M605.6,626.5c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M603.62,625.23c.13.34.25.77,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M592.7,618.25c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M596.31,619.16c.14.34.26.76,0,1L596,620l.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M597.58,617.18c.14.33.26.76,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M602.91,622.45c.1.2.19.45,0,.59l-.17-.11.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M604.88,625.94c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M597.93,621.49c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M601,625.48c.13-.17.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M602,621.87c.13-.18.31-.38.5-.32v.21H602" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M594.33,617.89c.13.34.25.76,0,1l-.28-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M592.34,616.62c.14.34.25.76,0,1l-.27-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M591.64,613.84c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M593.6,617.32c.1.2.19.45,0,.59l-.18-.11.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M589.76,616.87c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M590.67,613.26c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M598,619.33c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M593,616.15c.13-.17.31-.37.5-.31l0,.2-.39,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M621.09,618.63a4.28,4.28,0,0,1-.6,1.21c-.72,1.12-1.39,2.26-2.07,3.41l-.94,1.59a44,44,0,0,0-3,5.67,5.09,5.09,0,0,0-.44,1.6c0,.56,0,1.3-.55,1.49a4.33,4.33,0,0,1-1.23-1.64,8.74,8.74,0,0,1-.54-2.64l-1-10.36a13.35,13.35,0,0,1,0-3.4,24,24,0,0,1,.81-3c.79-2.89.64-6,1.76-8.79a.29.29,0,0,1,.08-.13c.14-.12.34.05.44.21,2.4,3.78,3.76,8.1,6,12C620.21,616.7,621.34,617.62,621.09,618.63Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M621.09,618.63a4.28,4.28,0,0,1-.6,1.21c-.72,1.12-1.39,2.26-2.07,3.41l-.94,1.59a44,44,0,0,0-3,5.67,5.09,5.09,0,0,0-.44,1.6c0,.56,0,1.3-.55,1.49a4.33,4.33,0,0,1-1.23-1.64,8.74,8.74,0,0,1-.54-2.64l-1-10.36a13.35,13.35,0,0,1,0-3.4,24,24,0,0,1,.81-3c.79-2.89.64-6,1.76-8.79a.29.29,0,0,1,.08-.13c.14-.12.34.05.44.21,2.4,3.78,3.76,8.1,6,12C620.21,616.7,621.34,617.62,621.09,618.63Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M619.4,618.86c-.18.32-.44.67-.8.64l0-.32.7-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M616,620.39c-.18.31-.44.67-.8.63l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614.48,628.83c-.18.31-.44.67-.8.64l0-.32.71-.15" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614.24,626.48c-.18.32-.44.68-.8.64l0-.32.7-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M613,613.58c-.18.32-.44.68-.8.64l0-.32.7-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614.48,617c-.18.31-.44.67-.8.63l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M616.82,616.75c-.18.31-.44.67-.8.64l0-.32.7-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M616,624.2c-.1.2-.24.43-.44.4l0-.2.39-.08" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614.48,627.91c-.1.2-.24.42-.44.4l0-.21.39-.08" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M613.66,619.7c-.1.2-.24.43-.44.4l0-.2.4-.09" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M612.45,624.62c.22,0,.49,0,.56.19l-.17.12-.26-.31" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M615.85,623.09c.22,0,.49,0,.56.2l-.17.11-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614.24,614.64c-.18.31-.44.67-.8.64l0-.32.7-.15" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614,612.29c-.18.32-.44.68-.8.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M615.75,610c-.09.19-.23.42-.43.4l0-.21.39-.08" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614.24,613.72c-.1.2-.24.43-.44.4l0-.21.39-.08" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M612.21,610.43c.22,0,.49,0,.56.19l-.17.12-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M615.61,608.9c.23,0,.49,0,.56.2l-.17.11-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M615.38,618.4c.22,0,.49,0,.56.2l-.17.11-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614.79,612.54c.22,0,.49,0,.56.19l-.17.12-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M548,618.63a4.28,4.28,0,0,1-.6,1.21c-.71,1.12-1.39,2.26-2.07,3.41l-.94,1.59a45.22,45.22,0,0,0-3,5.67,5.37,5.37,0,0,0-.44,1.6c0,.56,0,1.3-.55,1.49a4.33,4.33,0,0,1-1.23-1.64,8.44,8.44,0,0,1-.53-2.64l-1-10.36a14.33,14.33,0,0,1,0-3.4,28.21,28.21,0,0,1,.81-3c.79-2.89.64-6,1.76-8.79a.29.29,0,0,1,.08-.13c.14-.12.34.05.44.21,2.41,3.78,3.76,8.1,6,12C547.14,616.7,548.27,617.62,548,618.63Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M546.34,618.86c-.18.32-.45.67-.81.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M542.94,620.39c-.19.31-.45.67-.81.63l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M541.41,628.83c-.18.31-.44.67-.8.64l0-.32.71-.15" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M541.18,626.48c-.18.32-.44.68-.81.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M539.89,613.58c-.18.32-.45.68-.81.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M541.41,617c-.18.31-.44.67-.8.63l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M543.76,616.75c-.18.31-.45.67-.81.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M542.92,624.2c-.09.2-.24.43-.44.4l0-.2.39-.08" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M541.41,627.91c-.1.2-.24.42-.44.4l0-.21.39-.08" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M540.59,619.7c-.1.2-.24.43-.44.4l0-.2.39-.09" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M539.38,624.62c.22,0,.49,0,.56.19l-.17.12-.26-.31" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M542.78,623.09c.22,0,.49,0,.56.2l-.17.11-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M541.18,614.64c-.18.31-.45.67-.81.64l0-.32.71-.15" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M540.94,612.29c-.18.32-.44.68-.8.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M542.69,610c-.1.19-.24.42-.44.4l0-.21.39-.08" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M541.17,613.72c-.09.2-.23.43-.43.4l0-.21.39-.08" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M539.15,610.43c.22,0,.48,0,.56.19l-.17.12-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M542.55,608.9c.22,0,.48,0,.56.2l-.17.11-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M542.31,618.4c.22,0,.49,0,.56.2l-.17.11-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M541.73,612.54c.22,0,.48,0,.56.19l-.17.12-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M624.27,624a4.31,4.31,0,0,1-1,.91c-1.06.79-2.1,1.62-3.14,2.44l-1.45,1.16a44.19,44.19,0,0,0-4.83,4.23,5,5,0,0,0-1,1.33c-.24.51-.48,1.21-1,1.2a4.44,4.44,0,0,1-.57-2,8.68,8.68,0,0,1,.45-2.66l2.75-10a13.45,13.45,0,0,1,1.18-3.19,25.32,25.32,0,0,1,1.81-2.48c1.77-2.41,2.74-5.39,4.78-7.58a.29.29,0,0,1,.12-.1c.17-.06.3.17.33.36.91,4.39.63,8.91,1.32,13.32C624.14,621.92,624.87,623.18,624.27,624Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M622.62,623.65c-.28.23-.65.47-1,.31l.08-.31.72.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M618.9,623.86c-.28.23-.65.47-1,.31l.08-.31.72.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614.46,631.2c-.28.23-.65.48-1,.31l.08-.31.71.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M615.08,628.93c-.28.23-.65.47-1,.31l.08-.31.72.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M618.48,616.42c-.29.23-.66.47-1,.31l.08-.31.71.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M618.69,620.14c-.28.23-.66.47-1,.31l.08-.31.71.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M621,620.76c-.28.23-.65.47-1,.31l.09-.32.71.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M617.52,627.42c-.16.15-.37.32-.55.22l0-.2.4.06" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614.79,630.34c-.16.16-.38.32-.55.22l0-.2.39.06" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M617,622.38c-.16.15-.37.31-.55.22l.05-.2.4.06" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614.07,626.54c.21.07.45.18.45.39l-.2,0-.13-.37" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M617.79,626.33c.21.07.45.18.45.38l-.2,0-.13-.37" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M619.3,617.86c-.28.23-.65.48-1,.31l.08-.31.71.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M619.92,615.59c-.28.23-.65.47-1,.31l.09-.31.71.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M622.37,614.08c-.17.15-.38.32-.56.22l.06-.2.39.06" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M619.63,617c-.16.16-.37.32-.55.22l0-.2.4.06" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M618.91,613.2c.21.07.45.18.45.39l-.2,0-.13-.38" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M622.63,613c.21.07.45.18.46.38l-.21,0-.13-.37" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M619,621.78c.21.07.45.18.45.38l-.2.05-.14-.37" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M620.57,616.1c.21.07.45.18.45.38l-.2,0-.13-.38" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M614.67,613.82a4.39,4.39,0,0,1,.57,1.22c.44,1.25.91,2.49,1.39,3.73l.67,1.73a46,46,0,0,0,2.58,5.88,5.63,5.63,0,0,0,1,1.34c.42.38,1,.81.83,1.35a4.31,4.31,0,0,1-2.05-.05,9,9,0,0,1-2.41-1.22l-8.74-5.64a13.63,13.63,0,0,1-2.7-2.07,29.64,29.64,0,0,1-1.82-2.47c-1.77-2.41-4.32-4.24-5.8-6.84a.24.24,0,0,1,0-.14c0-.18.25-.23.43-.21,4.46.45,8.69,2.07,13.11,2.74C612.61,613.31,614,613,614.67,613.82Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M614.67,613.82a4.39,4.39,0,0,1,.57,1.22c.44,1.25.91,2.49,1.39,3.73l.67,1.73a46,46,0,0,0,2.58,5.88,5.63,5.63,0,0,0,1,1.34c.42.38,1,.81.83,1.35a4.31,4.31,0,0,1-2.05-.05,9,9,0,0,1-2.41-1.22l-8.74-5.64a13.63,13.63,0,0,1-2.7-2.07,29.64,29.64,0,0,1-1.82-2.47c-1.77-2.41-4.32-4.24-5.8-6.84a.24.24,0,0,1,0-.14c0-.18.25-.23.43-.21,4.46.45,8.69,2.07,13.11,2.74C612.61,613.31,614,613,614.67,613.82Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M613.8,615.28c.14.34.26.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M612.89,618.9c.13.33.25.76,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M618.57,625.33c.13.33.25.76,0,1l-.27-.17.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M616.58,624.06c.14.33.26.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M605.66,617.07c.14.34.26.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M609.28,618c.13.34.25.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M610.55,616c.13.33.25.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M615.88,621.27c.09.2.18.45,0,.6l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M617.84,624.76c.1.2.19.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M610.9,620.31c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614,624.31c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M614.92,620.69c.13-.18.3-.38.5-.32l0,.21-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M607.29,616.71c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M605.3,615.44c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M604.6,612.66c.09.2.18.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M606.57,616.14c.09.2.18.45,0,.6l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M602.73,615.69c.12-.18.3-.38.5-.32l0,.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M603.64,612.08c.13-.18.31-.38.5-.32V612h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M610.94,618.15c.13-.18.31-.38.5-.32V618l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M606,615c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M598.17,603.21a4.39,4.39,0,0,1,.57,1.22c.44,1.25.91,2.5,1.39,3.74l.67,1.73a45.1,45.1,0,0,0,2.59,5.87,5.16,5.16,0,0,0,1,1.34c.42.38,1,.82.83,1.35a4.31,4.31,0,0,1-2.05-.05,8.5,8.5,0,0,1-2.4-1.22L592,611.56a14.39,14.39,0,0,1-2.7-2.08,26.1,26.1,0,0,1-1.81-2.47c-1.78-2.41-4.32-4.23-5.81-6.83a.38.38,0,0,1,0-.15c0-.18.25-.23.43-.21,4.46.46,8.69,2.08,13.11,2.74C596.11,602.7,597.53,602.38,598.17,603.21Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M597.3,604.68c.14.33.26.76,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M596.39,608.29c.13.34.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M602.07,614.72c.13.34.25.76,0,1l-.27-.18.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M600.08,613.45c.14.34.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M589.16,606.46c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M592.78,607.38c.13.33.25.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M594.05,605.39c.13.34.25.76,0,1l-.28-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M599.38,610.67c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M601.34,614.15c.1.2.19.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M594.4,609.71c.09.19.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M597.5,613.7c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M598.42,610.09c.13-.18.3-.38.5-.32l0,.2-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M590.79,606.11c.14.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M588.81,604.84c.13.33.25.76,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M588.1,602.05c.1.2.19.45,0,.59l-.17-.11.17-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M590.07,605.54c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M586.23,605.08c.13-.17.3-.37.5-.31l0,.2-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M587.14,601.47c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M594.45,607.55c.13-.18.3-.38.5-.32l0,.2-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M589.48,604.37c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M618.6,642.37H543.39a3.16,3.16,0,0,1-3.06-2.39L536,622.71a3.16,3.16,0,0,1,3.06-3.91h83.85a3.15,3.15,0,0,1,3.06,3.91L621.66,640A3.16,3.16,0,0,1,618.6,642.37Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <path
                        d="M618.6,642.37H543.39a3.16,3.16,0,0,1-3.06-2.39L536,622.71a3.16,3.16,0,0,1,3.06-3.91h83.85a3.15,3.15,0,0,1,3.06,3.91L621.66,640A3.16,3.16,0,0,1,618.6,642.37Z"
                        transform="translate(-102.06 -53.73)" opacity="0.25" />
                    <path
                        d="M867.2,494.29c8-.8,15.17-5.37,21.82-10q12.69-8.78,24.79-18.36c2.18-1.71,4.46-3.64,5.15-6.32.62-2.41-.18-4.95-1-7.31q-5.91-17.32-12.36-34.45a57.29,57.29,0,0,0-12.84-22q-11.6-13.65-23.6-26.95c-7.39-8.18-9.32-20.21-13.83-30.27a7.3,7.3,0,0,0-1.9-2.88,6.64,6.64,0,0,0-3.9-1A44.43,44.43,0,0,0,832,337.53c-3.87,1.45-7.91,3.93-8.83,8-1,4.38,2.08,8.54,5,12a45.92,45.92,0,0,0,6.69,7c3.43,2.71,7.56,4.39,11.13,6.92a56.65,56.65,0,0,1,8,7.35c3.58,3.75,7.21,7.55,9.65,12.13,2.21,4.16,3.35,8.79,4.47,13.36L874.38,430l3.44,14.06a2.44,2.44,0,0,1-1.34,3.18,52.84,52.84,0,0,0-11.29,11.83,14.85,14.85,0,0,0-2.62,5.39,17,17,0,0,0,.16,5.78C863.93,478.49,865.49,486.15,867.2,494.29Z"
                        transform="translate(-102.06 -53.73)" fill="#be6f72" />
                    <path
                        d="M772.85,450.3a4.72,4.72,0,0,0,1.68,4.28,38.26,38.26,0,0,0,8.44,6.54,4.23,4.23,0,0,1,1.6,1.29,3.73,3.73,0,0,1,.43,1.47c1.16,8.75-2.4,17.47-7.06,25a65.37,65.37,0,0,1-10.35,12.95,52.27,52.27,0,0,1-11.71,8.36c-7.16,3.75-15.35,5.82-23.39,5s-15.88-4.84-20.61-11.39c-5.54-7.67-6.32-17.71-6.45-27.17-.09-5.64,0-11.51,2.6-16.54a10.74,10.74,0,0,1,3.79-4.43c2.38-1.45,5.4-1.5,7.79-2.93a7.76,7.76,0,0,0,3.67-5.75c.1-1,.07-2,.76-2.7a3.25,3.25,0,0,1,1.78-.69l19.6-3.33c7.08-1.19,14.29-2.39,21.49-1.83,2.38.19,5.88-.05,6.58,2.71S772.89,447.56,772.85,450.3Z"
                        transform="translate(-102.06 -53.73)" fill="#be6f72" />
                    <path
                        d="M772.85,450.3a4.72,4.72,0,0,0,1.68,4.28,38.26,38.26,0,0,0,8.44,6.54,4.23,4.23,0,0,1,1.6,1.29,3.73,3.73,0,0,1,.43,1.47c1.16,8.75-2.4,17.47-7.06,25a65.37,65.37,0,0,1-10.35,12.95,52.27,52.27,0,0,1-11.71,8.36c-7.16,3.75-15.35,5.82-23.39,5s-15.88-4.84-20.61-11.39c-5.54-7.67-6.32-17.71-6.45-27.17-.09-5.64,0-11.51,2.6-16.54a10.74,10.74,0,0,1,3.79-4.43c2.38-1.45,5.4-1.5,7.79-2.93a7.76,7.76,0,0,0,3.67-5.75c.1-1,.07-2,.76-2.7a3.25,3.25,0,0,1,1.78-.69l19.6-3.33c7.08-1.19,14.29-2.39,21.49-1.83,2.38.19,5.88-.05,6.58,2.71S772.89,447.56,772.85,450.3Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path
                        d="M760.88,812.49c3,5.08,7.48,9.11,10.64,14.08,1.91,3,3.32,6.84,1.94,10.14-1.16,2.76-4,4.43-6.71,5.64A46.77,46.77,0,0,1,743.13,846a17.17,17.17,0,0,1-4.31-.92c-4.46-1.71-7.17-6.24-8.92-10.68a23.7,23.7,0,0,0-2.29-4.95c-2-2.79-5.18-4.32-8-6.18s-5.64-4.58-5.69-8a22.1,22.1,0,0,1,.78-4.39c.5-2.69.18-5.46.23-8.19a29.93,29.93,0,0,1,1.65-9.18,4.86,4.86,0,0,1,1.49-2.43,5,5,0,0,1,2.17-.77,59.75,59.75,0,0,1,28.39,1.73c1.82.57,5.3,1.2,6.64,2.56,1.13,1.14,1,2.61,1.2,4.15A37.66,37.66,0,0,0,760.88,812.49Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <path
                        d="M695.91,795.37c1.44,10.4,2.9,20.85,6.12,30.84.56,1.73,1.16,3.64.43,5.3a6.12,6.12,0,0,1-2,2.24c-7.11,5.56-17.11,5.79-25.9,3.77a59.74,59.74,0,0,1-14.52-5.4,4.48,4.48,0,0,1-1.38-1,4.58,4.58,0,0,1-.86-1.95,53.46,53.46,0,0,1,4.58-38.1,16.06,16.06,0,0,1,3.66-4.92c2.21-1.83,5.09-2.55,7.87-3.22,6.37-1.53,13-3.79,19.47-4.6C695.26,783.39,695.17,790,695.91,795.37Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <path
                        d="M735.23,671.64c-14.7.51-29.15,4.26-43.86,4.59-7,.15-14.31-.59-20-4.59-4.63-3.24-7.64-8.25-10.51-13.12-2.3-3.9-4.62-7.86-5.93-12.21-2.3-7.65-1.28-15.86,0-23.75,1-6.14,2.38-12.77,7.08-16.85,2.82-2.46,6.5-3.66,10.09-4.72,17-5,34.59-8.1,52.1-11.16,5.2-.92,10.42-1.83,15.69-2.24a82.27,82.27,0,0,1,37.82,6c5.37,2.24,10.66,5.2,14.14,9.86,4.09,5.51,5.16,12.81,4.35,19.63s-3.32,13.29-5.81,19.69l-8,20.69c-1.69,4.36-2.77,12.17-8.12,13.15-5.1.94-13-2.84-18.13-3.64A134.51,134.51,0,0,0,735.23,671.64Z"
                        transform="translate(-102.06 -53.73)" fill="#f86d70" />
                    <circle cx="643.93" cy="364.14" r="40.07" fill="#be6f72" />
                    <path
                        d="M743.08,502.35l17.39-19.82a59.18,59.18,0,0,1,4.94-5.2c2.46-2.19,5.36-4.07,6.89-7,2.39-4.57.72-10.15.5-15.2a2.64,2.64,0,0,1,1.24-2.47c1.15-.65,2,.12,2.92.56,2.23,1.06,5,.2,7.25,1.16,1.65.7,2.77,2.23,4.07,3.46s3.18,2.24,4.84,1.56c.86-.36,1.5-1.12,2.35-1.52,2.07-1,4.43.53,6.72.53,2,0,3.83-1.16,5.73-1.84a24.55,24.55,0,0,1,6.45-1L834,454.2c.38,14.55-2.63,29-6.13,43.12-3.56,14.38-7.19,28.95-14.38,41.91-3.14,5.65-6.95,11-8,17.68a16.11,16.11,0,0,0,.19,5.79,4.48,4.48,0,0,0,1,2.25c.93,6.76-.46,14.15-4.52,19.64-2.2,3-5,5.49-7,8.64s-3,7.31-1.14,10.54c-6.18,2-12.64-1.33-18.93-2.95-14-3.6-28.69,1.41-41.49,8.06-4.29,2.23-8.67,4.71-13.5,5-8.66.57-16.06-5.79-24.29-8.54-13.84-4.62-28.68,1.22-43,3.94-2,.39-4.32.68-6.1-.42s-2.58-3.45-2.8-5.6c-.83-8,3.52-15.49,5.8-23.2a46.84,46.84,0,0,0-3.4-34.16,30.8,30.8,0,0,1-3.22-19.35c.07-.4.13-.8.19-1.19L648.3,493a55.08,55.08,0,0,1,2.5-11.17c3-8.11,9.8-14.4,17.39-18.57s16-6.47,24.41-8.68a147.27,147.27,0,0,1,21.13-4.45c1-.11,2.22-.14,2.88.64a2.92,2.92,0,0,1,.54,1.74c.25,4-1.3,7.84-1.48,11.81-.24,5.66,2.32,11.07,5.38,15.84C726.92,489.26,733.81,496.72,743.08,502.35Z"
                        transform="translate(-102.06 -53.73)" fill="#0489c1" />
                    <path
                        d="M829.34,458.51c2.19-2.48,5.65-3.29,8.89-4l8.5-1.79a21.87,21.87,0,0,1,4.89-.65c1.21,0,2.4.24,3.6.22a18.35,18.35,0,0,0,5.36-1.15l15-4.83c-5,6.94-5.6,16-5.68,24.53a101.28,101.28,0,0,0,.38,11c.41,3.92,1.21,7.87.65,11.78-.64,4.53-3,9.44-.66,13.37,1.23,2.07,3.51,3.26,5.7,4.27a130.11,130.11,0,0,0-42.36,17.09c-3.09,1.94-6.15,4.05-9.65,5.09a34.57,34.57,0,0,1-6.94,1.07l-7.44.65c-1.28-17.73,4.21-35.16,9.63-52.09,1.42-4.41,2.83-8.83,4.56-13.14C825.3,466.1,826.57,461.65,829.34,458.51Z"
                        transform="translate(-102.06 -53.73)" fill="#0489c1" />
                    <path
                        d="M715.25,515.05a32.14,32.14,0,0,1-5.13.12,1.13,1.13,0,0,0-1.23,1l-3.28,24.55a9.86,9.86,0,0,1-2.09,4.86,10.62,10.62,0,0,0-2.39,8.1v41.69s-.21,5.56,4.07,5.56a61.26,61.26,0,0,0,15.39,0s3.42-.64,3.42-5.77v-41a10,10,0,0,0-2.11-8.17,10.24,10.24,0,0,1-2-4.83L716.46,516A1.13,1.13,0,0,0,715.25,515.05Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <rect x="600.25" y="500.67" width="20.74" height="35.07" rx="8.8" fill="#0489c1" />
                    <rect x="600.25" y="500.67" width="20.74" height="35.07" rx="8.8" opacity="0.25" />
                    <path
                        d="M639.23,576.28c-.89,4.81-1.37,9.85,0,14.53s5.08,9,9.89,9.83c3.29.6,6.66-.4,9.7-1.8s5.89-3.2,9-4.33c6.73-2.42,14.27-1.57,21.05.7a57.15,57.15,0,0,0,6.59,2.07,36.48,36.48,0,0,0,5.91.54c7.42.29,14.95.57,22.18-1.13a13,13,0,0,0,5.66-2.52,12.67,12.67,0,0,0,3.39-5.83c1.75-5.45,2-11.78-1.15-16.57-2.28-3.49-6.1-5.75-10.1-7a54,54,0,0,0-12.37-1.73,11,11,0,0,0-10.43,3.59l-5.09,4.54a12.59,12.59,0,0,1-3.36,2.4,11.85,11.85,0,0,1-3.35.71,87.25,87.25,0,0,1-11.31.45c-.38-2.29,1-4.55.88-6.86a7.39,7.39,0,0,0-3.57-5.64,17.54,17.54,0,0,0-6.52-2.23c-5.12-.94-10.51-1.2-15.45.44C643.13,563.06,640.6,568.88,639.23,576.28Z"
                        transform="translate(-102.06 -53.73)" fill="#be6f72" />
                    <path
                        d="M734.72,611.4c20.49-7.62,43.88-10.55,64-2,3.46,1.48,7.21,3.87,7.56,7.62.17,1.73-.45,3.43-.8,5.13-1.1,5.36.45,10.87.8,16.34s-1,11.8-5.86,14.38c-2.56,21.6-7.55,42.07-16.84,61.73a43.34,43.34,0,0,0-3.66,9.34c-.71,3.3-.56,6.72-.7,10.09-.43,10.27-3.57,20.21-6.68,30a37.68,37.68,0,0,1-2.38,6.19c-2.23,4.2-6,7.39-8.64,11.32S757.34,791,760,794.9c1.58,2.3-4,3.75-6.81,3.8a313.37,313.37,0,0,1-36.63-1.5,3.69,3.69,0,0,1-4-3.42c-1.2-4.25-2.38-8.81-1-13,.74-2.22,2.2-4.29,2.15-6.63,0-2-1.22-3.88-1.7-5.87-1.47-6.13,3.75-11.56,7.59-16.56,8-10.46,11.18-23.76,14.07-36.63q5.67-25.19,11.07-50.44c-3.1,2.44-2.76,6.5-5.74,9.08-3.52,3-9.42,1.12-12-2.7s-2.84-8.78-2.73-13.43C724.6,642.13,729.33,625.91,734.72,611.4Z"
                        transform="translate(-102.06 -53.73)" fill="#f86d70" />
                    <path
                        d="M707.54,617.07C702.6,604.93,691,595.38,678,594.26s-26.73,7.14-30.59,19.66a49.9,49.9,0,0,0-1.64,9.18c-3.47,31-3.47,62.85,4.24,93.12,1.58,6.24,3.5,12.44,4.06,18.84s-.38,13.19-4.06,18.47c-1,1.48-2.3,2.88-2.79,4.62-.57,2-.06,4.08.46,6.08l6.47,25.19a9.82,9.82,0,0,0,2,4.42c1.89,2,5,2.09,7.79,1.81A59.82,59.82,0,0,0,685,789.48c6-3.07,12.16-8.36,11.8-15.12-.09-1.69-.59-3.44,0-5a10.82,10.82,0,0,1,2.37-3c3.51-3.9,4.31-9.65,3.36-14.8s-3.45-9.88-5.91-14.5.54-10.67,1.33-15.7c2.74-17.42-2.9-35.7,2-52.64,3.6,3.13,9.26,5.27,12.93,2.23,3.27-2.72,2.88-7.76,2.2-12C712.8,644.94,712.88,630.21,707.54,617.07Z"
                        transform="translate(-102.06 -53.73)" fill="#f86d70" />
                    <path
                        d="M710.92,421.87c1.31,1.32,1.71,3.8,3.29,4.6s3.63-.89,4.57-2.83c1.56-3.2,1.85-7,2-10.72s.29-7.49,1.55-10.87,4-6.3,7.12-6.2c2.06.07,3.91,1.39,5.72,2.55a51,51,0,0,0,17.44,7.14c1.78.35,3.67.59,5.31-.29a4.45,4.45,0,0,0,2-5.19c4.29-1,9,2.71,9.8,7.81.25,1.59.17,3.24.38,4.85.65,5,4.49,9.2,8.77,9.56a4,4,0,0,0,2.39-.44c1.15-.7,1.77-2.17,2.32-3.55,2.3-5.75,4.63-11.64,5.17-18a66.94,66.94,0,0,0-.25-10.87c-.35-4.44-.75-9.06-2.71-12.86-3-5.86-9-8.42-14.54-10.42s-11.33-3.9-17.05-5.61a75.33,75.33,0,0,0-16.53-3.46,44,44,0,0,0-27.61,7.79,29.58,29.58,0,0,0-8.73,8.71,20,20,0,0,0-3,12.79c.46,3.48,2,6.62,2.79,10,1.28,5.51.51,11.36-.09,17a16.35,16.35,0,0,0,.26,6.8c.73,2.23,2.5,3.91,4.36,2.82C707.44,422.07,708.88,419.83,710.92,421.87Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <path
                        d="M642.41,533.7a65.6,65.6,0,0,0-1.75,9.82c-.17,2.25-.1,4.5-.29,6.75-.71,8.37-4.88,16.33-4.52,24.73a15,15,0,0,1,8.24-1.21c-.74-2.58,1.13-5.35,3.56-6.49s5.24-1.07,7.92-.88c7.5.53,15,1.76,21.85,4.94a1.16,1.16,0,0,0,1,.15c.43-.21.42-.81.42-1.28-.06-4.08,4.22-6.91,5.24-10.86.73-2.85-.34-5.81-1.12-8.65-3-10.68-1.84-22-2.72-33.06-.5-6.26-2-13-6.84-17a15,15,0,0,0-15.75-1.48C646.08,504.91,644.93,522.76,642.41,533.7Z"
                        transform="translate(-102.06 -53.73)" fill="#0489c1" />
                    <path
                        d="M272.4,494.29c-8-.8-15.17-5.37-21.82-10q-12.69-8.78-24.8-18.36c-2.17-1.71-4.45-3.64-5.14-6.32-.62-2.41.18-4.95,1-7.31Q227.53,435,234,417.87a76.27,76.27,0,0,1,5.67-12.56,75.2,75.2,0,0,1,7.17-9.44q11.6-13.65,23.6-26.95c7.39-8.18,9.31-20.21,13.83-30.27a7.09,7.09,0,0,1,1.9-2.88,6.64,6.64,0,0,1,3.9-1,44.43,44.43,0,0,1,17.53,2.81c3.87,1.45,7.91,3.93,8.83,8,1,4.38-2.08,8.54-5,12a46.41,46.41,0,0,1-6.69,7c-3.44,2.71-7.56,4.39-11.13,6.92a57.29,57.29,0,0,0-8,7.35c-3.58,3.75-7.2,7.55-9.64,12.13-2.21,4.16-3.35,8.79-4.47,13.36L265.22,430l-3.44,14.06a2.45,2.45,0,0,0,1.33,3.18,52.66,52.66,0,0,1,11.3,11.83,14.85,14.85,0,0,1,2.62,5.39,17,17,0,0,1-.16,5.78C275.67,478.49,274.11,486.15,272.4,494.29Z"
                        transform="translate(-102.06 -53.73)" fill="#fbbebe" />
                    <path
                        d="M366.75,450.3a6.2,6.2,0,0,1-.28,2.35,5.93,5.93,0,0,1-1.41,1.93,38.44,38.44,0,0,1-8.43,6.54,4.27,4.27,0,0,0-1.61,1.29,3.72,3.72,0,0,0-.42,1.47c-1.16,8.75,2.4,17.47,7.06,25A65.32,65.32,0,0,0,372,501.8a52.33,52.33,0,0,0,11.72,8.36c7.16,3.75,15.35,5.82,23.39,5s15.88-4.84,20.61-11.39c5.54-7.67,6.32-17.71,6.45-27.17.09-5.64,0-11.51-2.6-16.54a10.74,10.74,0,0,0-3.79-4.43c-2.38-1.45-5.4-1.5-7.79-2.93a7.76,7.76,0,0,1-3.67-5.75c-.1-1-.07-2-.76-2.7a3.25,3.25,0,0,0-1.78-.69l-19.6-3.33c-7.08-1.19-14.29-2.39-21.49-1.83-2.39.19-5.89-.05-6.58,2.71S366.71,447.56,366.75,450.3Z"
                        transform="translate(-102.06 -53.73)" fill="#fbbebe" />
                    <path
                        d="M366.75,450.3a6.2,6.2,0,0,1-.28,2.35,5.93,5.93,0,0,1-1.41,1.93,38.44,38.44,0,0,1-8.43,6.54,4.27,4.27,0,0,0-1.61,1.29,3.72,3.72,0,0,0-.42,1.47c-1.16,8.75,2.4,17.47,7.06,25A65.32,65.32,0,0,0,372,501.8a52.33,52.33,0,0,0,11.72,8.36c7.16,3.75,15.35,5.82,23.39,5s15.88-4.84,20.61-11.39c5.54-7.67,6.32-17.71,6.45-27.17.09-5.64,0-11.51-2.6-16.54a10.74,10.74,0,0,0-3.79-4.43c-2.38-1.45-5.4-1.5-7.79-2.93a7.76,7.76,0,0,1-3.67-5.75c-.1-1-.07-2-.76-2.7a3.25,3.25,0,0,0-1.78-.69l-19.6-3.33c-7.08-1.19-14.29-2.39-21.49-1.83-2.39.19-5.89-.05-6.58,2.71S366.71,447.56,366.75,450.3Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path
                        d="M378.72,812.49c-3,5.08-7.48,9.11-10.64,14.08-1.92,3-3.33,6.84-1.94,10.14,1.16,2.76,4,4.43,6.71,5.64A46.75,46.75,0,0,0,396.46,846a17.16,17.16,0,0,0,4.32-.92c4.46-1.71,7.17-6.24,8.92-10.68a23.7,23.7,0,0,1,2.29-4.95c1.95-2.79,5.18-4.32,8-6.18s5.64-4.58,5.69-8a22.1,22.1,0,0,0-.78-4.39c-.5-2.69-.18-5.46-.24-8.19a29.62,29.62,0,0,0-1.64-9.18,4.86,4.86,0,0,0-1.49-2.43,5,5,0,0,0-2.17-.77A59.75,59.75,0,0,0,391,792.08c-1.82.57-5.3,1.2-6.65,2.56-1.12,1.14-1,2.61-1.19,4.15A37.66,37.66,0,0,1,378.72,812.49Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <path
                        d="M443.68,795.37c-1.44,10.4-2.89,20.85-6.11,30.84-.56,1.73-1.16,3.64-.43,5.3a6.12,6.12,0,0,0,2,2.24c7.11,5.56,17.11,5.79,25.9,3.77a59.74,59.74,0,0,0,14.52-5.4,4.48,4.48,0,0,0,1.38-1,4.58,4.58,0,0,0,.86-1.95,53.46,53.46,0,0,0-4.58-38.1,15.93,15.93,0,0,0-3.67-4.92c-2.2-1.83-5.08-2.55-7.86-3.22-6.37-1.53-13-3.79-19.48-4.6C444.34,783.39,444.43,790,443.68,795.37Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <path
                        d="M404.37,671.64c14.7.51,29.15,4.26,43.86,4.59,7,.15,14.3-.59,20-4.59,4.63-3.24,7.64-8.25,10.5-13.12,2.31-3.9,4.63-7.86,5.94-12.21,2.3-7.65,1.28-15.86,0-23.75-1-6.14-2.38-12.77-7.08-16.85-2.83-2.46-6.5-3.66-10.09-4.72-17-5-34.59-8.1-52.1-11.16-5.2-.92-10.42-1.83-15.69-2.24a82.27,82.27,0,0,0-37.82,6c-5.37,2.24-10.66,5.2-14.14,9.86-4.1,5.51-5.16,12.81-4.35,19.63s3.32,13.29,5.81,19.69l8,20.69c1.69,4.36,2.77,12.17,8.11,13.15,5.11.94,13-2.84,18.14-3.64A134.51,134.51,0,0,1,404.37,671.64Z"
                        transform="translate(-102.06 -53.73)" fill="#e3e8f4" />
                    <circle cx="291.56" cy="364.14" r="40.07" fill="#fbbebe" />
                    <path
                        d="M396.52,502.35l-17.39-19.82a59.18,59.18,0,0,0-4.94-5.2c-2.46-2.19-5.36-4.07-6.89-7-2.39-4.57-.73-10.15-.5-15.2a2.64,2.64,0,0,0-1.24-2.47c-1.15-.65-2,.12-2.93.56-2.22,1.06-5,.2-7.24,1.16-1.65.7-2.77,2.23-4.07,3.46s-3.19,2.24-4.84,1.56c-.87-.36-1.51-1.12-2.35-1.52-2.07-1-4.44.53-6.72.53-2,0-3.83-1.16-5.74-1.84a24.48,24.48,0,0,0-6.44-1l-19.68-1.35c-.37,14.55,2.64,29,6.14,43.12,3.56,14.38,7.19,28.95,14.38,41.91,3.14,5.65,6.95,11,8,17.68a16.34,16.34,0,0,1-.19,5.79,4.48,4.48,0,0,1-1,2.25c-.94,6.76.46,14.15,4.51,19.64,2.21,3,5,5.49,7,8.64s3,7.31,1.14,10.54c6.18,2,12.64-1.33,18.93-2.95,14-3.6,28.69,1.41,41.48,8.06,4.3,2.23,8.68,4.71,13.51,5,8.66.57,16.06-5.79,24.29-8.54,13.84-4.62,28.67,1.22,43,3.94,2.05.39,4.32.68,6.1-.42s2.58-3.45,2.8-5.6c.83-8-3.52-15.49-5.8-23.2a46.79,46.79,0,0,1,3.4-34.16,30.86,30.86,0,0,0,3.22-19.35c-.07-.4-.13-.8-.19-1.19L491.3,493a55.76,55.76,0,0,0-2.5-11.17c-3.05-8.11-9.8-14.4-17.39-18.57s-16-6.47-24.41-8.68a147.27,147.27,0,0,0-21.13-4.45c-1-.11-2.22-.14-2.88.64a2.92,2.92,0,0,0-.54,1.74c-.25,4,1.3,7.84,1.47,11.81.25,5.66-2.31,11.07-5.38,15.84C412.68,489.26,405.79,496.72,396.52,502.35Z"
                        transform="translate(-102.06 -53.73)" fill="#0489c1" />
                    <path
                        d="M310.26,458.51c-2.19-2.48-5.66-3.29-8.89-4l-8.5-1.79a22,22,0,0,0-4.9-.65c-1.2,0-2.39.24-3.59.22a18.35,18.35,0,0,1-5.36-1.15l-15-4.83c5,6.94,5.6,16,5.68,24.53a98.82,98.82,0,0,1-.39,11c-.4,3.92-1.2,7.87-.64,11.78.64,4.53,3,9.44.66,13.37-1.24,2.07-3.51,3.26-5.7,4.27A130.11,130.11,0,0,1,306,528.4c3.09,1.94,6.15,4.05,9.65,5.09a34.57,34.57,0,0,0,6.94,1.07l7.44.65c1.28-17.73-4.21-35.16-9.63-52.09-1.42-4.41-2.83-8.83-4.56-13.14C314.3,466.1,313,461.65,310.26,458.51Z"
                        transform="translate(-102.06 -53.73)" fill="#0489c1" />
                    <path
                        d="M400,564.32a4.39,4.39,0,0,0-.57,1.22c-.44,1.25-.92,2.49-1.39,3.74l-.67,1.73a45.1,45.1,0,0,1-2.59,5.87,5.16,5.16,0,0,1-1,1.34c-.42.38-1,.82-.84,1.35a4.35,4.35,0,0,0,2.06-.05,8.63,8.63,0,0,0,2.4-1.22l8.75-5.63a14,14,0,0,0,2.69-2.08,24.55,24.55,0,0,0,1.82-2.47c1.78-2.41,4.32-4.23,5.81-6.83a.44.44,0,0,0,.05-.15c0-.18-.25-.23-.44-.21-4.45.45-8.68,2.07-13.1,2.74C402.07,563.81,400.65,563.49,400,564.32Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M400.88,565.78c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M401.79,569.4c-.14.33-.26.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M396.11,575.83c-.13.34-.25.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M398.1,574.56c-.14.34-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M409,567.57c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M405.4,568.49c-.13.33-.25.76,0,1l.27-.17-.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M404.13,566.5c-.13.34-.25.76,0,1l.27-.17-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M398.8,571.78c-.09.2-.18.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M396.83,575.26c-.09.2-.18.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M403.78,570.81c-.09.2-.18.46,0,.6l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M400.67,574.81c-.12-.18-.3-.38-.5-.32l0,.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M399.76,571.2c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M407.39,567.21c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M409.37,565.94c-.13.34-.25.77,0,1l.27-.17-.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M410.08,563.16c-.1.2-.19.45,0,.59l.17-.11-.17-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M408.11,566.65c-.1.2-.19.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M412,566.19c-.13-.17-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M411,562.58c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M403.73,568.65c-.13-.17-.31-.37-.5-.31l0,.2.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M408.7,565.48c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M403.55,566.68a3.89,3.89,0,0,0-.57,1.22c-.44,1.25-.92,2.49-1.4,3.73l-.66,1.73a46,46,0,0,1-2.59,5.88,5.37,5.37,0,0,1-1,1.34c-.42.38-1,.81-.83,1.35a4.31,4.31,0,0,0,2.05,0,9,9,0,0,0,2.41-1.22l8.74-5.64a13.35,13.35,0,0,0,2.7-2.07,27.55,27.55,0,0,0,1.82-2.47c1.77-2.41,4.32-4.24,5.8-6.84a.35.35,0,0,0,.06-.14c0-.18-.26-.23-.44-.21-4.46.45-8.69,2.07-13.11,2.74C405.61,566.17,404.19,565.85,403.55,566.68Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M404.41,568.14c-.13.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M405.32,571.75c-.13.34-.25.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M399.65,578.19c-.14.33-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M401.63,576.92c-.13.33-.25.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M412.55,569.93c-.13.34-.25.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M408.94,570.84c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M407.67,568.86c-.14.33-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M402.34,574.13c-.1.2-.19.45,0,.6l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M400.37,577.62c-.1.2-.19.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M407.32,573.17c-.1.2-.19.45,0,.59l.17-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M404.21,577.17c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M403.3,573.55c-.13-.18-.31-.38-.5-.32v.21l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M410.92,569.57c-.13.34-.25.77,0,1l.27-.17-.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M412.91,568.3c-.14.34-.26.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M413.61,565.52c-.09.2-.18.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M411.65,569c-.1.2-.19.45,0,.6l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M415.49,568.55c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M414.58,564.94c-.13-.18-.31-.38-.51-.32l0,.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M407.27,571c-.13-.18-.31-.38-.5-.32v.21l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M412.23,567.84c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M380,563.14a4,4,0,0,0-.57,1.22c-.44,1.26-.92,2.5-1.4,3.74l-.66,1.73a45.87,45.87,0,0,1-2.59,5.87,5.2,5.2,0,0,1-1,1.34c-.42.38-1,.82-.83,1.35a4.31,4.31,0,0,0,2.05,0,8.69,8.69,0,0,0,2.41-1.22l8.74-5.63a13.4,13.4,0,0,0,2.7-2.08,26.19,26.19,0,0,0,1.82-2.47c1.77-2.41,4.32-4.23,5.8-6.83a.42.42,0,0,0,.06-.14c0-.19-.26-.24-.44-.22-4.46.46-8.69,2.08-13.11,2.74C382,562.63,380.62,562.32,380,563.14Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M380.84,564.61c-.13.33-.25.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M381.75,568.22c-.13.34-.25.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M376.08,574.65c-.14.34-.26.76,0,1l.28-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M378.06,573.38c-.13.34-.25.76,0,1l.27-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M389,566.39c-.13.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M385.37,567.31c-.14.33-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M384.1,565.32c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M378.77,570.6c-.1.2-.19.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M376.8,574.08c-.1.2-.19.45,0,.59l.17-.11-.17-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M383.75,569.64c-.1.2-.19.45,0,.59l.17-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M380.64,573.63c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M379.73,570c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M387.35,566c-.13.33-.25.76,0,1l.27-.17-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M389.34,564.77c-.14.33-.26.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M390,562c-.09.2-.18.45,0,.6l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M388.08,565.47c-.1.2-.19.45-.05.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M391.92,565c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M391,561.4c-.13-.18-.31-.38-.51-.32l0,.21.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M383.7,567.48c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M388.66,564.3c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M397.65,558.43a4.39,4.39,0,0,0-.57,1.22c-.43,1.25-.91,2.49-1.39,3.73l-.67,1.73a46,46,0,0,1-2.58,5.88,5.37,5.37,0,0,1-1,1.34c-.42.38-1,.81-.83,1.35a4.31,4.31,0,0,0,2.05,0,9,9,0,0,0,2.41-1.22l8.74-5.64a13.63,13.63,0,0,0,2.7-2.07,29.64,29.64,0,0,0,1.82-2.47c1.77-2.41,4.32-4.24,5.8-6.84a.24.24,0,0,0,.05-.14c0-.18-.25-.23-.43-.21-4.46.45-8.69,2.07-13.11,2.74C399.71,557.92,398.29,557.6,397.65,558.43Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M398.52,559.89c-.14.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M399.43,563.51c-.13.33-.25.76,0,1l.27-.17-.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M393.75,569.94c-.13.33-.25.76,0,1l.27-.17-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M395.74,568.67c-.14.33-.26.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M406.66,561.68c-.14.34-.26.76,0,1l.27-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M403.05,562.59c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M401.77,560.61c-.13.33-.25.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M396.44,565.88c-.09.2-.18.45,0,.6l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M394.48,569.37c-.1.2-.19.45-.05.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M401.43,564.92c-.1.2-.19.45-.05.59l.18-.11-.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M398.32,568.92c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M397.41,565.3c-.13-.18-.31-.38-.51-.32l0,.21.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M405,561.32c-.13.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M407,560.05c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M407.72,557.27c-.09.2-.18.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M405.75,560.75c-.09.2-.18.45,0,.6l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M409.6,560.3c-.13-.18-.31-.38-.51-.32l0,.21.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M408.68,556.69c-.13-.18-.31-.38-.5-.32l0,.21h.39" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M401.38,562.76c-.13-.18-.31-.38-.5-.32v.21l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M406.34,559.59c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M394.12,556.07a4.13,4.13,0,0,0-.57,1.22c-.44,1.25-.92,2.5-1.4,3.74l-.66,1.73a45.1,45.1,0,0,1-2.59,5.87,5,5,0,0,1-1,1.34c-.41.38-1,.82-.83,1.35a4.3,4.3,0,0,0,2.05-.05,8.55,8.55,0,0,0,2.41-1.22l8.74-5.63a13.77,13.77,0,0,0,2.7-2.08,26.19,26.19,0,0,0,1.82-2.47c1.78-2.41,4.32-4.23,5.81-6.83a.38.38,0,0,0,.05-.15c0-.18-.25-.23-.44-.21-4.46.46-8.69,2.08-13.11,2.74C396.18,555.56,394.76,555.24,394.12,556.07Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M394.12,556.07a4.13,4.13,0,0,0-.57,1.22c-.44,1.25-.92,2.5-1.4,3.74l-.66,1.73a45.1,45.1,0,0,1-2.59,5.87,5,5,0,0,1-1,1.34c-.41.38-1,.82-.83,1.35a4.3,4.3,0,0,0,2.05-.05,8.55,8.55,0,0,0,2.41-1.22l8.74-5.63a13.77,13.77,0,0,0,2.7-2.08,26.19,26.19,0,0,0,1.82-2.47c1.78-2.41,4.32-4.23,5.81-6.83a.38.38,0,0,0,.05-.15c0-.18-.25-.23-.44-.21-4.46.46-8.69,2.08-13.11,2.74C396.18,555.56,394.76,555.24,394.12,556.07Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M395,557.54c-.13.33-.25.76,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M395.9,561.15c-.14.33-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M390.22,567.58c-.14.34-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M392.2,566.31c-.13.34-.25.76,0,1l.27-.17-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M403.12,559.32c-.13.34-.25.77,0,1l.27-.17-.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M399.51,560.24c-.13.33-.25.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M398.24,558.25c-.14.34-.25.76,0,1l.27-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M392.91,563.53c-.1.2-.19.45,0,.59L393,564l-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M390.94,567c-.09.2-.19.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M397.89,562.57c-.1.19-.19.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M394.78,566.56c-.13-.18-.31-.38-.5-.32l0,.21h.39" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M393.87,563c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M401.5,559c-.14.33-.26.76,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M403.48,557.7c-.13.33-.25.76,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M404.19,554.91c-.1.2-.19.45-.05.59l.18-.11-.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M402.22,558.4c-.1.2-.19.45,0,.59l.17-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M406.06,557.94c-.13-.17-.31-.37-.5-.31v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M405.15,554.33c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M397.84,560.41c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M402.8,557.23c-.13-.18-.3-.38-.5-.32l0,.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M395.3,539.57a4,4,0,0,0-.57,1.22c-.44,1.26-.92,2.5-1.4,3.74l-.66,1.73a45.87,45.87,0,0,1-2.59,5.87,5.2,5.2,0,0,1-1,1.34c-.42.38-1,.82-.83,1.35a4.3,4.3,0,0,0,2.05-.05,8.69,8.69,0,0,0,2.41-1.22l8.74-5.63a13.4,13.4,0,0,0,2.7-2.08,26.19,26.19,0,0,0,1.82-2.47c1.77-2.41,4.32-4.23,5.8-6.83a.42.42,0,0,0,.06-.14c0-.19-.26-.24-.44-.22-4.46.46-8.69,2.08-13.11,2.74C397.36,539.06,395.94,538.75,395.3,539.57Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M395.3,539.57a4,4,0,0,0-.57,1.22c-.44,1.26-.92,2.5-1.4,3.74l-.66,1.73a45.87,45.87,0,0,1-2.59,5.87,5.2,5.2,0,0,1-1,1.34c-.42.38-1,.82-.83,1.35a4.3,4.3,0,0,0,2.05-.05,8.69,8.69,0,0,0,2.41-1.22l8.74-5.63a13.4,13.4,0,0,0,2.7-2.08,26.19,26.19,0,0,0,1.82-2.47c1.77-2.41,4.32-4.23,5.8-6.83a.42.42,0,0,0,.06-.14c0-.19-.26-.24-.44-.22-4.46.46-8.69,2.08-13.11,2.74C397.36,539.06,395.94,538.75,395.3,539.57Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M396.16,541c-.13.33-.25.76,0,1l.27-.17-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M397.07,544.65c-.13.34-.25.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M391.4,551.08c-.14.34-.26.76,0,1l.28-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M393.38,549.81c-.13.34-.25.76,0,1l.27-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M404.3,542.82c-.13.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M400.69,543.74c-.14.33-.26.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M399.42,541.75c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M394.09,547c-.1.2-.19.45,0,.59l.17-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M392.12,550.51c-.1.2-.19.45,0,.59l.17-.11-.17-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M399.07,546.07c-.1.2-.19.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M396,550.06c-.13-.18-.31-.38-.5-.32V550h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M395.05,546.45c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M402.67,542.47c-.13.33-.25.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M404.66,541.2c-.14.33-.26.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M405.36,538.41c-.09.2-.18.45,0,.6l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M403.4,541.9c-.1.2-.19.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M407.24,541.45c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M406.33,537.83c-.13-.18-.31-.38-.5-.32v.21l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M399,543.91c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M404,540.73c-.13-.18-.31-.38-.5-.32l0,.21h.39" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M387.05,566.68a4.13,4.13,0,0,0-.57,1.22c-.44,1.25-.92,2.49-1.4,3.73l-.66,1.73a46,46,0,0,1-2.59,5.88,5.37,5.37,0,0,1-1,1.34c-.41.38-1,.81-.83,1.35a4.3,4.3,0,0,0,2.05,0,8.82,8.82,0,0,0,2.41-1.22l8.74-5.64a13.35,13.35,0,0,0,2.7-2.07,27.55,27.55,0,0,0,1.82-2.47c1.77-2.41,4.32-4.24,5.8-6.84a.35.35,0,0,0,.06-.14c0-.18-.25-.23-.44-.21-4.46.45-8.69,2.07-13.11,2.74C389.11,566.17,387.69,565.85,387.05,566.68Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M387.91,568.14c-.13.34-.25.77,0,1l.27-.17-.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M388.83,571.75c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M383.15,578.19c-.14.33-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M385.13,576.92c-.13.33-.25.76,0,1l.27-.17-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M396.05,569.93c-.13.34-.25.76,0,1l.27-.17-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M392.44,570.84c-.14.34-.26.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M391.17,568.86c-.14.33-.26.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M385.84,574.13c-.1.2-.19.45,0,.6l.17-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M383.87,577.62c-.1.2-.19.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M390.82,573.17c-.1.2-.19.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M387.71,577.17c-.13-.18-.31-.38-.5-.32v.2l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M386.8,573.55c-.13-.18-.31-.38-.5-.32v.21l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M394.42,569.57c-.13.34-.25.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M396.41,568.3c-.14.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M397.12,565.52c-.1.2-.19.45-.05.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M395.15,569c-.1.2-.19.45,0,.6l.17-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M399,568.55c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M398.08,564.94c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M390.77,571c-.13-.18-.31-.38-.5-.32v.21l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M395.73,567.84c-.13-.18-.31-.38-.5-.32l0,.2.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M407.08,554.89a4.53,4.53,0,0,0-.57,1.22c-.44,1.26-.91,2.5-1.39,3.74l-.67,1.73a44.51,44.51,0,0,1-2.59,5.87,5,5,0,0,1-1,1.34c-.42.38-1,.82-.83,1.36a4.44,4.44,0,0,0,2.05-.06,8.63,8.63,0,0,0,2.4-1.22l8.75-5.63a14,14,0,0,0,2.7-2.08,26.1,26.1,0,0,0,1.81-2.47c1.78-2.41,4.32-4.23,5.81-6.83a.39.39,0,0,0,.05-.14c0-.19-.25-.24-.43-.22-4.46.46-8.69,2.08-13.11,2.74C409.14,554.39,407.72,554.07,407.08,554.89Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M407.08,554.89a4.53,4.53,0,0,0-.57,1.22c-.44,1.26-.91,2.5-1.39,3.74l-.67,1.73a44.51,44.51,0,0,1-2.59,5.87,5,5,0,0,1-1,1.34c-.42.38-1,.82-.83,1.36a4.44,4.44,0,0,0,2.05-.06,8.63,8.63,0,0,0,2.4-1.22l8.75-5.63a14,14,0,0,0,2.7-2.08,26.1,26.1,0,0,0,1.81-2.47c1.78-2.41,4.32-4.23,5.81-6.83a.39.39,0,0,0,.05-.14c0-.19-.25-.24-.43-.22-4.46.46-8.69,2.08-13.11,2.74C409.14,554.39,407.72,554.07,407.08,554.89Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M408,556.36c-.14.33-.26.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M408.86,560c-.13.34-.25.76,0,1l.27-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M403.18,566.4c-.13.34-.25.77,0,1l.27-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M405.17,565.13c-.14.34-.26.76,0,1l.28-.18-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M416.09,558.14c-.14.34-.26.77,0,1l.28-.17-.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M412.47,559.06c-.13.33-.25.76,0,1l.27-.17-.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M411.2,557.07c-.13.34-.25.77,0,1l.27-.17-.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M405.87,562.35c-.09.2-.18.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M403.9,565.83c-.09.2-.18.45,0,.59l.18-.11-.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M410.85,561.39c-.09.2-.18.45,0,.59l.18-.11-.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M407.75,565.38c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M406.83,561.77c-.13-.18-.3-.38-.5-.32l0,.2.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M414.46,557.79c-.14.33-.26.76,0,1l.27-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M416.44,556.52c-.13.33-.25.76,0,1l.28-.17-.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M417.15,553.73c-.1.2-.19.45,0,.6l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M415.18,557.22c-.09.2-.18.45,0,.59l.17-.11-.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M419,556.77c-.13-.18-.3-.38-.5-.32l0,.2.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M418.11,553.15c-.13-.18-.31-.38-.5-.32V553l.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M410.8,559.23c-.13-.18-.3-.38-.5-.32l0,.2.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M415.77,556.05c-.13-.18-.31-.38-.5-.32v.21h.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M422.57,564.32a4.39,4.39,0,0,1,.57,1.22c.44,1.25.92,2.49,1.39,3.74l.67,1.73a45.1,45.1,0,0,0,2.59,5.87,5.16,5.16,0,0,0,1,1.34c.42.38,1,.82.84,1.35a4.35,4.35,0,0,1-2.06-.05,8.63,8.63,0,0,1-2.4-1.22l-8.74-5.63a13.77,13.77,0,0,1-2.7-2.08,24.55,24.55,0,0,1-1.82-2.47c-1.78-2.41-4.32-4.23-5.81-6.83a.44.44,0,0,1-.05-.15c0-.18.25-.23.44-.21,4.46.45,8.68,2.07,13.11,2.74C420.51,563.81,421.93,563.49,422.57,564.32Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M422.57,564.32a4.39,4.39,0,0,1,.57,1.22c.44,1.25.92,2.49,1.39,3.74l.67,1.73a45.1,45.1,0,0,0,2.59,5.87,5.16,5.16,0,0,0,1,1.34c.42.38,1,.82.84,1.35a4.35,4.35,0,0,1-2.06-.05,8.63,8.63,0,0,1-2.4-1.22l-8.74-5.63a13.77,13.77,0,0,1-2.7-2.08,24.55,24.55,0,0,1-1.82-2.47c-1.78-2.41-4.32-4.23-5.81-6.83a.44.44,0,0,1-.05-.15c0-.18.25-.23.44-.21,4.46.45,8.68,2.07,13.11,2.74C420.51,563.81,421.93,563.49,422.57,564.32Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M421.71,565.78c.13.34.25.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M420.79,569.4c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M426.47,575.83c.14.34.26.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M424.49,574.56c.13.34.25.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M413.57,567.57c.13.34.25.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M417.18,568.49c.13.33.25.76,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M418.45,566.5c.13.34.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M423.78,571.78c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M425.75,575.26c.09.2.18.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M418.8,570.81c.09.2.18.46,0,.6l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M421.91,574.81c.13-.18.3-.38.5-.32l0,.21H422" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M422.82,571.2c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M415.19,567.21c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M413.21,565.94c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M412.5,563.16c.1.2.19.45,0,.59l-.17-.11.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M414.47,566.65c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M410.63,566.19c.13-.17.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M411.54,562.58c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M418.85,568.65c.13-.17.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M413.88,565.48c.13-.18.31-.38.51-.32l0,.21H414" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M419,566.68a4.15,4.15,0,0,1,.58,1.22c.43,1.25.91,2.49,1.39,3.73l.67,1.73a44.59,44.59,0,0,0,2.58,5.88,5.37,5.37,0,0,0,1,1.34c.42.38,1,.81.83,1.35a4.31,4.31,0,0,1-2.05,0,9,9,0,0,1-2.41-1.22L412.86,575a13.63,13.63,0,0,1-2.7-2.07,29.64,29.64,0,0,1-1.82-2.47c-1.77-2.41-4.32-4.24-5.8-6.84a.24.24,0,0,1-.05-.14c0-.18.25-.23.43-.21,4.46.45,8.69,2.07,13.11,2.74C417,566.17,418.4,565.85,419,566.68Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M419,566.68a4.15,4.15,0,0,1,.58,1.22c.43,1.25.91,2.49,1.39,3.73l.67,1.73a44.59,44.59,0,0,0,2.58,5.88,5.37,5.37,0,0,0,1,1.34c.42.38,1,.81.83,1.35a4.31,4.31,0,0,1-2.05,0,9,9,0,0,1-2.41-1.22L412.86,575a13.63,13.63,0,0,1-2.7-2.07,29.64,29.64,0,0,1-1.82-2.47c-1.77-2.41-4.32-4.24-5.8-6.84a.24.24,0,0,1-.05-.14c0-.18.25-.23.43-.21,4.46.45,8.69,2.07,13.11,2.74C417,566.17,418.4,565.85,419,566.68Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M418.17,568.14c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M417.26,571.75c.13.34.25.77,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M422.94,578.19c.13.33.25.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M421,576.92c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M410,569.93c.13.34.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M413.64,570.84c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M414.91,568.86c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M420.24,574.13c.1.2.19.45.05.6l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M422.21,577.62c.1.2.19.45,0,.59l-.17-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M415.26,573.17c.1.2.19.45.05.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M418.37,577.17c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M419.28,573.55c.13-.18.31-.38.5-.32v.21l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M411.66,569.57c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M409.67,568.3c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M409,565.52c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M410.94,569c.09.2.18.45,0,.6l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M407.09,568.55c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M408,564.94c.13-.18.3-.38.5-.32l0,.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M415.31,571c.13-.18.31-.38.5-.32v.21l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M410.35,567.84c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M432,559.61a4.27,4.27,0,0,1,.57,1.22c.44,1.25.91,2.49,1.39,3.73l.67,1.73a44.64,44.64,0,0,0,2.59,5.88,5.11,5.11,0,0,0,1,1.33c.42.38,1,.82.83,1.36a4.44,4.44,0,0,1-2-.05,8.91,8.91,0,0,1-2.4-1.22L425.82,568a13.93,13.93,0,0,1-2.7-2.07,27.45,27.45,0,0,1-1.81-2.47c-1.78-2.42-4.32-4.24-5.81-6.84a.34.34,0,0,1-.05-.14c0-.18.25-.23.43-.22,4.46.46,8.69,2.08,13.11,2.75C429.94,559.1,431.36,558.78,432,559.61Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M432,559.61a4.27,4.27,0,0,1,.57,1.22c.44,1.25.91,2.49,1.39,3.73l.67,1.73a44.64,44.64,0,0,0,2.59,5.88,5.11,5.11,0,0,0,1,1.33c.42.38,1,.82.83,1.36a4.44,4.44,0,0,1-2-.05,8.91,8.91,0,0,1-2.4-1.22L425.82,568a13.93,13.93,0,0,1-2.7-2.07,27.45,27.45,0,0,1-1.81-2.47c-1.78-2.42-4.32-4.24-5.81-6.84a.34.34,0,0,1-.05-.14c0-.18.25-.23.43-.22,4.46.46,8.69,2.08,13.11,2.75C429.94,559.1,431.36,558.78,432,559.61Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M431.13,561.07c.14.34.26.76,0,1l-.28-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M430.22,564.68c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M435.9,571.12c.13.33.25.76,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M433.91,569.85c.14.33.26.76,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M423,562.86c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M426.61,563.77c.13.34.25.76,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M427.88,561.79c.13.33.25.76,0,1l-.27-.17.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M433.21,567.06c.09.2.18.45,0,.59l-.17-.11.17-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M435.18,570.55c.09.2.18.45,0,.59L435,571l.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M428.23,566.1c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M431.33,570.09c.13-.17.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M432.25,566.48c.13-.18.31-.38.5-.32l0,.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M424.62,562.5c.14.34.26.76,0,1l-.27-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M422.64,561.23c.13.34.25.76,0,1l-.28-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M421.93,558.45c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M423.9,561.93c.09.2.18.45,0,.59l-.17-.11.17-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M420.06,561.48c.13-.18.31-.38.5-.32l0,.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M421,557.87c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M428.28,563.94c.13-.18.3-.38.5-.32l0,.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M423.31,560.77c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M388.39,560.79A3.84,3.84,0,0,1,389,562c.44,1.26.92,2.5,1.4,3.74l.66,1.73a45.87,45.87,0,0,0,2.59,5.87,5,5,0,0,0,1,1.34c.42.38,1,.82.83,1.36a4.44,4.44,0,0,1-2.05,0,9,9,0,0,1-2.41-1.22l-8.74-5.64a13.4,13.4,0,0,1-2.7-2.08,27.41,27.41,0,0,1-1.82-2.46c-1.77-2.42-4.32-4.24-5.8-6.84a.35.35,0,0,1-.06-.14c0-.19.26-.24.44-.22,4.46.46,8.69,2.08,13.11,2.75C386.33,560.28,387.75,560,388.39,560.79Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M388.39,560.79A3.84,3.84,0,0,1,389,562c.44,1.26.92,2.5,1.4,3.74l.66,1.73a45.87,45.87,0,0,0,2.59,5.87,5,5,0,0,0,1,1.34c.42.38,1,.82.83,1.36a4.44,4.44,0,0,1-2.05,0,9,9,0,0,1-2.41-1.22l-8.74-5.64a13.4,13.4,0,0,1-2.7-2.08,27.41,27.41,0,0,1-1.82-2.46c-1.77-2.42-4.32-4.24-5.8-6.84a.35.35,0,0,1-.06-.14c0-.19.26-.24.44-.22,4.46.46,8.69,2.08,13.11,2.75C386.33,560.28,387.75,560,388.39,560.79Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M387.53,562.25c.13.34.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M386.62,565.86c.13.34.25.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M392.29,572.29c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M390.31,571c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M379.39,564c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M383,565c.14.34.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M384.27,563c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M389.6,568.24c.1.2.19.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M391.57,571.73c.1.19.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M384.62,567.28c.1.2.19.45,0,.59l-.17-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M387.73,571.27c.13-.18.31-.37.5-.32v.21l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M388.64,567.66c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M381,563.68c.13.34.25.76,0,1l-.27-.17.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M379,562.41c.14.34.26.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M378.33,559.63c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M380.29,563.11c.1.2.19.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M376.45,562.66c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M377.37,559.05c.13-.18.3-.38.5-.32l0,.2-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M384.67,565.12c.13-.18.31-.38.5-.32V565h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M379.71,561.94c.13-.18.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M420.21,557.25a3.89,3.89,0,0,1,.57,1.22c.44,1.25.92,2.49,1.4,3.73l.66,1.73a46,46,0,0,0,2.59,5.88,5.37,5.37,0,0,0,1,1.34c.42.38,1,.82.83,1.35a4.3,4.3,0,0,1-2.05,0,8.69,8.69,0,0,1-2.41-1.22L414,565.6a13.77,13.77,0,0,1-2.7-2.08,26.19,26.19,0,0,1-1.82-2.47c-1.77-2.41-4.32-4.23-5.8-6.84a.35.35,0,0,1-.06-.14c0-.18.26-.23.44-.21,4.46.45,8.69,2.07,13.11,2.74C418.15,556.74,419.57,556.42,420.21,557.25Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M419.35,558.71c.13.34.25.77,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M418.44,562.33c.13.33.25.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M424.11,568.76c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M422.13,567.49c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M411.21,560.5c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M414.82,561.41c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M416.09,559.43c.14.34.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M421.42,564.71c.1.19.19.45.05.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M423.39,568.19c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M416.44,563.74c.1.2.19.45,0,.6l-.17-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M419.55,567.74c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M420.46,564.12c.13-.17.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M412.84,560.14c.13.34.25.77,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M410.85,558.87c.14.34.26.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M410.15,556.09c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M412.11,559.58c.1.19.19.45.05.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M408.27,559.12c.13-.18.31-.37.5-.32V559l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M409.18,555.51c.13-.18.31-.38.51-.32l0,.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M416.49,561.58c.13-.18.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M411.53,558.41c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M396.64,531.32a4,4,0,0,1,.57,1.22c.44,1.26.92,2.5,1.4,3.74l.66,1.73a45.87,45.87,0,0,0,2.59,5.87,5,5,0,0,0,1,1.34c.42.38,1,.82.83,1.36a4.44,4.44,0,0,1-2.05-.06,8.69,8.69,0,0,1-2.41-1.22l-8.74-5.63a13.4,13.4,0,0,1-2.7-2.08,26.19,26.19,0,0,1-1.82-2.47c-1.77-2.41-4.32-4.23-5.8-6.83a.42.42,0,0,1-.06-.14c0-.19.26-.24.44-.22,4.46.46,8.69,2.08,13.11,2.74C394.58,530.82,396,530.5,396.64,531.32Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M395.78,532.79c.13.33.25.76,0,1l-.27-.17.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M394.87,536.4c.13.34.25.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M400.54,542.83c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M398.56,541.56c.13.34.25.76,0,1l-.27-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M387.64,534.57c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M391.25,535.49c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M392.52,533.5c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M397.85,538.78c.1.2.19.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M399.82,542.26c.1.2.19.45,0,.59l-.17-.11.17-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M392.87,537.82c.1.2.19.45,0,.59l-.17-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M396,541.81c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M396.89,538.2c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M389.27,534.22c.13.33.25.76,0,1l-.27-.17.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M387.28,533c.14.33.26.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M386.58,530.16c.09.2.18.45,0,.6l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M388.54,533.65c.1.2.19.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M384.7,533.2c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M385.61,529.58c.13-.18.31-.38.51-.32l0,.21-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M392.92,535.66c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M388,532.48c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M428.46,529a3.84,3.84,0,0,1,.57,1.21c.44,1.26.92,2.5,1.4,3.74l.66,1.73a45.26,45.26,0,0,0,2.59,5.87,5,5,0,0,0,1,1.34c.41.38,1,.82.83,1.36a4.43,4.43,0,0,1-2.05-.05A9,9,0,0,1,431,543l-8.74-5.64a13.4,13.4,0,0,1-2.7-2.08,27.41,27.41,0,0,1-1.82-2.46c-1.77-2.42-4.32-4.24-5.8-6.84a.35.35,0,0,1-.06-.14c0-.19.26-.24.44-.22,4.46.46,8.69,2.08,13.11,2.75C426.4,528.46,427.82,528.14,428.46,529Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M427.6,530.43c.13.34.25.76,0,1l-.27-.17.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M426.68,534c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M432.36,540.47c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M430.38,539.2c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M419.46,532.22c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M423.07,533.13c.14.34.26.76,0,1l-.27-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M424.34,531.14c.14.34.26.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M429.67,536.42c.1.2.19.45,0,.59l-.17-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M431.64,539.91c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M424.69,535.46c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M427.8,539.45c.13-.18.31-.37.5-.31v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M428.71,535.84c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M421.09,531.86c.13.34.25.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M419.1,530.59c.14.34.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M418.4,527.81c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M420.36,531.29c.1.2.19.45.05.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M416.52,530.84c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M417.43,527.23c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M424.74,533.3c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M419.78,530.12c.13-.18.31-.37.5-.31l0,.2-.39,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M442.6,563.14a4.28,4.28,0,0,1,.58,1.22c.43,1.26.91,2.5,1.39,3.74l.67,1.73a44.46,44.46,0,0,0,2.58,5.87,5.2,5.2,0,0,0,1,1.34c.42.38,1,.82.83,1.35a4.31,4.31,0,0,1-2.05,0,8.69,8.69,0,0,1-2.41-1.22l-8.74-5.63a13.68,13.68,0,0,1-2.7-2.08,28.07,28.07,0,0,1-1.82-2.47c-1.77-2.41-4.32-4.23-5.8-6.83a.27.27,0,0,1-.05-.14c0-.19.25-.24.43-.22,4.46.46,8.69,2.08,13.11,2.74C440.55,562.63,442,562.32,442.6,563.14Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M441.74,564.61c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M440.83,568.22c.13.34.25.76,0,1l-.27-.17.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M446.51,574.65c.13.34.25.76,0,1l-.28-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M444.52,573.38c.13.34.25.76,0,1l-.27-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M433.6,566.39c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M437.21,567.31c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M438.48,565.32c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M443.81,570.6c.1.2.19.45.05.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M445.78,574.08c.1.2.19.45,0,.59l-.17-.11.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M438.83,569.64c.1.2.19.45.05.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M441.94,573.63c.13-.18.31-.38.5-.32v.21H442" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M442.85,570c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M435.23,566c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M433.24,564.77c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M432.54,562c.09.2.18.45,0,.6l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M434.51,565.47c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M430.66,565c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M431.58,561.4c.13-.18.3-.38.5-.32l0,.21-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M438.88,567.48c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M433.92,564.3c.13-.18.31-.38.5-.32v.21H434" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M435.53,566.68a3.89,3.89,0,0,1,.57,1.22c.44,1.25.92,2.49,1.4,3.73l.66,1.73a46,46,0,0,0,2.59,5.88,5.37,5.37,0,0,0,1,1.34c.42.38,1,.81.83,1.35a4.31,4.31,0,0,1-2.05,0,9,9,0,0,1-2.41-1.22L429.36,575a13.35,13.35,0,0,1-2.7-2.07,27.55,27.55,0,0,1-1.82-2.47c-1.77-2.41-4.32-4.24-5.8-6.84a.35.35,0,0,1-.06-.14c0-.18.26-.23.44-.21,4.46.45,8.69,2.07,13.11,2.74C433.47,566.17,434.89,565.85,435.53,566.68Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M434.67,568.14c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M433.76,571.75c.13.34.25.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M439.43,578.19c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M437.45,576.92c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M426.53,569.93c.13.34.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M430.14,570.84c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M431.41,568.86c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M436.74,574.13c.1.2.19.45.05.6l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M438.71,577.62c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M431.76,573.17c.1.2.19.45,0,.59l-.17-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M434.87,577.17c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M435.78,573.55c.13-.18.31-.38.5-.32v.21l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M428.16,569.57c.13.34.25.77,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M426.17,568.3c.14.34.26.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M425.47,565.52c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M427.43,569c.1.2.19.45.05.6l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M423.59,568.55c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M424.51,564.94c.13-.18.3-.38.5-.32l0,.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M431.81,571c.13-.18.31-.38.5-.32v.21l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M426.85,567.84c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M454.92,570.31a4.28,4.28,0,0,1-.6,1.21c-.72,1.12-1.39,2.26-2.07,3.41l-.94,1.59a46.06,46.06,0,0,0-3,5.68,5.23,5.23,0,0,0-.44,1.59c0,.57,0,1.3-.55,1.49a4.33,4.33,0,0,1-1.23-1.64,8.74,8.74,0,0,1-.54-2.64l-1-10.36a13.35,13.35,0,0,1,0-3.4,28.21,28.21,0,0,1,.81-3c.79-2.89.64-6,1.76-8.79a.29.29,0,0,1,.08-.13c.14-.12.34,0,.44.21,2.4,3.78,3.76,8.1,6,12C454,568.38,455.17,569.3,454.92,570.31Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M454.92,570.31a4.28,4.28,0,0,1-.6,1.21c-.72,1.12-1.39,2.26-2.07,3.41l-.94,1.59a46.06,46.06,0,0,0-3,5.68,5.23,5.23,0,0,0-.44,1.59c0,.57,0,1.3-.55,1.49a4.33,4.33,0,0,1-1.23-1.64,8.74,8.74,0,0,1-.54-2.64l-1-10.36a13.35,13.35,0,0,1,0-3.4,28.21,28.21,0,0,1,.81-3c.79-2.89.64-6,1.76-8.79a.29.29,0,0,1,.08-.13c.14-.12.34,0,.44.21,2.4,3.78,3.76,8.1,6,12C454,568.38,455.17,569.3,454.92,570.31Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M453.23,570.54c-.18.32-.44.68-.8.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M449.83,572.07c-.18.31-.44.67-.8.64l0-.33.7-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M448.31,580.51c-.18.31-.44.67-.8.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M448.08,578.17c-.19.31-.45.67-.81.63l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M446.78,565.27c-.18.31-.44.67-.8.63l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M448.31,568.67c-.18.31-.44.67-.8.63l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M450.65,568.43c-.18.32-.44.68-.8.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M449.82,575.89c-.1.2-.24.42-.44.4l0-.21.39-.08" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M448.31,579.59c-.1.2-.24.43-.44.4l0-.2.39-.09" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M447.49,571.38c-.1.2-.24.43-.44.4l0-.2.39-.09" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M446.28,576.3c.22,0,.49,0,.56.19l-.17.12-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M449.68,574.77c.22,0,.49,0,.56.2l-.17.11-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M448.07,566.32c-.18.32-.44.67-.8.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M447.84,564c-.18.31-.44.67-.8.63l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M449.59,561.7c-.1.2-.24.42-.44.4l0-.21.4-.08" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M448.07,565.4c-.09.2-.24.43-.44.4l0-.2.39-.09" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M446,562.11c.23,0,.49,0,.56.19l-.17.12-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M449.45,560.58c.22,0,.48,0,.56.2l-.17.12-.26-.31" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M449.21,570.08c.22,0,.49,0,.56.2l-.17.11-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M448.62,564.22c.23,0,.49,0,.56.19l-.17.12-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M381.85,570.31a4.28,4.28,0,0,1-.6,1.21c-.71,1.12-1.39,2.26-2.07,3.41l-.94,1.59a44.67,44.67,0,0,0-3,5.68,5,5,0,0,0-.45,1.59c0,.57,0,1.3-.55,1.49a4.44,4.44,0,0,1-1.23-1.64,8.44,8.44,0,0,1-.53-2.64l-1-10.36a13.83,13.83,0,0,1-.05-3.4,28.21,28.21,0,0,1,.81-3c.79-2.89.64-6,1.76-8.79a.29.29,0,0,1,.08-.13c.14-.12.34,0,.44.21,2.41,3.78,3.76,8.1,6,12C381,568.38,382.1,569.3,381.85,570.31Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M380.17,570.54c-.18.32-.44.68-.81.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M376.77,572.07c-.18.31-.45.67-.81.64l0-.33.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M375.24,580.51c-.18.31-.44.67-.8.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M375,578.17c-.18.31-.44.67-.8.63l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M373.72,565.27c-.18.31-.44.67-.81.63l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M375.24,568.67c-.18.31-.44.67-.8.63l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M377.59,568.43c-.18.32-.44.68-.81.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M376.75,575.89c-.09.2-.24.42-.43.4l0-.21.39-.08" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M375.24,579.59c-.1.2-.24.43-.44.4l0-.2.39-.09" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M374.42,571.38c-.1.2-.24.43-.44.4l0-.2.39-.09" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M373.21,576.3c.22,0,.49,0,.56.19l-.17.12-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M376.61,574.77c.22,0,.49,0,.56.2l-.17.11-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M375,566.32c-.18.32-.44.67-.81.64l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M374.77,564c-.18.31-.44.67-.8.63l0-.32.71-.14" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M376.52,561.7c-.1.2-.24.42-.44.4l0-.21.39-.08" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M375,565.4c-.1.2-.24.43-.44.4l0-.2.4-.09" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M373,562.11c.22,0,.48,0,.56.19l-.17.12-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M376.38,560.58c.22,0,.49,0,.56.2l-.17.12-.26-.31" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M376.14,570.08c.23,0,.49,0,.56.2l-.17.11-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M375.56,564.22c.22,0,.48,0,.56.19l-.17.12-.26-.3" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M458.1,575.72a3.92,3.92,0,0,1-1,.91c-1.06.79-2.1,1.62-3.14,2.44l-1.45,1.16a44.19,44.19,0,0,0-4.83,4.23,5.36,5.36,0,0,0-1,1.33c-.24.51-.48,1.21-1,1.2a4.4,4.4,0,0,1-.57-2,8.94,8.94,0,0,1,.45-2.66l2.75-10a13.8,13.8,0,0,1,1.18-3.2,25.32,25.32,0,0,1,1.81-2.48c1.77-2.41,2.74-5.39,4.78-7.58,0,0,.07-.08.12-.09s.3.17.34.35c.9,4.39.62,8.91,1.31,13.33C458,573.6,458.7,574.86,458.1,575.72Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M456.45,575.33c-.28.23-.65.47-1,.31l.08-.31.72.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M452.73,575.54c-.28.23-.65.47-1,.31l.08-.31.72.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M448.29,582.89c-.28.22-.65.47-1,.31l.08-.32.71.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M448.91,580.61c-.28.23-.65.47-1,.31l.09-.31.71.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M452.31,568.1c-.28.23-.66.47-1,.31l.08-.31.71.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M452.52,571.82c-.28.23-.65.47-1,.31l.08-.31.72.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M454.79,572.44c-.28.23-.65.47-1,.31l.08-.32.71.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M451.36,579.1c-.17.16-.38.32-.56.22l.06-.2.39.06" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M448.62,582c-.16.15-.37.31-.55.21l.05-.2.4.06" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M450.78,574.06c-.16.16-.37.32-.55.22l0-.2.4.06" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M447.9,578.22c.21.08.45.19.45.39l-.2,0-.13-.38" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M451.62,578c.21.07.45.18.46.39l-.2,0-.14-.37" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M453.14,569.55c-.29.23-.66.47-1,.31l.08-.32.71.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M453.75,567.27c-.28.23-.65.47-1,.31l.08-.31.71.12" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M456.2,565.76c-.17.16-.38.32-.56.22l.06-.2.39.06" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M453.46,568.69c-.16.15-.37.31-.55.21l0-.2.4.06" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M452.74,564.89c.21.07.45.18.46.38l-.2.05-.14-.38" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M456.46,564.67c.21.07.46.18.46.39l-.2,0-.14-.37" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M452.86,573.46c.21.07.45.18.45.39l-.2,0-.14-.38" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M454.4,567.78c.21.07.45.18.45.38l-.2.05-.13-.38" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M448.5,565.5a4.39,4.39,0,0,1,.57,1.22c.44,1.25.91,2.49,1.39,3.73l.67,1.73a44.64,44.64,0,0,0,2.59,5.88,5.33,5.33,0,0,0,1,1.34c.42.38,1,.82.83,1.35a4.31,4.31,0,0,1-2,0,8.5,8.5,0,0,1-2.4-1.22l-8.75-5.64a13.93,13.93,0,0,1-2.7-2.07,27.45,27.45,0,0,1-1.81-2.47c-1.78-2.41-4.32-4.23-5.81-6.84a.34.34,0,0,1-.05-.14c0-.18.25-.23.43-.21,4.46.45,8.69,2.07,13.11,2.74C446.44,565,447.86,564.67,448.5,565.5Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path
                        d="M448.5,565.5a4.39,4.39,0,0,1,.57,1.22c.44,1.25.91,2.49,1.39,3.73l.67,1.73a44.64,44.64,0,0,0,2.59,5.88,5.33,5.33,0,0,0,1,1.34c.42.38,1,.82.83,1.35a4.31,4.31,0,0,1-2,0,8.5,8.5,0,0,1-2.4-1.22l-8.75-5.64a13.93,13.93,0,0,1-2.7-2.07,27.45,27.45,0,0,1-1.81-2.47c-1.78-2.41-4.32-4.23-5.81-6.84a.34.34,0,0,1-.05-.14c0-.18.25-.23.43-.21,4.46.45,8.69,2.07,13.11,2.74C446.44,565,447.86,564.67,448.5,565.5Z"
                        transform="translate(-102.06 -53.73)" opacity="0.05" />
                    <path d="M447.63,567c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M446.72,570.58c.13.33.25.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M452.4,577c.13.33.25.76,0,1l-.27-.17.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M450.41,575.74c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M439.49,568.75c.14.34.26.76,0,1l-.28-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M443.11,569.66c.13.34.25.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M444.38,567.68c.13.33.25.76,0,1l-.27-.17.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M449.71,573c.09.2.18.46,0,.6l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M451.68,576.44c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M444.73,572c.09.2.18.45,0,.59l-.18-.1.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M447.83,576c.13-.18.31-.38.5-.32v.2l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M448.75,572.37c.13-.18.3-.37.5-.31l0,.2-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M441.12,568.39c.14.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M439.14,567.12c.13.34.25.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M438.43,564.34c.1.2.19.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M440.4,567.82c.09.2.18.46,0,.6l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M436.56,567.37c.13-.18.3-.38.5-.32l0,.21-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M437.47,563.76c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M444.78,569.83c.13-.18.3-.37.5-.32l0,.21-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M439.81,566.66c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M432,554.89a4.53,4.53,0,0,1,.57,1.22c.44,1.26.91,2.5,1.39,3.74l.67,1.73a44.51,44.51,0,0,0,2.59,5.87,5,5,0,0,0,1,1.34c.42.38,1,.82.83,1.36a4.44,4.44,0,0,1-2-.06,8.63,8.63,0,0,1-2.4-1.22l-8.75-5.63a14,14,0,0,1-2.7-2.08,26.1,26.1,0,0,1-1.81-2.47c-1.78-2.41-4.32-4.23-5.81-6.83a.39.39,0,0,1-.05-.14c0-.19.25-.24.43-.22,4.46.46,8.69,2.08,13.11,2.74C429.94,554.39,431.36,554.07,432,554.89Z"
                        transform="translate(-102.06 -53.73)" fill="#fed253" />
                    <path d="M431.13,556.36c.14.33.26.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M430.22,560c.13.34.25.76,0,1l-.27-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M435.9,566.4c.13.34.25.77,0,1l-.27-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M433.91,565.13c.14.34.26.76,0,1l-.28-.18.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M423,558.14c.14.34.26.77,0,1l-.28-.17.33-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M426.61,559.06c.13.33.25.76,0,1l-.27-.17.32-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M427.88,557.07c.13.34.25.77,0,1l-.27-.17.32-.65" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M433.21,562.35c.09.2.18.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M435.18,565.83c.09.2.18.45,0,.59l-.18-.11.18-.35" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M428.23,561.39c.09.2.18.45,0,.59l-.18-.11.18-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M431.33,565.38c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M432.25,561.77c.13-.18.31-.38.5-.32l0,.2-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M424.62,557.79c.14.33.26.76,0,1l-.27-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M422.64,556.52c.13.33.25.76,0,1l-.28-.17.33-.64" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M421.93,553.73c.1.2.19.45,0,.6l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M423.9,557.22c.09.2.18.45,0,.59l-.17-.11.17-.36" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M420.06,556.77c.13-.18.31-.38.5-.32l0,.2-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M421,553.15c.13-.18.31-.38.5-.32V553l-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M428.28,559.23c.13-.18.3-.38.5-.32l0,.2-.4,0" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path d="M423.31,556.05c.13-.18.31-.38.5-.32v.21h-.4" transform="translate(-102.06 -53.73)"
                        opacity="0.2" />
                    <path
                        d="M452.44,594.05H377.22a3.15,3.15,0,0,1-3.06-2.39l-4.32-17.27a3.16,3.16,0,0,1,3.06-3.91h83.85a3.15,3.15,0,0,1,3.06,3.91l-4.32,17.27A3.14,3.14,0,0,1,452.44,594.05Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <path
                        d="M353.42,415c-2.85-3.57-2.55-9.26-1.17-13.87s3.69-8.9,4.36-13.73c.79-5.6-.56-12,2.25-16.59,1.82-3,5-4.43,8-5.21s6.24-1.07,9.13-2.46c3.89-1.87,6.9-5.54,10.43-8.21,3.91-3,8.81-4.66,13.25-3,4.15,1.52,7.19,5.63,11,8.12a66.88,66.88,0,0,0,6,3.13A70,70,0,0,1,427,370.33c2.38,1.87,4.89,3.9,6,7,1.24,3.49.38,7.51-.89,11a13.08,13.08,0,0,0-1.21,5.16c.13,2.22,1.47,4.05,2.64,5.8,2.76,4.15,5,9.09,4.91,14.34,0,2.36-.54,4.72-.24,7a15.19,15.19,0,0,1,.36,3.21c-.1,1.07-.78,2.2-1.71,2.17a2.61,2.61,0,0,1-1.41-.75c-3-2.48-7-4.63-10.13-2.36a2.07,2.07,0,0,1-1.19.59,1.57,1.57,0,0,1-.94-.54c-4.78-4.61-5.37-14.29-11.16-16.88-2.57-1.16-5.46-.47-8.2-.87-3.3-.47-6.29-2.51-9.53-3.33-5.94-1.51-12.54,1.51-16,7.34-1.58,2.65-2.53,5.73-3.73,8.63-1.56,3.74-6.8,12-11,7.62-1.36-1.4-1.55-3.77-3.1-5.22C358.27,418.2,355.38,417.5,353.42,415Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <path
                        d="M404.88,611.4c-20.5-7.62-43.88-10.55-64-2-3.46,1.48-7.21,3.87-7.57,7.62-.16,1.73.46,3.43.8,5.13,1.11,5.36-.44,10.87-.8,16.34s1,11.8,5.86,14.38c2.57,21.6,7.55,42.07,16.85,61.73a43.86,43.86,0,0,1,3.66,9.34c.71,3.3.56,6.72.7,10.09.43,10.27,3.57,20.21,6.68,30a37.68,37.68,0,0,0,2.38,6.19c2.23,4.2,6,7.39,8.64,11.32s4.18,9.4,1.49,13.32c-1.58,2.3,4,3.75,6.8,3.8A313.45,313.45,0,0,0,423,797.2a3.69,3.69,0,0,0,4-3.42c1.19-4.25,2.38-8.81,1-13-.74-2.22-2.2-4.29-2.16-6.63,0-2,1.23-3.88,1.71-5.87,1.47-6.13-3.75-11.56-7.59-16.56-8-10.46-11.18-23.76-14.07-36.63q-5.67-25.19-11.08-50.44c3.1,2.44,2.77,6.5,5.75,9.08,3.52,3,9.42,1.12,12.05-2.7s2.84-8.78,2.73-13.43C415,642.13,410.27,625.91,404.88,611.4Z"
                        transform="translate(-102.06 -53.73)" fill="#e3e8f4" />
                    <path
                        d="M432.06,617.07c4.94-12.14,16.53-21.69,29.58-22.81s26.73,7.14,30.59,19.66a49.9,49.9,0,0,1,1.64,9.18c3.46,31,3.47,62.85-4.24,93.12-1.58,6.24-3.5,12.44-4.06,18.84s.38,13.19,4.06,18.47c1,1.48,2.3,2.88,2.79,4.62.57,2,.06,4.08-.46,6.08l-6.47,25.19a9.82,9.82,0,0,1-2,4.42c-1.89,2-5,2.09-7.79,1.81a59.76,59.76,0,0,1-21.11-6.17c-6-3.07-12.16-8.36-11.8-15.12.09-1.69.59-3.44,0-5a10.61,10.61,0,0,0-2.36-3c-3.51-3.9-4.31-9.65-3.36-14.8s3.45-9.88,5.91-14.5-.54-10.67-1.33-15.7c-2.74-17.42,2.89-35.7-2-52.64-3.6,3.13-9.27,5.27-12.93,2.23-3.27-2.72-2.88-7.76-2.2-12C426.8,644.94,426.72,630.21,432.06,617.07Z"
                        transform="translate(-102.06 -53.73)" fill="#e3e8f4" />
                    <path
                        d="M252.47,378.35c-2-.15-2.69-2.85-1.89-4.63s2.47-3,3.64-4.58c3.27-4.36,2.19-10.41,1.89-15.85-.45-8.2,1.24-16.36,2.92-24.4.85-4.06,1.74-8.22,4-11.73a17.63,17.63,0,0,1,11.82-7.87,9.6,9.6,0,0,1,6.48-7.78,18,18,0,0,1,10.87.45,2.9,2.9,0,0,0,1.53.21,3.23,3.23,0,0,0,1.42-1.05,9.86,9.86,0,0,1,12.47-1c3.31-20.33,6.86-40.42,10.61-60.67.63-3.38,1.75-6.92,4-9.54,1.82-2.15,4.34-4,7.16-3.93a11.9,11.9,0,0,1,3.32.73c2.43.8,5,1.78,6.47,3.86a11.06,11.06,0,0,1,1.62,4.37,42.72,42.72,0,0,1,.68,11.89c-.53,6.34-1,12.54-1.06,18.91-.15,11.2-3,22.15-4.71,33.23-2,13.1-2.33,26.62-7,39-4.27,11.43-12.08,21.55-14.48,33.52-1.17,5.82-.61,12.71,4,16.43-.13,1.68-2.45,1.73-4.13,1.72l-9,0a102.72,102.72,0,0,1-12.28-.57C278.83,387.29,266.48,379.39,252.47,378.35Z"
                        transform="translate(-102.06 -53.73)" fill="#0489c1" />
                    <path
                        d="M259.27,377.27c-1.65-.07-2.19-2.57-1.46-4.26s2.19-2.88,3.23-4.38c2.89-4.17,2.16-9.78,2.08-14.84-.13-7.64,1.55-15.3,3.22-22.85.84-3.81,1.72-7.72,3.7-11.06a16.46,16.46,0,0,1,10.23-7.71,9.62,9.62,0,0,1,5.72-7.45,13.83,13.83,0,0,1,9.18.08,2.1,2.1,0,0,0,1.28.15,3,3,0,0,0,1.23-1c2.8-3.12,7.57-3.71,10.57-1.29,3.43-19.06,7.05-37.91,10.85-56.91a21.54,21.54,0,0,1,3.65-9c1.61-2.07,3.8-3.87,6.17-3.89a9.2,9.2,0,0,1,2.79.58c2,.68,4.15,1.51,5.35,3.4a10.38,10.38,0,0,1,1.23,4,43.56,43.56,0,0,1,.21,11.07c-.65,5.93-1.21,11.72-1.48,17.66-.47,10.45-3.25,20.76-5,31.14-2.08,12.28-2.8,24.9-7.1,36.61-4,10.8-10.87,20.48-13.27,31.71-1.17,5.47-.91,11.88,2.88,15.21-.16,1.57-2.13,1.69-3.55,1.73l-7.62.23A76.11,76.11,0,0,1,293,386C281.28,384.79,271.08,377.81,259.27,377.27Z"
                        transform="translate(-102.06 -53.73)" fill="none" stroke="#fff" stroke-miterlimit="10" />
                    <path
                        d="M329.77,254l3,1q-3.48,19.75-5.76,39.71a8.72,8.72,0,0,1,3.32,1.62,31.71,31.71,0,0,0-2,8.53,80.44,80.44,0,0,0-12.46-3.54l1.35-5.07a1.42,1.42,0,0,1,.53-.94,2.33,2.33,0,0,1,1.09-.13c2-.09,2.61-2.73,2.71-4.74.39-7.37,2.17-14.59,3.95-21.76a2.84,2.84,0,0,0-3.93.33c.59-.74,0-4.69.05-5.75.08-1.61-.16-3.11,1.2-4.06,1.11-.77,3-.63,4.2-1.47A7,7,0,0,0,329.77,254Z"
                        transform="translate(-102.06 -53.73)" fill="none" stroke="#fff" stroke-miterlimit="10" />
                    <path
                        d="M434.25,514.32a31.07,31.07,0,0,1-4.36,1.95,1,1,0,0,0-.71,1.27l6,22.24a9.27,9.27,0,0,1-.05,4.93,9.83,9.83,0,0,0,.85,7.8L450.9,588.3s1.8,4.85,5.47,3.32a57,57,0,0,0,13.22-5.51s2.71-1.78.87-6.19l-14.71-35.24a9.35,9.35,0,0,0-4.73-6.25,9.51,9.51,0,0,1-3.49-3.41l-11.89-20.3A1,1,0,0,0,434.25,514.32Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <rect x="442.77" y="547.76" width="19.29" height="32.62" rx="8.18"
                        transform="translate(-284.39 164.01) rotate(-22.65)" fill="#0489c1" />
                    <rect x="442.77" y="547.76" width="19.29" height="32.62" rx="8.18"
                        transform="translate(-284.39 164.01) rotate(-22.65)" opacity="0.25" />
                    <path
                        d="M500.37,576.28c.89,4.81,1.36,9.85-.05,14.53s-5.08,9-9.89,9.83c-3.29.6-6.66-.4-9.7-1.8s-5.89-3.2-9-4.33c-6.73-2.42-14.27-1.57-21.05.7a57.15,57.15,0,0,1-6.59,2.07,36.48,36.48,0,0,1-5.91.54c-7.42.29-14.95.57-22.18-1.13a13,13,0,0,1-5.66-2.52,12.67,12.67,0,0,1-3.39-5.83c-1.75-5.45-2-11.78,1.15-16.57,2.28-3.49,6.1-5.75,10.09-7a54.18,54.18,0,0,1,12.37-1.73A11,11,0,0,1,441,566.67l5.08,4.54a12.75,12.75,0,0,0,3.36,2.4,12,12,0,0,0,3.36.71,87.25,87.25,0,0,0,11.31.45c.38-2.29-1-4.55-.88-6.86a7.39,7.39,0,0,1,3.57-5.64,17.48,17.48,0,0,1,6.52-2.23c5.12-.94,10.51-1.2,15.45.44C496.47,563.06,499,568.88,500.37,576.28Z"
                        transform="translate(-102.06 -53.73)" fill="#fbbebe" />
                    <path
                        d="M497.19,533.7a65.6,65.6,0,0,1,1.75,9.82c.16,2.25.1,4.5.29,6.75.71,8.37,4.88,16.33,4.52,24.73a15.06,15.06,0,0,0-8.24-1.21c.74-2.58-1.13-5.35-3.56-6.49s-5.24-1.07-7.93-.88c-7.49.53-15,1.76-21.85,4.94a1.13,1.13,0,0,1-1,.15c-.43-.21-.42-.81-.42-1.28.06-4.08-4.22-6.91-5.24-10.86-.73-2.85.34-5.81,1.12-8.65,2.95-10.68,1.84-22,2.72-33.06.5-6.26,2-13,6.83-17A15,15,0,0,1,482,499.18C493.52,504.91,494.67,522.76,497.19,533.7Z"
                        transform="translate(-102.06 -53.73)" fill="#0489c1" />
                    <path
                        d="M966.36,777.83c1-5.42,7.95-8.07,13.14-6.21,2.8,1,5.16,2.92,7.78,4.33a24.41,24.41,0,0,0,19.88,1.17,27.26,27.26,0,0,0,14.7-13.62c3.61-7.46,3.83-16,4-24.32.15-8.48.16-17.5-4.33-24.69"
                        transform="translate(-102.06 -53.73)" fill="#0489c1" />
                    <ellipse cx="801.75" cy="596.4" rx="9.83" ry="13.37" fill="#0489c1" />
                    <ellipse cx="852.87" cy="596.4" rx="9.83" ry="13.37" fill="#0489c1" />
                    <path
                        d="M990.7,770.84c0,36.7-25.69,32.63-57.4,32.63s-57.41,4.07-57.41-32.63c0-21.57,8.87-52.4,22.62-74.17,9.66-15.28,21.71-26.1,34.79-26.1,11.1,0,21.46,7.8,30.24,19.5C979.85,711.79,990.7,747,990.7,770.84Z"
                        transform="translate(-102.06 -53.73)" fill="#3f3d56" />
                    <path
                        d="M963.54,690.07a33.82,33.82,0,0,1-65,6.6c9.66-15.28,21.71-26.1,34.79-26.1C944.4,670.57,954.76,678.37,963.54,690.07Z"
                        transform="translate(-102.06 -53.73)" opacity="0.1" />
                    <circle cx="828.1" cy="623.93" r="33.81" fill="#3f3d56" />
                    <ellipse cx="810.01" cy="615.96" rx="3.93" ry="6.98" fill="#fff" />
                    <ellipse cx="846.18" cy="615.96" rx="3.93" ry="6.98" fill="#fff" />
                    <circle cx="810.01" cy="613.7" r="3.15" fill="#0489c1" />
                    <circle cx="846.18" cy="613.7" r="3.15" fill="#0489c1" />
                    <path
                        d="M921.68,693.27a4.06,4.06,0,0,1,3.74-.73c.45.14.87.36,1.31.52,2.28.84,4.84.09,7-1s4.34-2.73,5.07-5.08"
                        transform="translate(-102.06 -53.73)" fill="#0489c1" />
                    <ellipse cx="800.97" cy="695.49" rx="9.04" ry="21.23" fill="#0489c1" />
                    <ellipse cx="970.65" cy="732.7" rx="21.23" ry="9.04"
                        transform="translate(-288.16 1054.38) rotate(-55.03)" fill="#0489c1" />
                    <ellipse cx="811.58" cy="745.82" rx="18.87" ry="9.44" fill="#0489c1" />
                    <ellipse cx="852.48" cy="745.82" rx="18.87" ry="9.44" fill="#0489c1" />
                    <path
                        d="M959.82,724c-1.3-.09-1.79-1.9-1.26-3.09s1.65-2,2.44-3c2.18-2.91,1.46-7,1.26-10.58-.3-5.47.82-10.91,1.94-16.28a23.47,23.47,0,0,1,2.64-7.83,11.78,11.78,0,0,1,7.89-5.25,6.4,6.4,0,0,1,4.32-5.19,12.1,12.1,0,0,1,7.26.3,1.88,1.88,0,0,0,1,.14,2.17,2.17,0,0,0,.95-.7,6.58,6.58,0,0,1,8.32-.65c2.21-13.56,4.58-27,7.09-40.48a13.52,13.52,0,0,1,2.65-6.37,6.42,6.42,0,0,1,4.78-2.62,7.69,7.69,0,0,1,2.21.49c1.62.54,3.33,1.19,4.32,2.58a7.32,7.32,0,0,1,1.08,2.91,28.54,28.54,0,0,1,.45,7.93c-.35,4.24-.65,8.37-.7,12.62-.1,7.47-2,14.79-3.14,22.18-1.33,8.74-1.56,17.76-4.65,26-2.86,7.63-8.07,14.38-9.67,22.37-.78,3.88-.4,8.48,2.68,11-.09,1.12-1.64,1.16-2.76,1.15l-6,0a67.75,67.75,0,0,1-8.19-.38C977.42,730,969.17,724.72,959.82,724Z"
                        transform="translate(-102.06 -53.73)" fill="#0489c1" />
                    <path
                        d="M964.36,723.3c-1.1,0-1.45-1.71-1-2.84a18.45,18.45,0,0,1,2.15-2.92c1.93-2.78,1.45-6.53,1.39-9.91-.08-5.09,1-10.2,2.15-15.24a25,25,0,0,1,2.47-7.38,10.94,10.94,0,0,1,6.83-5.14,6.43,6.43,0,0,1,3.82-5,9.18,9.18,0,0,1,6.12.06,1.39,1.39,0,0,0,.85.1,2.08,2.08,0,0,0,.83-.69,5.25,5.25,0,0,1,7-.86c2.29-12.72,4.7-25.29,7.23-38a14.66,14.66,0,0,1,2.44-6c1.07-1.38,2.54-2.58,4.12-2.59a5.67,5.67,0,0,1,1.86.39,6.21,6.21,0,0,1,3.57,2.26,7.11,7.11,0,0,1,.83,2.69,29.36,29.36,0,0,1,.13,7.38c-.43,4-.81,7.83-1,11.79-.31,7-2.16,13.85-3.33,20.78-1.39,8.19-1.87,16.61-4.74,24.43-2.65,7.2-7.26,13.66-8.86,21.16-.77,3.65-.6,7.92,1.93,10.15-.11,1-1.42,1.12-2.37,1.15l-5.09.16a51.34,51.34,0,0,1-6.91-.1C979.05,728.32,972.24,723.67,964.36,723.3Z"
                        transform="translate(-102.06 -53.73)" fill="none" stroke="#fff" stroke-miterlimit="10" />
                    <path
                        d="M1011.41,641l2,.69q-2.32,13.18-3.84,26.5a5.75,5.75,0,0,1,2.21,1.07,21.46,21.46,0,0,0-1.36,5.7,53.2,53.2,0,0,0-8.31-2.36l.89-3.39a1,1,0,0,1,.36-.63,1.6,1.6,0,0,1,.73-.08c1.35-.07,1.74-1.83,1.81-3.16a78.05,78.05,0,0,1,2.63-14.52,1.88,1.88,0,0,0-2.62.22c.39-.5,0-3.13,0-3.84.05-1.08-.1-2.08.81-2.71.73-.52,2-.42,2.8-1A4.75,4.75,0,0,0,1011.41,641Z"
                        transform="translate(-102.06 -53.73)" fill="none" stroke="#fff" stroke-miterlimit="10" />
                    <rect x="838.71" y="625.11" width="14.94" height="2.75" rx="0.93" fill="#0489c1" />
                    <rect x="802.54" y="625.11" width="14.94" height="2.75" rx="0.93" fill="#0489c1" />
                    <circle cx="781.24" cy="193.88" r="21.63" fill="#0489c1" opacity="0.1" />
                    <circle cx="84.24" cy="82.88" r="21.63" fill="#0489c1" opacity="0.1" />
                    <circle cx="194.24" cy="134.88" r="21.63" fill="#0489c1" opacity="0.1" />
                    <circle cx="706.35" cy="99.74" r="21.63" fill="#0489c1" opacity="0.1" />
                    <circle cx="853.5" cy="128.21" r="36.25" fill="#0489c1" opacity="0.1" />
                    <circle cx="888.25" cy="307.21" r="36.25" fill="#0489c1" opacity="0.1" />
                    <circle cx="36.25" cy="215.21" r="36.25" fill="#0489c1" opacity="0.1" />
                </svg>
            </div>
        </div>
    </div>
    <?php include '../components/tailwind.php'; ?>
</body>

</html>