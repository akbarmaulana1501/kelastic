<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "tic";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Pastikan form telah di-submit dan data telah diterima
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['role'];
    $id = $_POST['id'];

    $sql = "UPDATE user_login SET role='$role' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil diperbarui')</script>";
        header("location:../view/olahuser.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
