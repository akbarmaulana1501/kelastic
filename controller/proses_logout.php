<?php
// Mulai atau lanjutkan sesi
session_start();

// Menghapus semua variabel sesi
session_unset();

// Menghancurkan sesi
session_destroy();

// Arahkan pengguna kembali ke halaman login atau halaman lain yang diinginkan
header("Location: ../view/index.php"); // Ganti login.php dengan halaman login atau halaman lain yang diinginkan
exit();
?>