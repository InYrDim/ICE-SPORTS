<?php
include '../../koneksi/connection.php';

// Mendapatkan NIM dari query string
$id = $_GET['id'];
$conn = get_connection();

// SQL untuk menghapus data divisi
$sql = "DELETE FROM divisi WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id); // Menggunakan "i" karena ID biasanya integer
if ($stmt->execute()) {
    echo "Record deleted successfully";
    header("Location: show_data.php"); // Redirect kembali ke halaman utama
    header("Location: ../../admin/tables.php"); // Redirect kembali ke halaman utama setelah update berhasil
} else {
    echo "Error deleting record: " . $conn->error;
}

$stmt->close();
$conn->close();
?>