<?php

include '../../koneksi/connection.php';

$conn = get_connection();

$reqMetheod = $_SERVER['REQUEST_METHOD'];

if ($reqMetheod == "POST") {
    $nama = $_POST["nama"];
    $lokasi = $_POST["lokasi"];
    $kapasitas = $_POST["kapasitas"];
    $keterangan = $_POST["keterangan"];

    $statment = $conn->prepare("INSERT INTO tempat (nama, lokasi, kapasitas, keterangan) VALUES (?, ?, ?, ?)");
    $statment->bind_param('ssis', $nama, $lokasi, $kapasitas, $keterangan);

    if($statment->execute()) {
        echo "Data Baru Berhasil Ditambahkan";
        header("Location: ../../admin/tables.php"); 
    } else {
        echo "ERROR: " . $statment->error;
    }

    $statment->close();
}
$conn->close();