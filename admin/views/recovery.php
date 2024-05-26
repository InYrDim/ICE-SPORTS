<?php

include '../../koneksi/connection.php';

$conn = get_connection();

function create_view($sql, $conn) {
    $conn->query($sql);
   
}

$sql_panitia = ' CREATE OR REPLACE VIEW panitia AS SELECT * FROM `mahasiswa` WHERE role = "panitia"';
$sql_peserta = ' CREATE OR REPLACE VIEW peserta AS SELECT * FROM `mahasiswa` WHERE role = "peserta"';

create_view($sql_panitia,  $conn);
create_view($sql_peserta,  $conn);

$conn->close();

?>