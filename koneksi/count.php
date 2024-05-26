<?php
  
 
function count_table($conn) {

    $sql = 'SELECT count(*) AS jumlah_table FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA ="db_ice_sports"  AND NOT TABLE_TYPE = "VIEW" ';
    $result= $conn->query($sql);
    
    return $result->fetch_assoc()["jumlah_table"];
}
function count_views($conn) {

    $sql = 'SELECT count(*) AS jumlah_view FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA ="db_ice_sports"; ';
    $result= $conn->query($sql);
    
    return $result->fetch_assoc()["jumlah_view"];
}
function count_mahasiswa($conn) {

    $sql = "SELECT COUNT(*) as jumlah_peserta FROM mahasiswa";
    $result= $conn->query($sql);
    
    return $result->fetch_assoc()["jumlah_peserta"];
}

function count_cabor($conn) {

    $sql = "SELECT COUNT(*) as jumlah_cabor FROM cabang_olahraga";
    $result= $conn->query($sql);
    return $result->fetch_assoc()["jumlah_cabor"];
}

function count_divisi($conn) {

    $sql = "SELECT COUNT(*) as jumlah_divisi FROM divisi";
    $result= $conn->query($sql);
    return $result->fetch_assoc()["jumlah_divisi"];
}