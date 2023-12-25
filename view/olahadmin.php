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
    <title>daftar admin</title>
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
    <link rel="stylesheet" href="../assets/modules/apexcharts/apexcharts.css">
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
                            <a href="dashAdmin.php">
                                <i class='bx bxs-user icon'></i> Akun
                            </a>
                        </li>
                        <li>
                            <a href="olahuser.php">
                                <i class='bx bxs-pen icon'></i> olah user
                            </a>
                        </li>
                        <li>
                            <a href="olahadmin.php" class="active">
                                <i class='bx bxs-pen icon'></i> olah admin
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
                        <p class="fs-5">DATA ADMIN TI C</p>
                        <div class="container text-center mt-3">
                            <div class="table-responsive">
                                <table class="table table-none">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>nama</th>
                                            <th>email</th>
                                            <th>foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include "../model/database.php";
                                    $db = new database();

                                    //pagination
                                    $ambilData = mysqli_query($conn, "SELECT * FROM user_login where role ='Admin'");
                                    $jumlahdata = 5;
                                    $totalData = mysqli_num_rows($ambilData);
                                    $jumlahPage = ceil($totalData / $jumlahdata);

                                    if (isset($_GET['halaman'])) {
                                        $halamaAktif = $_GET['halaman'];
                                    } else {
                                        $halamaAktif = 1;
                                    }
                                    $dataAwal = ($halamaAktif * $jumlahdata) - $jumlahdata;
                                    $jumlahLink = 3;
                                    if ($halamaAktif >  $jumlahLink) {
                                        $start_number = $halamaAktif - $jumlahLink;
                                    } else {
                                        $start_number = 1;
                                    }
                                    if ($halamaAktif < ($jumlahPage - $jumlahLink)) {
                                        $end_number = $halamaAktif + $jumlahLink;
                                    } else {
                                        $end_number = $jumlahPage;
                                    }
                                    $ambilData_perhalaman = mysqli_query($conn, "SELECT * FROM user_login where role ='Admin' LIMIT $dataAwal,$jumlahdata");
                                    $no = 1 + $dataAwal;
                                    while ($s = mysqli_fetch_array($ambilData_perhalaman)) {
                                        $nama = $s['nama'];
                                        $email = $s['email'];
                                        $foto = $s['gambar'];
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td class="text-center"><?php echo $nama ?></td>
                                                <td class="text-center"><?php echo $email ?></td>
                                                <td class="text-center"><?php echo "<img src='../" . $foto . "' alt='Gambar' width='100'>" ?></td>
                                                <td>
                                                    <a href="../controller/proses_hapus_admin.php?id=<?php echo $s['id']; ?>&aksi=hapus" class="btn btn-danger" onclick="confirm('hapus data?')"><i class="fa fa-trash"></i></a>
                                                    <a href="edit_data_admin.php?id=<?php echo $s['id']; ?>" class="btn btn-warning" ><i class="fa fa-pen"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                        <?php if ($halamaAktif > 1) : ?>
                            <a href="?halaman=<?php echo $halamaAktif - 1 ?>">
                                &laquo;
                            </a>
                        <?php endif; ?>

                        <?php for ($i = $start_number; $i <= $end_number; $i++) : ?>

                            <?php if ($halamaAktif == $i) : ?>
                                <a href="?halaman=<?php echo $i ?>" style="color:white;background-color:skyblue; font-wight:bold; border-radius:5px;">
                                    <?php echo $i ?>
                                </a>
                            <?php else : ?>
                                <a href="?halaman=<?php echo $i ?>">
                                    <?php echo $i ?>
                                </a>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <?php if ($halamaAktif < $jumlahPage) : ?>
                            <a href="?halaman=<?php echo $halamaAktif + 1 ?>">
                                &raquo;
                            </a>
                        <?php endif; ?>
                        </table>
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

    <!-- Chart Js -->
    <script src="../assets/modules/apexcharts/apexcharts.js"></script>
    <script src="../assets/modules/charts/chart.min.js"></script>
    <script src="../assets/js/ui-chartjs.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/custom.js"></script>

</body>

</html>