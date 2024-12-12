<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CPNS</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="<?= base_url('bootstrap/dist/css/bootstrap.css') ?>">
    <style>
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
    </header>


    <section class="container mt-4">
        <div class="mx-auto text-center text-primary">
            <h1>Formasi CPNS 2024 Prodi S-1 Teknik Bangunan dan Landasan
            </h1>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="card card-hover p-4">
                    <div class="">
                        <div>
                            <img src="<?= base_url('images/cpns.jpg') ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card card-body mt-5">
                            <div>
                                <p class="card-text text-primary">TWK (Tes Wawasan Kebangsaan).</p>
                                <ul>
                                    <li> Tidak ada soal yang sifatnya hafalan.</li>
                                    <li> Penalaran tentang nilai-nilai Pancasila dalam kehidupan.</li>
                                    <li>Bahasa Indonesia: inti kalimat atau ide pokok, kata bercetak miring pada narasi
                                        di
                                        soal, dan kesimpulan pada soal.</li>
                                    <li>
                                        Implementasi atau mengajarkan tentang apa, seputar sejarah kemerdekaan dan pasca
                                        kemerdekaan (BPUPKI, PPKI, dll).
                                    </li>
                                    <li>
                                        Sejarah organisasi seperti budi utomo, dan sebagainya dengan implementasi masa
                                        kini.
                                    </li>
                                    <li>
                                        Soal kurang lebih mirip dengan try out prediksi apta school.
                                    </li>
                                    <li>
                                        Soal yang keluar relatif panjang.
                                    </li>
                                    <li>Bentuk soal mirip seperti soal TKP.</li>
                                    <li>
                                        Terdapat beberapa opsi jawaban yang mirip dengan soal TKP, tetapi dengan
                                        analisis
                                        ada 2-3 opsi yang jelas berbeda.
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p class="card-text text-primary">TIU (Tes Intelegensi Umum)</p>
                                <ul>
                                    <li>Deret angka, figural, silogisme, dan analitik.</li>
                                    <li>Pecahan (beberapa tingkat kesulitan yang tinggi).</li>
                                    <li>Soal cerita yang relatif mudah jika sering latihan.</li>
                                    <li>Silogisme dengan dua premis saja.</li>
                                    <li>Figural yang sulit menemukan polanya.</li>
                                    <li>Hitungan pendek.</li>
                                    <li>Soal figural keluar cukup banyak.</li>
                                    <li>Analisis tabel atau hubungan x dan y.</li>
                                    <li>Polanya persis try out prediksi yang di apta school namun sedikit lebih mudah.
                                    </li>
                                    <li>Pola kalimat dan hubungan objek.</li>
                                </ul>
                            </div>
                            <div>
                                <p class="card-text text-primary">TKP (Tes Karakteristik Pribadi)</p>
                                <ul>
                                    <li>Banyak berkaitan dengan isu-isu terkini.</li>
                                    <li>Opsi jawaban pendek namun soal relatif sedang sampai agak panjang.</li>
                                    <li>Soal terkait penempatan diri antara kesibukan dan pekerjaan lain.</li>
                                    <li>Tanggapan terhadap inovasi baru di kantor, terutama jika tidak familiar dengan
                                        teknologi (gaptek).</li>
                                    <li>Soal anti radikalisme sikap terhadap tindakan spionase.</li>
                                    <li>Menyerupai soal TKP pada umumnya, namun sering kali dengan opsi yang singkat dan
                                        padat.</li>
                                    <li>Bentuk soal seperti try out apta school.</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mt-5">
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
                        <ul>
                            <li>Bimbel Online CPNS</li>
                            <li>Bimbel Online PPPK</li>
                            <li>Bimbel Online BUMN</li>
                            <li>Bimbel Online Kedinasan</li>
                            <li>Bimbel Online Polri</li>
                            <li>Bimbel Online Psikotes</li>
                            <li>Bimbel Online UTBK</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="<?= base_url('bootstrap/dist/js/bootstrap.js') ?>"></script>

</body>

</html>