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
	<title>Dashboard admin</title>
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
							<a href="dashAdmin.php" class="active">
								<i class='bx bxs-user icon'></i> Akun
							</a>
						</li>
						<li>
							<a href="olahuser.php">
								<i class='bx bxs-pen icon'></i> Olah data
							</a>
						</li>
						<li>
							<a href="olahadmin.php">
								<i class='bx bxs-pen icon'></i> Olah Admin
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
						<p class="fs-5">DATA DIRI</p>
						<div class="container text-center mt-3">
							<div class="col">
								<?php
								session_start(); // Mulai sesi

								// Pastikan koneksi berhasil
								if (!$conn) {
									die("Koneksi database gagal: " . mysqli_connect_error());
								}

								if (isset($_SESSION['id'])) {
									$user_id = $_SESSION['id'];

									// Mendapatkan data dari database hanya untuk pengguna yang login
									$query = "SELECT email, nama, gambar FROM user_login WHERE id = $user_id"; // Sesuaikan dengan struktur tabel dan kolom kamu
									$result = mysqli_query($conn, $query);

									// Jika query berhasil dijalankan
									if ($result && mysqli_num_rows($result) > 0) {
										// Output data dari setiap baris
										while ($row = mysqli_fetch_assoc($result)) {
											echo "<img src='../" . $row["gambar"] . "' alt='Gambar' width='200'><br> Email: " . $row["email"] . " <br> Nama: " . $row["nama"] . " <br>";
											// Sesuaikan HTML di atas sesuai kebutuhanmu, contoh menampilkan gambar dengan tag <img>
										}
									} else {
										echo "Tidak ada data untuk pengguna yang login.";
									}
								} else {
									echo "Pengguna belum login.";
								}

								// Tutup koneksi
								mysqli_close($conn);
								?>

							</div>
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