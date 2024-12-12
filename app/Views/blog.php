<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="<?= base_url('bootstrap/dist/css/bootstrap.css') ?>">
    <style>
    .card-text {
        color: #007bff;
    }

    .img-card {
        width: 350px;
        object-fit: cover;
        height: 350px;
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">Apache School</a>
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
                            <a class="nav-link" href="<?= base_url('/ #program') ?>">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/ #testimoni') ?>">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('blog') ?>">Blog</a>
                        </li>

                    </ul>
                    <button class="btn btn-outline-success mx-10" type="submit">Masuk</button>
                </div>

            </div>
        </nav>
    </header>


    <section class="container my-5">
        <div class="mx-auto my-5 text-center text-primary">
            <h1>Blog</h1>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="card card-hover shadow-lg">
                    <div class="d-flex">
                        <div>
                            <img src="<?= base_url('images/cpns.jpg') ?>" class="card-img img-card" alt="...">
                        </div>
                        <div class="card-body">
                            <h2 class="card-text">Pola Soal Sering Keluar di SKD CPNS 2024.</h2>
                            <div class="my-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-week" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg><span class="mx-2">October 16, 2024</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-person-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> <span class="mx-2">Apache School</span>
                            </div>
                            <p>TWK (Tes Wawasan Kebangsaan) Tidak ada soal yang sifatnya hafalan. Penalaran tentang
                                nilai-nilai Pancasila dalam..</p>
                            <a href="<?= base_url('pola-soal-cpns-2024') ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card card-hover mt-5 shadow-lg">
                    <div class="d-flex">
                        <div>
                            <img src="<?= base_url('images/cpns.jpg') ?>" class="card-img img-card" alt="...">
                        </div>
                        <div class="card-body">
                            <h2 class="card-text">Daftar Formasi CPNS Badan Perencanaan Pembangunan Nasional 2024
                            </h2>
                            <div class="my-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-week" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg><span class="mx-2">October 16, 2024</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-person-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> <span class="mx-2">Apache School</span>
                            </div>
                            <p>Pemerintah resmi membuka jutaan formasi pada Rekrutmen (Calon Pegawai
                                Negeri Sipil) CPNS dan (Pegawai Pemerintah..</p>
                            <a href="<?= base_url('daftar-formasi-cpns-badan-perencanaan-pembangunan-nasional') ?>">Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="card card-hover mt-5 shadow-lg">
                    <div class="d-flex">
                        <div>
                            <img src="<?= base_url('images/cpns.jpg') ?>" class="card-img img-card" alt="...">
                        </div>
                        <div class="card-body">
                            <h2 class="card-text">Daftar Formasi CPNS Badan Pengawas Obat dan Makanan 2024</h2>
                            <div class="my-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-week" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg><span class="mx-2">October 16, 2024</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-person-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> <span class="mx-2">Apache School</span>
                            </div>
                            <p>Pemerintah resmi membuka jutaan formasi pada Rekrutmen (Calon Pegawai Negeri Sipil) CPNS
                                dan (Pegawai Pemerintah..</p>
                            <a href="<?= base_url('daftar-formasi-cpns-badan-pengawas-obat-dan-makanan') ?>">Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="card card-hover mt-5 shadow-lg">
                    <div class="d-flex">
                        <div>
                            <img src="<?= base_url('images/cpns.jpg') ?>" class="card-img img-card" alt="...">
                        </div>
                        <div class="card-body">
                            <h2 class="card-text">
                                Daftar Formasi CPNS Badan Pengkajian dan Penerapan Teknologi 2024</h2>
                            <div class="my-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-week" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg><span class="mx-2">October 16, 2024</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-person-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> <span class="mx-2">Apache School</span>
                            </div>
                            <p>Pemerintah resmi membuka jutaan formasi pada Rekrutmen (Calon Pegawai Negeri Sipil) CPNS
                                dan (Pegawai Pemerintah..</p>
                            <a href="<?= base_url('pola-soal-cpns-2024') ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card card-hover mt-5 shadow-lg">
                    <div class="d-flex">
                        <div>
                            <img src="<?= base_url('images/cpns.jpg') ?>" class="card-img img-card" alt="...">
                        </div>
                        <div class="card-body">
                            <h2 class="card-text">
                                Daftar Formasi CPNS Badan Nasional Pengelola Perbatasan 2024</h2>
                            <div class="my-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-week" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg><span class="mx-2">October 16, 2024</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-person-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> <span class="mx-2">Apache School</span>
                            </div>
                            <p>Pemerintah resmi membuka jutaan formasi pada Rekrutmen (Calon Pegawai Negeri Sipil) CPNS
                                dan (Pegawai Pemerintah..</p>
                            <a href="<?= base_url('pola-soal-cpns-2024') ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card card-hover mt-5 shadow-lg">
                    <div class="d-flex">
                        <div>
                            <img src="<?= base_url('images/cpns.jpg') ?>" class="card-img img-card" alt="...">
                        </div>
                        <div class="card-body">
                            <h2 class="card-text">Daftar Formasi CPNS Mahkamah Konstitusi 2024</h2>
                            <div class="my-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-week" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg><span class="mx-2">October 16, 2024</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-person-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> <span class="mx-2">Apache School</span>
                            </div>
                            <p>Pemerintah resmi membuka jutaan formasi pada Rekrutmen (Calon Pegawai Negeri Sipil) CPNS
                                dan (Pegawai Pemerintah...</p>
                            <a href="<?= base_url('pola-soal-cpns-2024') ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card card-hover mt-5 shadow-lg">
                    <div class="d-flex">
                        <div>
                            <img src="<?= base_url('images/cpns.jpg') ?>" class="card-img img-card" alt="...">
                        </div>
                        <div class="card-body">
                            <h2 class="card-text">Daftar Formasi CPNS Sekretariat Kabinet 2024</h2>
                            <div class="my-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-week" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg><span class="mx-2">October 16, 2024</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-person-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> <span class="mx-2">Apache School</span>
                            </div>
                            <p>Pemerintah resmi membuka jutaan formasi pada Rekrutmen (Calon Pegawai Negeri Sipil) CPNS
                                dan (Pegawai Pemerintah..</p>
                            <a href="<?= base_url('pola-soal-cpns-2024') ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card card-hover mt-5 shadow-lg">
                    <div class="d-flex">
                        <div>
                            <img src="<?= base_url('images/cpns.jpg') ?>" class="card-img img-card" alt="...">
                        </div>
                        <div class="card-body">
                            <h2 class="card-text">Daftar Formasi CPNS Lembaga Sandi Negara/Badan Siber dan Sandi Negara
                                2024</h2>
                            <div class="my-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-week" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg><span class="mx-2">October 16, 2024</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-person-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> <span class="mx-2">Apache School</span>
                            </div>
                            <p>Pemerintah resmi membuka jutaan formasi pada Rekrutmen (Calon Pegawai Negeri Sipil) CPNS
                                dan (Pegawai Pemerintah..</p>
                            <a href="<?= base_url('pola-soal-cpns-2024') ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card card-hover mt-5 shadow-lg">
                    <div class="d-flex">
                        <div>
                            <img src="<?= base_url('images/cpns.jpg') ?>" class="card-img img-card" alt="...">
                        </div>
                        <div class="card-body">
                            <h2 class="card-text">
                                Formasi CPNS 2024 Prodi S-1 Pendidikan Kepelatihan Keolahragaan</h2>
                            <div class="my-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-week" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg><span class="mx-2">October 16, 2024</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-person-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> <span class="mx-2">Apache School</span>
                            </div>
                            <p>Pemerintah resmi membuka jutaan formasi pada Rekrutmen (Calon Pegawai Negeri Sipil) CPNS
                                dan (Pegawai Pemerintah..</p>
                            <a href="<?= base_url('formasi-cpns-s1-pendidikan-kepelatihan-keolahragaan') ?>">Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="card card-hover mt-5 shadow-lg">
                    <div class="d-flex">
                        <div>
                            <img src="<?= base_url('images/cpns.jpg') ?>" class="card-img img-card" alt="...">
                        </div>
                        <div class="card-body">
                            <h2 class="card-text">Formasi CPNS 2024 Prodi S-1 Teknik Bangunan dan Landasan</h2>
                            <div class="my-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-week" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg><span class="mx-2">October 16, 2024</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-person-fill"
                                    viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> <span class="mx-2">Apache School</span>
                            </div>
                            <p>Pemerintah resmi membuka jutaan formasi pada Rekrutmen (Calon Pegawai Negeri Sipil) CPNS
                                dan (Pegawai Pemerintah..</p>
                            <a href=" <?= base_url('formasi-cpns-s1-teknik-bangunan-dan-landasan') ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="my-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-success" type="button" id="button-addon2">Search</button>
                    </div>
                </div>
                <div>
                    <div>
                        <p>ashdjasd</p>
                        <img src="<?= base_url('images/bimbel-cpns.webp') ?>" alt="" class="w-100">
                    </div>
                </div>
                <div class="mt-4">
                    <h2>Layanan Bimbel</h2>
                    <div class="mt-4">
                        <ul style="list-style-type: circle;">
                            <li class="py-2 mb-2 border-bottom  fs-5 fw-normal">Bimbel Online CPNS</li>
                            <li class="py-2 mb-2 border-bottom fs-5 fw-normal">Bimbel Online PPPK</li>
                            <li class="py-2 mb-2 border-bottom fs-5 fw-normal">Bimbel Online BUMN</li>
                            <li class="py-2 mb-2 border-bottom fs-5 fw-normal">Bimbel Online Kedinasan</li>
                            <li class="py-2 mb-2 border-bottom fs-5 fw-normal">Bimbel Online Polri</li>
                            <li class="py-2 mb-2 border-bottom fs-5 fw-normal">Bimbel Online Psikotes</li>
                            <li class="py-2 mb-2 border-bottom fs-5 fw-normal">Bimbel Online UTBK</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h2>Unduh Aplikasi</h2>
                    <div>
                        <img src="<?= base_url('images/google-play.webp') ?>" alt="Logo Play Store" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="<?= base_url('bootstrap/dist/js/bootstrap.js') ?>"></script>

</body>

</html>