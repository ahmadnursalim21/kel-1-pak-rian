<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/icon.png">

    <link rel="stylesheet" href="<?= base_url('bootstrap/dist/css/bootstrap.css') ?>">
    <style>
        .navbar {
            z-index: 100;
            margin-bottom: 200px;
        }

        .hero {
            margin-top: 100px;
        }

        .feature-card {
            background-color: #f8f9ff;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .feature-icon img {
            width: 40px;
            height: 40px;
        }

        .feature-title {
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .feature-text {
            color: #555;
            font-size: 0.9rem;
        }

        .price-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            background-color: #fff;
            margin-bottom: 30px;
        }

        .price-card img {
            width: 100%;
            max-width: 300px;
            margin: auto;
        }

        .price-card h5 {
            color: #666;
            margin: 15px 0 10px;
        }

        .price-card .price {
            font-weight: bold;
            color: #333;
        }

        .price-card .price .old-price {
            text-decoration: line-through;
            color: #666;
        }

        .price-card .new-price {
            font-size: 2rem;
            color: #3258e9;
        }

        .btn-primary {
            background-color: #3258e9;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #2747c9;
        }

        .gambar {
            width: 150px;
        }

        .carousel-item img {
            max-height: 500px;
            object-fit: contain;
            margin: 0 auto;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black;
            border-radius: 50%;
        }


        .testimonial-card {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin: 15px;
        }

        .profile-pic {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
            border: 5px solid #f0f0f0;
        }

        .stars {
            color: gold;
            margin-top: 5px;
        }

        .quote {
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }

        .sub-title {
            font-size: 14px;
            color: #2a75e0;
            margin-bottom: 10px;
        }

        .text-description {
            font-size: 14px;
            color: #555;
            line-height: 1.5;
        }

        .icon-heart {
            color: #000;
            margin-right: 5px;
        }


        /* footer */
        footer {
            background-color: #f9f9f9;
            padding: 30px 0;
            color: #333;
        }

        .footer-logo {
            width: 150px;
        }

        .footer-title {
            font-weight: bold;
            font-size: 16px;
        }

        .footer-social a {
            margin: 0 10px;
            color: #333;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .footer-social a:hover {
            color: #007bff;
        }

        .footer-links a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #007bff;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light position-fixed top-0 w-100">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="<?= base_url('images/logo.png') ?>" alt="" class="gambar">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#program">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimoni">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('blog') ?>">Blog</a>
                        </li>

                    </ul>
                    <button class="btn btn-outline-success mx-10 active" type="submit">Masuk</button>
                </div>
            </div>
        </nav>

        <div class="hero-section hero mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h1>Solusi Cepat<br>Paham Belajar <span class="highlight">Polri</span></h1>
                        <p class="mt-3">Apta School Learning App merupakan solusi teman belajar yang bikin kamu cepat
                            paham
                        </p>
                        <div>
                            <a href="#" class="btn btn-pink text-white px-4 py-2 me-2"
                                style="background-color: #ff4081;">Daftar</a>
                            <a href="#" class="btn btn-link text-black">atau Masuk</a>
                        </div>
                        <p class="mt-3"><span class="text-warning">★★★★★</span> (rating dari <strong>20,256</strong>
                            pengguna)</p>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <img src="<?= base_url('images/1-hero.png') ?>" alt="App Preview" class="img-fluid gambarHp">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- CONTENT -->

    <section class="container">
        <div class="mx-auto text-center w-50">
            <h3>Layanan Unggulan</h3>
            <h1>Kenapa Kamu harus harus</h1>
            <p> bimbel di Apta Schoool</p>
            <p>Apa yang membuat Apta School bisa meluluskan banyak penggunanya menuju tempat impian seperti <b> UI, ITB,
                    PKN
                    STAN, IPDN, POLRI, Kedinasan Lain, sampai dengan lulus CPNS? </b></p>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-3 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="https://img.icons8.com/fluency/48/lock.png" alt="Lock Icon">
                        </div>
                        <div class="feature-title">Secret Formula</div>
                        <div class="feature-text">
                            Kami mempunyai secret formula dalam memecahkan soal berbasis trik cepat dan pendalaman
                            konsep.
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="https://img.icons8.com/fluency/48/computer.png" alt="Computer Icon">
                        </div>
                        <div class="feature-title">Learning App</div>
                        <div class="feature-text">
                            Kami menggunakan teknologi tinggi untuk menunjang proses pembelajaran, latihan, dan
                            evaluasi.
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="https://img.icons8.com/fluency/48/positive-dynamic.png" alt="Chart Icon">
                        </div>
                        <div class="feature-title">Evaluasi</div>
                        <div class="feature-text">
                            Evaluasi secara realtime dapat diakses melalui learning app untuk mengukur sejauh mana
                            tingkat pemahaman pada suatu materi.
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-3 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="https://img.icons8.com/fluency/48/play.png" alt="Play Icon">
                        </div>
                        <div class="feature-title">Video Belajar</div>
                        <div class="feature-text">
                            Rasakan belajar lebih efektif dan interaktif dengan video belajar tiap sub bab pada learning
                            app Apta School.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="container">
        <div class="mx-auto text-center w-50">

            <p id="program">Program Bimbel</p>
            <h1>
                Program Unggulan
                Bimbel Online Apta School
            </h1>
            <p>Berikut adalah beberapa program bimbingan belajar online bersama Apta School. <b>Pilih program sesuai
                    dengan kebutuhan kamu! </b>
            </p>
        </div>

        <div class="container py-5">
            <div class="row justify-content-center">
                <!-- Card Loop (7 Cards) -->
                <!-- 1 -->
                <div class="col-md-4 col-lg-3">
                    <div class="card price-card">
                        <img src="<?= base_url('images/1-bimbel-cpns.png') ?>" alt="Bimbel CPNS">
                        <h5>Bimbel Online CPNS</h5>
                        <div class="price">
                            <span class="old-price">Rp699.000</span>
                            <div class="new-price">Rp149rb</div>
                        </div>
                        <p class="text-muted mb-1">Paket 1 Tahun</p>
                        <ul class="list-unstyled my-3">
                            <li>Mentoring Setiap Hari</li>
                            <li>50+ Try Out SKD Sistem CAT</li>
                            <li>Video Pembelajaran Tiap Sub Bab</li>
                        </ul>
                        <a href="#" class="btn btn-primary">SELENGKAPNYA</a>
                    </div>
                </div>
                <!-- Card diulang hingga 7 -->
                <!-- 2 -->
                <div class="col-md-4 col-lg-3">
                    <div class="card price-card">
                        <img src="<?= base_url('images/2-bimbel-pppk.png') ?>" alt="Bimbel CPNS">
                        <h5>Bimbel Online CPNS</h5>
                        <div class="price">
                            <span class="old-price">Rp699.000</span>
                            <div class="new-price">Rp149rb</div>
                        </div>
                        <p class="text-muted mb-1">Paket 1 Tahun</p>
                        <ul class="list-unstyled my-3">
                            <li>Mentoring Setiap Hari</li>
                            <li>50+ Try Out SKD Sistem CAT</li>
                            <li>Video Pembelajaran Tiap Sub Bab</li>
                        </ul>
                        <a href="#" class="btn btn-primary">SELENGKAPNYA</a>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-md-4 col-lg-3">
                    <div class="card price-card">
                        <img src="<?= base_url('images/3-bimbel-kedinasan.png') ?>" alt="Bimbel CPNS">
                        <h5>Bimbel Online CPNS</h5>
                        <div class="price">
                            <span class="old-price">Rp699.000</span>
                            <div class="new-price">Rp149rb</div>
                        </div>
                        <p class="text-muted mb-1">Paket 1 Tahun</p>
                        <ul class="list-unstyled my-3">
                            <li>Mentoring Setiap Hari</li>
                            <li>50+ Try Out SKD Sistem CAT</li>
                            <li>Video Pembelajaran Tiap Sub Bab</li>
                        </ul>
                        <a href="#" class="btn btn-primary">SELENGKAPNYA</a>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-md-4 col-lg-3">
                    <div class="card price-card">
                        <img src="<?= base_url('images/4-bimbel-BUMN.png') ?>" alt="Bimbel CPNS">
                        <h5>Bimbel Online CPNS</h5>
                        <div class="price">
                            <span class="old-price">Rp699.000</span>
                            <div class="new-price">Rp149rb</div>
                        </div>
                        <p class="text-muted mb-1">Paket 1 Tahun</p>
                        <ul class="list-unstyled my-3">
                            <li>Mentoring Setiap Hari</li>
                            <li>50+ Try Out SKD Sistem CAT</li>
                            <li>Video Pembelajaran Tiap Sub Bab</li>
                        </ul>
                        <a href="#" class="btn btn-primary">SELENGKAPNYA</a>
                    </div>
                </div>
                <!-- 5 -->
                <div class="col-md-4 col-lg-3">
                    <div class="card price-card">
                        <img src="<?= base_url('images/5-bimbel-POLRI.png') ?>" alt="Bimbel CPNS">
                        <h5>Bimbel Online CPNS</h5>
                        <div class="price">
                            <span class="old-price">Rp699.000</span>
                            <div class="new-price">Rp149rb</div>
                        </div>
                        <p class="text-muted mb-1">Paket 1 Tahun</p>
                        <ul class="list-unstyled my-3">
                            <li>Mentoring Setiap Hari</li>
                            <li>50+ Try Out SKD Sistem CAT</li>
                            <li>Video Pembelajaran Tiap Sub Bab</li>
                        </ul>
                        <a href="#" class="btn btn-primary">SELENGKAPNYA</a>
                    </div>
                </div>
                <!-- 6 -->
                <div class="col-md-4 col-lg-3">
                    <div class="card price-card">
                        <img src="<?= base_url('images/6-bimbel-PSIKOTES.png') ?>" alt="Bimbel CPNS">
                        <h5>Bimbel Online CPNS</h5>
                        <div class="price">
                            <span class="old-price">Rp699.000</span>
                            <div class="new-price">Rp149rb</div>
                        </div>
                        <p class="text-muted mb-1">Paket 1 Tahun</p>
                        <ul class="list-unstyled my-3">
                            <li>Mentoring Setiap Hari</li>
                            <li>50+ Try Out SKD Sistem CAT</li>
                            <li>Video Pembelajaran Tiap Sub Bab</li>
                        </ul>
                        <a href="#" class="btn btn-primary">SELENGKAPNYA</a>
                    </div>
                </div>
                <!-- 7 -->
                <div class="col-md-4 col-lg-3">
                    <div class="card price-card">
                        <img src="<?= base_url('images/7-bimbel-UTBK.png') ?>" alt="Bimbel CPNS">
                        <h5>Bimbel Online CPNS</h5>
                        <div class="price">
                            <span class="old-price">Rp699.000</span>
                            <div class="new-price">Rp149rb</div>
                        </div>
                        <p class="text-muted mb-1">Paket 1 Tahun</p>
                        <ul class="list-unstyled my-3">
                            <li>Mentoring Setiap Hari</li>
                            <li>50+ Try Out SKD Sistem CAT</li>
                            <li>Video Pembelajaran Tiap Sub Bab</li>
                        </ul>
                        <a href="#" class="btn btn-primary">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="container">
        <div class="mx-auto text-center w-50">

            <p>Tampilan Learning App</p>
            <h1>Screenshot Learning App
                Bimbel Apta School</h1>
            <p>Tampilan Learning App Apta School yang menjadi teman belajar hebat kamu</p>
        </div>

        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="<?= base_url('images/1-sc.png') ?>" class="d-block w-100" alt="Slide 1">
                </div>
                <!-- Duplicate Slide 2 for demonstration -->
                <div class="carousel-item">
                    <img src="<?= base_url('images/2-sc.png') ?>" class="d-block w-100" alt="Slide 2">
                </div>
                <!-- Duplicate Slide 3 for demonstration -->
                <div class="carousel-item">
                    <img src="<?= base_url('images/3-sc.png') ?>" class="d-block w-100" alt="Slide 3">
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="mx-auto w-50 text-center">
            <p id="testimoni">Testimoni Program Bimbel</p>
            <h1>Respon positif pengguna Bimbel Apta School</h1>
            <p>Respon ❤ dari pengguna setia Bimbel Apta School</p>
        </div>


        <div class="container py-5">
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-5">
                    <div class="testimonial-card">
                        <img src="<?= base_url('images/woman-1.png') ?>" alt="Profile Picture" class="profile-pic">
                        <div class="quote">Puteri Adhelia Sandha</div>
                        <div class="sub-title">Lulus CPNS 2019</div>
                        <p class="text-description">
                            Alhamdulillah saya merasa sangat dipandu dengan baik dan benar tanpa suatu kekurangan
                            apapun.
                            Usaha memang tidak akan mengkhianati hasil, APTASCHOOL membantu saya dengan sangat baik.
                            Semoga kedepannya Apda bisa sukses selalu.
                        </p>
                        <div>
                            <i class="fa fa-heart icon-heart"></i><i class="fa fa-heart icon-heart"></i>
                        </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-5">
                    <div class="testimonial-card">
                        <img src="<?= base_url('images/young-man.png') ?>" alt="Profile Picture" class="profile-pic">
                        <div class="quote">Sindy Izza K</div>
                        <div class="sub-title">Lulus Kedinasan 2020</div>
                        <p class="text-description">
                            Terimakasih Apda School, soal latihan yang diberikan sangat membantu dalam proses belajar
                            dan lengkap beserta pembahasannya. Admin yang ramah selalu membantu menjawab pertanyaan.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->

    <footer>
        <div class="container">
            <div class="row">
                <!-- Informasi Sekolah -->
                <div class="col-md-4 mb-4">
                    <img src="<?= base_url('images/logo.png') ?>" alt="Apta School Logo" class="footer-logo mb-3">
                    <h5 class="footer-title">Apta School</h5>
                    <p>
                        Kotabumi Kota RT/RW 006/003<br>
                        Kel. Sindang Sari, Kec. Kotabumi,<br>
                        Kab. Lampung Utara, Lampung, 54316<br>
                        Indonesia
                    </p>
                    <p>
                        <i class="fas fa-phone-alt"></i> +62 851-4309-3323<br>
                        <i class="fas fa-envelope"></i> <a href="mailto:admin@aptaschool.com"
                            class="text-decoration-none">admin@aptaschool.com</a>
                    </p>
                </div>
                <!-- Sosial Media -->
                <div class="col-md-4 mb-4 text-center">
                    <h5 class="footer-title">Ikuti Apta School via sosial media</h5>
                    <div class="footer-social mt-3">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <!-- Privacy Policy dan Terms -->
                <div class="col-md-4 mb-4 text-end">
                    <h5 class="footer-title">Informasi</h5>
                    <div class="footer-links">
                        <p><a href="#">Privacy Policy</a></p>
                        <p><a href="#">Terms and Conditions</a></p>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Copyright -->
            <div class="text-center">
                <small>&copy; 2024 Apta School. All rights reserved.</small>
            </div>
        </div>
    </footer>
    <script src="<?= base_url('bootstrap/dist/js/bootstrap.js') ?>"></script>
</body>

</html>