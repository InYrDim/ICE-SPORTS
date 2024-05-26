<?php
include '../../koneksi/connection.php';

//mendapatkan id dari query string
$id = $_GET['id'];

$conn = get_connection();

//SQL untuk menghapus data
$sql = "DELETE FROM cabang_olahraga WHERE id_cabor = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
if ($stmt->execute()) {
    echo "cabang olahraga berhasil dihapus";
    header("Location: ../../admin/tables.php"); 
} else {
    echo "gagal menghapus cabang olahraga" . $conn->error;
}

$stmt->close();
$conn->close();