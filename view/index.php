<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TI C neh boss</title>
    <link rel="icon" type="png" href="../assets/kacamata.png">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <style>
      /* Efek hover dengan :hover */
      .custom-btn:hover{
      background-color: #007bff;
      color: white;
    }
    /* Efek hover dengan kelas hoverable */
    .hoverable {
      transition: background-color 0.3s ease;
    }


    header {
    backdrop-filter: blur(10px); /* Atur tingkat blur yang diinginkan */
    -webkit-backdrop-filter: blur(10px); /* Untuk dukungan browser Safari */
    background-color: rgba(255, 255, 255, 0.5); /* Warna latar belakang dengan opasitas */
  }
  #home {
  padding-top: 30px; /* Sesuaikan dengan tinggi navbar Anda */
  }
  #about{
    padding-top: 30px;
  }
  #dokumen{
    padding-top: 30px;
  }
  .nav-link{
    color: black;
  }
  </style>
  <body>
      <header class="d-flex justify-content-center py-2 fixed-top">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a href="#home" class="nav-link custom-btn active" aria-current="page"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link custom-btn">Tentang</a>
          </li>
          <li class="nav-item">
            <a href="#dokumen" class="nav-link custom-btn">Dokumentasi</a>
          </li>
          <li class="nav-item">
            <a href="Login.php" class="nav-link custom-btn">Login</a>
          </li>
        </ul>
      </header>

    <!--Content-->
  
    <div id="home">
    <div class="px-4 py-5 my-5 text-center">
      <img
        class="d-block mx-auto mb-4"
        src="../assets/kacamata.png"
        alt=""
        width="150"
        height="150"
      />
      <h1 class="display-5 fw-bold">Teknik Informatika C</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
            Kelas TI C bukan hanya tentang kode dan algoritma, tapi juga tentang dampak yang diciptakan oleh teknologi. Mereka menggabungkan kecakapan teknis dengan pemikiran kritis dan empati untuk menciptakan solusi yang tak hanya mengagumkan secara teknis, tetapi juga membawa perubahan yang signifikan dalam masyarakat.
            Kisah kehebatan kelas TI C ini menginspirasi seluruh kampus. Mereka tidak hanya menjadi penuntut ilmu, tapi juga agen perubahan. Mereka memahami bahwa teknologi bukanlah tujuan akhir, tetapi alat untuk mewujudkan perubahan yang positif dalam dunia ini.
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <a type="button" class="btn btn-primary btn-lg px-4 gap-3" href="#about">
            Selengkapnya
          </a>
        </div>
      </div>
    </div>
  </div>
    
    <div id="about">
      <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Tentang Kami</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">
            Kelas TI C ini dipandu oleh seorang dosen yang luar biasa, Bapak Rahmat Suhatman,S.T,M.T,. Beliau bukan hanya seorang pengajar yang ulung namun juga seorang yang sangat menginspirasi. Bapak Rahmat Suhatman,S.T,M.T, memiliki cara yang unik untuk mengajar, dia memadukan teori dengan aplikasi praktis yang relevan dalam dunia nyata.

            Setiap pertemuan kelas TI C bukanlah sekadar kuliah biasa. Bapak Rahmat Suhatman,S.T,M.T, sering kali membawa studi kasus menarik yang mengaitkan teori dengan implementasi di industri. Misalnya, mereka mempelajari tentang algoritma yang digunakan dalam kecerdasan buatan sambil menganalisis bagaimana algoritma serupa digunakan dalam aplikasi medis revolusioner yang sedang dikembangkan.
            
            Tidak hanya itu, mahasiswa dalam kelas TI C ini juga aktif dalam kegiatan di luar jam kuliah. Mereka membentuk klub pemrograman di mana mereka berbagi pengetahuan, mengadakan hackathon, serta terlibat dalam proyek-proyek inovatif.
          </p>
        </div>
        <div class="img-fluid">
        <img src="../assets/PAS.jpg" width="50%" alt="">
      </div>
      </div>
    </div>

    <div id="dokumen">
      <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Dokumentasi Kelas</h1>
        <div class="col-lg-6 mx-auto">
          <div class="album py-5 bg-body-tertiary">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/foto_bersama.jpg" alt="?">
                    <div class="card-body">
                      <p class="card-text">Ini merupakan dokumentasi saat kelas Animasi di laboratorium motion capture</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/foto_es.jpg" alt="?">
                    <div class="card-body">
                      <p class="card-text">dokumentasi Enabling Skill di auditorium 3 minggu yang lalu</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/foto_volley.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">dokumentasi latihan volly kelas TIC sebelum pertandingan ITSA CUP VOLLEY 2022</p>
                      
                    </div>
                  </div>
                </div>
        
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/bukber2022.jpg" alt="?">
                    <div class="card-body">
                      <p class="card-text">ini merupakan foto buka bersama kelas TIC di rumah teman kami sabila astari</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/struktur_data.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">dokumetasi setelah ujian akhir semester pelajaran Struktur data,foto ini diambil setelah persentasi project</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/data_warehouse.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">dokumetasi setelah ujian akhir semester pelajaran Data warehouse,foto ini diambil setelah persentasi project</p>
                      
                    </div>
                  </div>
                </div>
        
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/pbo.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">dokumetasi setelah ujian akhir semester pelajaran pemrograman berorientasi object,foto ini diambil setelah persentasi project</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/tatapmuka1.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">foto ini diambil setelah corona mulai membaik dan tatap muka kembali di lakukan di Politeknik Caltex Riau</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/bukber2021.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">ini dokumentasi buka bersama TIC pada puasa tahun 2021 lalu</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/SO.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">ini dokumentasi pembelajaran pertemuan 16 setelah belajar SO bersama Wali dosen kami pak Rahmat Suhatman,S.T.,M.T.,</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/futsal.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">ini merupakan tim Futsal TIC pada acara ITSA CUP FUTSAL2021</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/pertemuan_hima1.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">dokumentasi pertemuan hima di stadion rumbai</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/ngumpul_ramah.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">ini merupakan kegiatan pertemuan antar kelas TI angkatan 21 untuk mempererat pertemanan antar kelas</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/fpg17.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">ini merupakan Farewell Party Generasi 17 yang dirayakan di mie jagoan</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/temu_katingg20.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">ini merupakan temu ramah bersama kating G20 TIC</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/makan_makan.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">dokumentasi makan malam bersama warga TIC setelah pulang pertemuan HIMA</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/pertemuan_hima2.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">ini merupakan pertemuan HIMA ke 2 di stadion rumbai</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="../assets/makrab.jpg" alt="">
                    <div class="card-body">
                      <p class="card-text">ini merupakan dokumentasi malam keakraban seluruh kelas TI angkatan 21,tujuannya untuk mempererat persaudaraan tiap kelas dan pertemanan</p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script>
      // Ambil semua elemen anchor dengan kelas 'nav-link'
      var navLinks = document.querySelectorAll('.nav-link');
    
      // Loop melalui setiap elemen anchor
      navLinks.forEach(function(link) {
        // Tambahkan event listener untuk setiap link
        link.addEventListener('click', function() {
          // Hapus kelas 'active' dari semua link saat ini
          navLinks.forEach(function(item) {
            item.classList.remove('active');
          });
    
          // Tambahkan kelas 'active' ke link yang diklik
          link.classList.add('active');
        });
      });

      // Fungsi untuk scroll ke bagian Home setelah halaman dimuat
    window.onload = function() {
      var hash = window.location.hash;
      if (hash !== '#home') {
        window.location.hash = '#home';
      }
      else {
        // Scroll ke bagian Home
        var homeSection = document.getElementById('home');
        if (homeSection) {
          homeSection.scrollIntoView();
        }
      }
    };
    </script>
  </body>
</html>
