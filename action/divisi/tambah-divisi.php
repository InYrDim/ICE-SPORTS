<?php
include '../../koneksi/connection.php';

$conn = get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_divisi = $_POST['nama_divisi'];
    $tugas = $_POST['tugas'];

    $stmt = $conn->prepare("INSERT INTO divisi (nama_divisi, tugas) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama_divisi, $tugas);

    if ($stmt->execute()) {
        echo "Data baru berhasil ditambahkan";
        header("Location: ../../admin/tables.php"); // Redirect kembali ke halaman utama setelah update berhasil
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();