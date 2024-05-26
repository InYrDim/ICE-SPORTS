<?php
function get_connection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_ice_sports";

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $database);

    // Cek koneksi
    if ($conn->connect_error) {
        die("koneksi gagal: " . $conn->connect_error);
    }
    return $conn;
}

get_connection();