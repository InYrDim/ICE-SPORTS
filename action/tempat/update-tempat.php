<?php
include '../../koneksi/connection.php';
$conn = get_connection();

$id_tempat = $_POST["id_tempat"];
$name = $_POST["nama"];
$lokasi = $_POST["lokasi"];
$kapasitas = $_POST["kapasitas"];
$keterangan = $_POST["keterangan"];

$sql = "UPDATE tempat SET nama = ?, lokasi = ?, kapasitas = ?, keterangan = ? WHERE id_tempat = ?";
$statment = $conn->prepare($sql);
$statment->bind_param("ssisi", $name, $lokasi, $kapasitas, $keterangan, $id_tempat);

if($statment->execute()) {
    echo "Data Update Succesfully";
    header("Location: ../../admin/tables.php"); 
} else {
    echo "Error updating record:" . $statment->error;
}

$statment->close();
$conn->close();