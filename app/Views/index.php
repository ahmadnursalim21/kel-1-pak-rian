<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <link rel="stylesheet" href="<?= base_url('bootstrap/dist/css/bootstrap.css') ?>">
    <style>
    .navbar {
        z-index: 100;
        margin-bottom: 200px;
    }

    .hero {
        margin-top: 100px;
    }

    .gambar {
        width: 150px;
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
                        <img src="<?= base_url('images/Mockup-HP-2.webp') ?>" alt="App Preview" class="img-fluid">
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
        <div class="container">
            <div class="d-flex gap-2 flex-column flex-md-row">
                <div class="card">
                    <div class="d-block">
                        <div>
                            <img src="https://i.pinimg.com/736x/5d/f4/18/5df418287735c4bc97bc8e4100d0a451.jpg"
                                class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of
                                the
                                card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="d-block">
                        <div>
                            <img src="https://i.pinimg.com/736x/5d/f4/18/5df418287735c4bc97bc8e4100d0a451.jpg"
                                class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of
                                the
                                card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="d-block">
                        <div>
                            <img src="https://i.pinimg.com/736x/5d/f4/18/5df418287735c4bc97bc8e4100d0a451.jpg"
                                class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of
                                the
                                card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="d-block">
                        <div>
                            <img src="https://i.pinimg.com/736x/5d/f4/18/5df418287735c4bc97bc8e4100d0a451.jpg"
                                class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of
                                the
                                card's content.</p>
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

        <div class="container d-grid">
            <div class="row gap-2 justify-content-center">
                <div class="col col-1 col-sm-3">
                    <div class="card">
                        <div class="d-block">
                            <div>
                                <img src="https://i.pinimg.com/736x/5d/f4/18/5df418287735c4bc97bc8e4100d0a451.jpg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text">Bimbel Online CPNS</p>
                                <h2>Rp699.000 Rp149rb</h2>
                                <p>Paket 1 Tahun</p>
                                <ul>
                                    <li>Mentoring Setiap Hari</li>
                                    <li>50+ Try Out SKD Sistem CAT</li>
                                    <li>Video Pembelajaran Tiap Sub Bab</li>
                                    <li>Fitur Lengkap Lainnya</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-1 col-sm-3">
                    <div class="card">
                        <div class="d-block">
                            <div>
                                <img src="https://i.pinimg.com/736x/5d/f4/18/5df418287735c4bc97bc8e4100d0a451.jpg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text">Bimbel Online CPNS</p>
                                <h2>Rp699.000 Rp149rb</h2>
                                <p>Paket 1 Tahun</p>
                                <ul>
                                    <li>Mentoring Setiap Hari</li>
                                    <li>50+ Try Out SKD Sistem CAT</li>
                                    <li>Video Pembelajaran Tiap Sub Bab</li>
                                    <li>Fitur Lengkap Lainnya</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-1 col-sm-3">
                    <div class="card">
                        <div class="d-block">
                            <div>
                                <img src="https://i.pinimg.com/736x/5d/f4/18/5df418287735c4bc97bc8e4100d0a451.jpg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text">Bimbel Online CPNS</p>
                                <h2>Rp699.000 Rp149rb</h2>
                                <p>Paket 1 Tahun</p>
                                <ul>
                                    <li>Mentoring Setiap Hari</li>
                                    <li>50+ Try Out SKD Sistem CAT</li>
                                    <li>Video Pembelajaran Tiap Sub Bab</li>
                                    <li>Fitur Lengkap Lainnya</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-1 col-sm-3">
                    <div class="card">
                        <div class="d-block">
                            <div>
                                <img src="https://i.pinimg.com/736x/5d/f4/18/5df418287735c4bc97bc8e4100d0a451.jpg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text">Bimbel Online CPNS</p>
                                <h2>Rp699.000 Rp149rb</h2>
                                <p>Paket 1 Tahun</p>
                                <ul>
                                    <li>Mentoring Setiap Hari</li>
                                    <li>50+ Try Out SKD Sistem CAT</li>
                                    <li>Video Pembelajaran Tiap Sub Bab</li>
                                    <li>Fitur Lengkap Lainnya</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-1 col-sm-3">
                    <div class="card">
                        <div class="d-block">
                            <div>
                                <img src="https://i.pinimg.com/736x/5d/f4/18/5df418287735c4bc97bc8e4100d0a451.jpg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text">Bimbel Online CPNS</p>
                                <h2>Rp699.000 Rp149rb</h2>
                                <p>Paket 1 Tahun</p>
                                <ul>
                                    <li>Mentoring Setiap Hari</li>
                                    <li>50+ Try Out SKD Sistem CAT</li>
                                    <li>Video Pembelajaran Tiap Sub Bab</li>
                                    <li>Fitur Lengkap Lainnya</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-1 col-sm-3">
                    <div class="card">
                        <div class="d-block">
                            <div>
                                <img src="https://i.pinimg.com/736x/5d/f4/18/5df418287735c4bc97bc8e4100d0a451.jpg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text">Bimbel Online CPNS</p>
                                <h2>Rp699.000 Rp149rb</h2>
                                <p>Paket 1 Tahun</p>
                                <ul>
                                    <li>Mentoring Setiap Hari</li>
                                    <li>50+ Try Out SKD Sistem CAT</li>
                                    <li>Video Pembelajaran Tiap Sub Bab</li>
                                    <li>Fitur Lengkap Lainnya</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-1 col-sm-3">
                    <div class="card">
                        <div class="d-block">
                            <div>
                                <img src="https://i.pinimg.com/736x/5d/f4/18/5df418287735c4bc97bc8e4100d0a451.jpg"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text">Bimbel Online CPNS</p>
                                <h2>Rp699.000 Rp149rb</h2>
                                <p>Paket 1 Tahun</p>
                                <ul>
                                    <li>Mentoring Setiap Hari</li>
                                    <li>50+ Try Out SKD Sistem CAT</li>
                                    <li>Video Pembelajaran Tiap Sub Bab</li>
                                    <li>Fitur Lengkap Lainnya</li>
                                </ul>
                            </div>
                        </div>
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
    </section>

    <section class="container">
        <div class="mx-auto w-50 text-center">
            <p id="testimoni">Testimoni Program Bimbel</p>
            <h1>Respon positif pengguna Bimbel Apta School</h1>
            <p>Respon ❤ dari pengguna setia Bimbel Apta School</p>
        </div>
        <div class="card-container">

            <div class="card">
                <img src="https://i.pinimg.com/736x/5d/f4/18/5df418287735c4bc97bc8e4100d0a451.jpg" width="100"
                    height="100" alt="Icone Formula">
                <h1>Vidio Belajar</h1>
                <p>Rasakan belajar lebih efektif dan interaktif dengan video belajar tiap sub bab pada learning app
                    Apta
                    School.</p>
            </div>
        </div>
    </section>

    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address"
                                fdprocessedid="1216">
                            <button class="btn btn-primary" type="button" fdprocessedid="wgfhhdb">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2024 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="<?= base_url('bootstrap/dist/js/bootstrap.js') ?>"></script>
</body>

</html>