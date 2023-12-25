<?php
$conn = mysqli_connect("localhost", "root", "", "tic");
?>

<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/tanah.png">
    <title>Edit data</title>
    <link rel="icon" type="png" href="../assets/kacamata.png">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../assets/modules/bootstrap-5.1.3/css/bootstrap.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="../assets/modules/fontawesome6.1.1/css/all.css">
    <!-- Boxicons CSS-->
    <link rel="stylesheet" href="../assets/modules/boxicons/css/boxicons.min.css">
    <!-- Apexcharts  CSS -->
</head>
<style>
    .warna {
        background-color: yellow;
        border-radius: 10px;
    }

    .warna2 {
        background-color: yellowgreen;
        border-radius: 10px;
    }

    .warna3 {
        background-color: skyblue;
        border-radius: 10px;
    }

    .justified-text {
        text-align: justify;
    }
</style>

<body>

    <!--Topbar -->
    <div class="topbar transition">
        <div class="bars">
            <button type="button" class="btn transition" id="sidebar-toggle">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <!--Sidebar-->
        <div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
            <div class="sidebar-content">
                <div id="sidebar">
                    <!-- Logo -->
                    <div class="logo">
                        <h2 class="mb-0"><img src="../assets/kacamata.png">TIC</h2>
                    </div>

                    <ul class="side-menu">
                        <li>
                            <a href="dashboard.php">
                                <i class='bx bxs-user icon'></i> Akun
                            </a>
                        </li>
                        <li>
                            <a href="../controller/proses_logout.php">
                                <i class='bx bxs-exit icon'></i> Logout
                            </a>
                        </li>

                        <!-- Divider-->

                        <!-- Divider-->
                        <!-- Divider-->
                    </ul>

                </div>

            </div>
        </div>
    </div><!-- End Sidebar-->


    <div class="sidebar-overlay"></div>

    <!--Content Start-->
    <div class="content-start transition">
        <div class="container-fluid dashboard">
            <div class="content-header">
                <div class="row">
                    <div class="col">
                        <img src="../assets/logo_pcr.png" alt="pcr" width="25%" class="float-end">
                    </div>
                </div>
                <h1 class="mt-3">Dashboard</h1>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
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

                        // Query untuk mengambil informasi pengguna berdasarkan ID yang sedang login
                        $sql = "SELECT nama, email FROM user_login WHERE id = $loggedInUserID";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data dari setiap baris
                            while ($row = $result->fetch_assoc()) {
                                $nama = $row["nama"];
                                $email = $row["email"];
                            }
                        } else {
                            echo "Tidak ada data pengguna";
                        }

                        // Tutup koneksi ke database
                        $conn->close();
                        ?>
                        <p class="fs-5">EDIT DATA DIRI</p>
                        <div class="container text-center mt-3">
                            <form action="../controller/proses_update.php" method="post">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="name@example.com">
                                    <label for="floatingInput">Email kampus</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" placeholder="name@example.com">
                                    <label for="floatingInput">Nama</label>
                                </div>
                                <div class="form-floating mb-3" style="position: relative;">
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                                    <label for="floatingPassword">Password Baru</label>
                                    <i class="toggle-password fas fa-eye " onclick="togglePassword()" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;font-size: 1.2em;"></i>
                                </div>
                                <div class="form-floating mb-3" style="position: relative;">
                                    <input type="password" class="form-control" id="konf_pass" name="konf_pass" placeholder="konfirmasi password">
                                    <label for="floatingPassword">Konfirmasi Password</label>
                                    <i class="toggle-password2 fas fa-eye " onclick="togglePassword2()" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;font-size: 1.2em;"></i>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary w-50">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="footer">
            <div class="float-start">
                <p>2023 &copy; TIC | Teknologi Informasi</p>
            </div>

        </div>

    </footer>


    <!-- Preloader -->
    <div class="loader">
        <div class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Loader -->
    <div class="loader-overlay"></div>

    <!-- General JS Scripts -->
    <script src="../assets/js/atrana.js"></script>

    <!-- JS Libraies -->
    <script src="../assets/modules/jquery/jquery.min.js"></script>
    <script src="../assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/modules/popper/popper.min.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("pass");
            var eyeIcon = document.querySelector(".toggle-password");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                // Ganti ikon mata untuk menunjukkan password
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                // Ganti ikon mata untuk menyembunyikan password
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }

        function togglePassword2() {
            var passwordField = document.getElementById("konf_pass");
            var eyeIcon = document.querySelector(".toggle-password2");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                // Ganti ikon mata untuk menunjukkan password
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                // Ganti ikon mata untuk menyembunyikan password
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>

</html>