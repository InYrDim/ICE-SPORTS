<?php
include '../../koneksi/connection.php';

//mendapatkan data dari form
$id = $_POST['id_cabor'];
$nama = $_POST['nama_cabor'];
$deskripsi = $_POST['deskripsi'];
$aturan = $_POST['aturan'];

$conn = get_connection();

//SQL untuk update data
$sql = "UPDATE cabang_olahraga SET nama_cabor = ?, deskripsi = ?, aturan = ? WHERE id_cabor = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $nama, $deskripsi, $aturan, $id);
if ($stmt->execute()) {
    echo "data olahraga update succesfully";
    header("Location: ../../admin/tables.php"); 
} else {
    echo "error updating record: " . $stmt->error;
}

$stmt->close();
$conn->close();