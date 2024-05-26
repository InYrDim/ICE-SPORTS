<?php
include '../../koneksi/connection.php';

$conn = get_connection();

$id = $_GET["id"];

$sql = "DELETE FROM tempat WHERE id_tempat = ?";
$statment = $conn->prepare($sql);
$statment->bind_param('i', $id);

if($statment->execute()) {
    echo "Record deleted succesfully";
    header("Location: ../../admin/tables.php"); 
} else {
    echo "Error deleting record:" . $statment->error;
}

$statment->close();
$conn->close();