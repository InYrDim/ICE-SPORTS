<?php
include './connection.php';

$conn = get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $role = $_POST['role'];
    $nama_mahasiswa = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $angkatan = $_POST['angkatan'];

    $stmt = $conn->prepare("INSERT INTO mahasiswa (nim, role, nama, kelas, angkatan) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nim, $role, $nama_mahasiswa, $kelas, $angkatan);

    if ($stmt->execute()) {
        echo "Data mahasiswa baru berhasil ditambahkan";
        header("Location: ../pages/mahasiswa.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();