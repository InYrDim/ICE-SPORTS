<?php
include '../../koneksi/connection.php';
$conn = get_connection();

$view = $_POST["view"];
$nim = $_POST["nim"];
$name = $_POST["nama"];
$role = $_POST["role"];
$kelas = $_POST["kelas"];
$angkatan = $_POST["angkatan"];

$sql = "UPDATE $view SET 
nama = ?, 
role = ?, 
kelas = ?, 
angkatan = ? 
WHERE nim = ?";

$statment = $conn->prepare($sql);
$statment->bind_param("ssssi",  $name, $role, $kelas, $angkatan, $nim);

if($statment->execute()) {
    echo "Data Update Succesfully";          
    header("Location: ../views.php");
} else {
    echo "Error updating record:" . $statment->error;
}

$statment->close();
$conn->close();