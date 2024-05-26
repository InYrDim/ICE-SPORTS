<?php
include '../../koneksi/connection.php';

$conn = get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_cabor'];
    $deskripsi = $_POST['deskripsi'];
    $aturan = $_POST['aturan'];

    $stmt = $conn->prepare("INSERT INTO cabang_olahraga (nama_cabor, deskripsi, aturan) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama, $deskripsi, $aturan);

    if ($stmt->execute()) {
        echo "data cabang olahraga berhasil ditambahkan";
        header("Location: ../../admin/tables.php"); 
    } else {
        echo "error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();