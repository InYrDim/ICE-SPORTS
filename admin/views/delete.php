<?php
include '../../koneksi/connection.php';
$conn = get_connection();

if (isset($_GET['type'])) {
    $view_name = $_GET['type'];
    $nim = $_GET["nim"];
    
    if($view_name and $nim) {
        $sql = "DELETE FROM $view_name WHERE nim = ?";
        $statment = $conn->prepare($sql);
        $statment->bind_param('i', $nim);

        if ($statment->execute()) {
            echo "View '$view_name' deleted successfully.";
            header("Location: ../views.php");
        } else {
            echo "Error deleting view: " . $conn->error;
        }
        echo $nim;

    } else {
        $view_name = $conn->real_escape_string($view_name);
        $drop_view_query = "DROP VIEW IF EXISTS `$view_name`";

        if ($conn->query($drop_view_query) === TRUE) {
            echo "View '$view_name' deleted successfully.";
            header("Location: ../views.php");
        } else {
            echo "Error deleting view: " . $conn->error;
        }
    }
}
else {
    echo "No view name provided.";
}