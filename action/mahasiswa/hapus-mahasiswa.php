<?php
include '../../koneksi/connection.php';

// Mendapatkan NIM dari query string
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    // Lakukan sesuatu dengan $nim
} else {
    echo "Betulko wehh";
    exit;
}

$conn = get_connection();

// SQL untuk menghapus data mahasiswa
$sql = "DELETE FROM mahasiswa WHERE nim = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nim); // Menggunakan "s" karena NIM adalah string
if ($stmt->execute()) {
    echo "Record deleted successfully";
    header("Location: ../../admin/tables.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$stmt->close();
$conn->close();
?>