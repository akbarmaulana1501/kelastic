<?php
session_start();
// Membuat koneksi ke database (gantilah dengan informasi koneksi sesuai dengan database Anda)
$servername = "localhost";
$database = "tic";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari formulir login
$email = $_POST["email"];
$password = $_POST["pass"];

// Melakukan query ke database untuk memeriksa apakah data login cocok
$sql = "SELECT id,password,role FROM user_login WHERE email = '$email'";
$result = $conn->query($sql);


// Memeriksa hasil query
if ($result->num_rows > 0) {
    // Pengguna ditemukan, verifikasi kata sandi
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Autentikasi berhasil, lanjutkan ke halaman yang sesuai berdasarkan peran pengguna
        if ($row['role'] == 'Admin') {
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $row['id'];
            header("Location: ../view/dashAdmin.php");
        } else {
            // Redirect ke halaman pengguna biasa
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $row['id'];
            header("Location:../view/dashboard.php");
        }
    } else {
        // Kata sandi salah
        echo "Invalid password";
    }
} else {
    // Pengguna tidak ditemukan
    echo "User not found";
}

// Menutup koneksi
$conn->close();
?>