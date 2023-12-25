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

session_start();
$loggedInUserID = $_SESSION['id'];

// Pastikan form telah di-submit dan data telah diterima
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);

    // Lakukan query untuk melakukan update data ke dalam database
    $sql = "UPDATE user_login SET nama='$nama', email='$email',password='$password' WHERE id = $loggedInUserID"; // Anda harus menyesuaikan query ini dengan struktur tabel dan field yang benar

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil diperbarui')</script>";
        header("location:../view/dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
