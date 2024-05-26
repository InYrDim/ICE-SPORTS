<?php
include '../../koneksi/connection.php';

// Mendapatkan data dari form
$id = isset($_POST['id']) ? $_POST['id'] : '';
$nama_divisi = isset($_POST['nama_divisi']) ? $_POST['nama_divisi'] : '';
$tugas = isset($_POST['tugas']) ? $_POST['tugas'] : '';


if ($id && $nama_divisi && $tugas) {

    $conn = get_connection();

    // SQL untuk update data divisi
    $sql = "UPDATE divisi SET nama_divisi= ?, tugas = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssi", $nama_divisi, $tugas, $id);
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
} else {
    echo "berhentiko error nahhhhh";
}
?>