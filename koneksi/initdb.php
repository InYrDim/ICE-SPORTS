<?php
function initDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_ice_sports";

    $conn = new mysqli($servername, $username, $password);
    try {
        $db_selected = mysqli_select_db($conn, $dbname);
        if (!$db_selected) {
            $conn->close();
            return;
        } 
    } catch (Exception $e) {        
        $sql = file_get_contents('db.sql');
        $conn->multi_query($sql);
        $conn->close();
        
        echo '
        <div class="relative z-[999]" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 z-[110] backdrop-blur bg-gray-500 bg-opacity-75 transition-opacity"></div>
         
            <div class="fixed inset-0 z-[110] w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div class="relative z-[110] transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg py-7">
                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                            
                                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-sky-100 sm:mx-0 sm:h-10 sm:w-10 ">
                                    <div class="rounded-md h-12 w-12 border-2 border-blue-500 animate-[spin_3s_linear_infinite]  absolute"></div>
                                    <svg class="h-6 w-6 text-sky-600 " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:ml-6 sm:mt-0 sm:text-left z-20">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Database Tidak Ditemukan</h3>
                                    <div class="mt-2">
                                    <p class="text-sm text-gray-500">Mencoba membuka database ICE SPORTS, namun database tidak ditemukan. Tunggu sebentar kami sedang membuatnya😀</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      ';
    echo "<script>setTimeout(function() { window.location.reload(); }, 5000);</script>";
        
    }
}
?>