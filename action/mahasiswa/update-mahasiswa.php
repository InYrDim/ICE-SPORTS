<?php
include '../../koneksi/connection.php';

// Mendapatkan data dari form
$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$role = isset($_POST['role']) ? $_POST['role'] : '';
$nama_mahasiswa = isset($_POST['nama']) ? $_POST['nama'] : '';
$kelas = isset($_POST['kelas']) ? $_POST['kelas'] : '';
$angkatan = isset($_POST['angkatan']) ? $_POST['angkatan'] : '';

    $conn = get_connection();

    // SQL untuk update data mahasiswa
    $sql = "UPDATE mahasiswa SET role = ?, nama = ?, kelas = ?, angkatan = ? WHERE nim = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssssi", $role, $nama_mahasiswa, $kelas, $angkatan, $nim);
        if ($stmt->execute()) {
            echo "Data updated successfully";
            header("Location: ../../admin/tables.php"); // Redirect kembali ke halaman utama setelah update berhasil
         
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
    
    $conn->close();