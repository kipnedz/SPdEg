<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap-5.1.1-dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <!-- MY Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- mycss -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>SPdegg</title>
    <style>
    .navbar {
        background: linear-gradient(90deg, #ffce48, #ff8248);
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="pembuka.php">SPdegg</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <!-- Tambahkan ms-auto untuk memindahkan elemen ke kanan -->
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="pengembang.php"><strong>Pengembang/About</strong></a>
                    <a class="nav-link" href="petunjuk.php"><strong>Petunjuk Pengguna</strong></a>
                    <a class="nav-link" href="#penyembuhan"><strong>Gejala & Solusi</strong></a>
                    <a class="nav-link" href="#contact"><strong>Contact</strong></a>
                    <a class="nav-link" href="diagnosa/index.php"><strong>Diagnosis</strong></a>

                    <a class="btn btn-primary btn-lg lift ms-3" href="logout.php"><strong>logout</strong></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- akhir navbar -->


    <!-- Main -->
    <section class="pt-4 pt-md-11">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">

                    <!-- Image -->
                    <img src="images/bacgroun1.png" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 " alt="dokter"
                        data-aos="fade-up" data-aos-delay="100">

                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 " data-aos="fade-up" data-aos-duration="300">

                    <!-- Heading -->
                    <h1 class="display-4 text-center text-md-start">
                        Welcome to <span class="text-primary titel"></span>. <br>
                        Telur yg Berkualitas untuk hidup sehat.
                    </h1>

                    <!-- Text -->
                    <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
                        choose high quality eggs for a healthy life.
                    </p>

                    <!-- Buttons -->


                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
    <!-- Akhir Main -->

    <!-- Quotes -->
    <section class="py-8 py-md-11 border-bottom mt-5">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 " data-aos="fade-right" data-aos-delay="200">
                    <h3>
                        Quotes
                    </h3>
                    <!-- Text -->
                    <blockquote class="blockquote text-muted">
                        <p class="mb-0">"Hidup Sehat dengan mengkomsumsi Telur yang Berkualitas."</p>
                        </br>

                    </blockquote>
                </div>
            </div> <!-- / .row -->

        </div> <!-- / .container -->
    </section>

    <!-- Tentang -->
    <section class="pt-8 pt-md-11 bg-gradient-light-white pt-5" id="tentang">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">

                    <!-- Image -->
                    <img src="images/icon.png" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 " alt="dokter"
                        data-aos="fade-left" data-aos-delay="100">

                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 " data-aos="fade-left" data-aos-duration="300">
                    <h2 class="text-center">TELUR</h2>
                    <p class="text-justify text-muted tentang">
                        Telur adalah salah satu bahan pangan yang banyak dikonsumsi oleh masyarakat, karena kandungan
                        gizi yang tinggi dan harganya yang relatif terjangkau. Namun, kualitas telur sangat memengaruhi
                        keamanan dan kepuasan konsumen. Oleh karena itu, penting untuk memiliki metode yang tepat untuk
                        mendiagnosis kualitas telur agar dapat menghindari telur yang rusak atau tidak layak konsumsi.

                        Sistem pakar diagnosa kualitas telur merupakan sebuah aplikasi berbasis teknologi yang bertujuan
                        untuk membantu dalam menilai kualitas telur secara otomatis menggunakan pengetahuan dan
                        pengalaman dari para ahli di bidangnya. Dengan menggunakan sistem ini, proses pemeriksaan
                        kualitas telur menjadi lebih cepat, akurat, dan efisien.

                        Sistem pakar untuk diagnosa kualitas telur bekerja dengan menganalisis berbagai indikator
                        kualitas, seperti bentuk telur, tekstur cangkang, warna kuning telur, serta kesegaran telur itu
                        sendiri. Berdasarkan data input yang diberikan, sistem pakar dapat memberikan diagnosis apakah
                        telur tersebut layak untuk dikonsumsi atau tidak.

                        Dengan perkembangan teknologi dan pemanfaatan sistem pakar, proses pemeriksaan telur dapat
                        dilakukan dengan lebih objektif dan dapat diakses dengan mudah oleh peternak, pedagang, ataupun
                        konsumen. Implementasi sistem pakar ini diharapkan dapat meningkatkan kualitas produk telur di
                        pasaran, memberikan manfaat ekonomi bagi pelaku usaha, serta menjamin keamanan konsumsi telur
                        bagi masyarakat.

                        Melalui sistem pakar ini, diharapkan ada solusi yang lebih baik dalam menjaga standar kualitas
                        telur yang aman dan sehat.
                    </p>
                </div>

            </div>
        </div> <!-- / .row -->
        </div> <!-- / .container -->

        <!-- shape -->
        <div class="position-relative">
            <div class="shape shape-bottom shape-fluid-x text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#f1f4f8 " fill-opacity="1"
                        d="M0,128L60,149.3C120,171,240,213,360,240C480,267,600,277,720,240C840,203,960,117,1080,69.3C1200,21,1320,11,1380,5.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                    </path>
                </svg>
            </div>
        </div>
    </section>

    <!-- penyembuhan -->
    <section class="pt-8 pt-md-11 bg-gradient-abuabu border-bottom pb-5 pt-3" id="penyembuhan">
        <div class="container text-left">
            <div class="bgpenyembuhan" data-aos="flip-left">
                <img src="images/t.png" alt="">
            </div>
            <!-- Psikoterapi -->
            <div class="info">
                <a class="btn btn-primary" data-toggle="collapse" href="#Psikoterapi" role="button"
                    aria-expanded="false" aria-controls="Psikoterapi">
                    <i class="fas fa-user-md"></i> Kondisi Cangkang Telur
                </a>
                <div class="collapse show" id="Psikoterapi">
                    <div class="card card-body">
                        <li class="text-justify">Retak atau pecah:</li>
                        <li class="text-left">Berbintik atau bercak putih</li>
                        <li class="text-left">Pengalaman yang membuat tertekan</li>
                        <li class="text-left">Kotoran menempel pada cangkang</li>
                        <li class="text-left">Warna cangkang tidak merata</li>
                    </div>
                </div>
            </div>
            <!-- Obat Antidepresan -->
            <div class="info">
                <a class="btn btn-primary mt-2" data-toggle="collapse" href="#Berat dan Ukuran Telur" role="button"
                    aria-expanded="false" aria-controls="Berat dan Ukuran Telur">
                    <i class="fas fa-pills"></i> Berat dan Ukuran Telur
                </a>
                <div class="collapse show" id="Obat">
                    <div class="card card-body">

                        <li class="text-left">Terasa terlalu ringan</li>
                        <li class="text-left">Tidak sesuai dengan standar ukuran</li>

                    </div>
                </div>
            </div>
            <!-- Terapi kejut listrik -->
            <div class="info">
                <a class="btn btn-primary mt-2" data-toggle="collapse" href="#Terapi" role="button"
                    aria-expanded="false" aria-controls="Psikoterapi">
                    <i class="fas fa-heartbeat"></i> Kondisi Saat Diterawang (Candling Test)
                </a>
                <div class="collapse show" id="Terapi">
                    <div class="card card-body">
                        <li class="text-left">Kuning telur tampak kabur atau bergeser</li>
                        <li class="text-left">Ada noda darah di dalam telur</li>
                        <li class="text-left">Rongga udara besar</li>
                    </div>
                </div>
            </div>
            <!-- Komplikasi Depresi -->
            <div class="info">
                <a class="btn btn-primary mt-2" data-toggle="collapse" href="#Komplikasi" role="button"
                    aria-expanded="false" aria-controls="Psikoterapi">
                    <i class="fas fa-diagnoses"></i> Kondisi Saat Dipecahkan
                </a>
                <div class="collapse show" id="Komplikasi">
                    <div class="card card-body">
                        <li class="text-left">Kuning telur tidak bulat atau melebar</li>
                        <li class="text-left">Putih telur encer dan menyebar</li>
                        <li class="text-left">Ada noda darah atau benda asing</li>
                    </div>
                </div>
            </div>
            <!-- Pencegahan Depresi -->
            <div class="info">
                <a class="btn btn-primary mt-2" data-toggle="collapse" href="#Pencegahan" role="button"
                    aria-expanded="false" aria-controls="Psikoterapi">
                    <i class="fas fa-brain"></i> Kesegaran Telur (Uji Apung)
                </a>
                <div class="collapse show" id="Pencegahan">
                    <div class="card card-body">


                        <li class="text-left">Tenggelam (segar)</li>
                        <li class="text-left">Mengapung sebagian (tidak segar)</li>
                        <li class="text-left">Mengapung penuh (rusak)</li>
                    </div>
                </div>
            </div>


        </div> <!-- / .container -->

    </section>

    <!-- Contact -->
    <section class="" id="contact">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center footer">

                    <h3></h3>
                    <p>Sistem Pakar</p>
                    <p>"Sistem ini kami dedikasikan untuk masyarakat yang ingin mengetahui kualitas telur yang didukung
                        dengan literatur yang tepat."</p>
                    <div class="contactme">
                        <a href="mailto:doromerouno@gmail.com" class=" h6 fw-bold text-uppercase">Contact Me</a>
                    </div>
                    <div class="medsos">
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-globe"></i></a>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->
        </div>
    </section>

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
    var title = {
        strings: ['SISTEM PAKAR DIAGNOSA KUALITAS TELUR'],
        typeSpeed: 40,
        backSpeed: 20,
        loop: true,
        backDelay: 3000,
    };

    var typed = new Typed('.titel', title);

    var counting = {
        strings: ['67%'],
        typeSpeed: 60,
        backSpeed: 60,
        loop: true,
        backDelay: 10000,
    };

    var typed = new Typed('.counting', counting);
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    const info = document.querySelectorAll('.info');

    info.forEach((infor, i) => {
        infor.dataset.aos = 'fade-right';
        infor.dataset.aosDelay = i * 100;
        infor.dataset.aosDuration = 1000;
    })

    AOS.init({
        once: true,
        duration: 1000,
    });
    </script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/jquery/slim.min.js"></script>
    <script src="assets/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>