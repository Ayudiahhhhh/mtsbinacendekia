<?php
include './layouts/header.php';
?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php
    include './layouts/topbar.php';
    ?>

    <?php
    include './layouts/navbar.php';
    ?>

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <div class="header-carousel-item-img-1">
                <img src="<?= ASSETS_PATH ?>image/guru1.jpg" class="img-fluid w-100" alt="Image">
            </div>
            <div class="carousel-caption">
                <div class="carousel-caption-inner text-center p-3">
                    <h1 class="display-1 text-capitalize text-white mb-4">MTs BINA CENDEKIA</h1>
                    <h1 class="display-6 text-capitalize text-white mb-4">Madrasah Berbasis Pesantren</h1>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img src="<?= ASSETS_PATH ?>image/kepsek2.jpg" class="img-fluid w-100  bg-white" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h1 class="text-primary"><b>Tentang Madrasah</b></h1>
                    <h2 class="display-7 mb-4">Sejarah Madrasah</h2>
                    <p class="text ps-4 mb-4">Madrasah Sekolah Bina Cendeki adalah sebuah institusi pendidikan Islam di Indonesia yang fokus pada pembinaan karakter, pengajaran ilmu agama, dan pengetahuan umum. Sekolah ini menggabungkan kurikulum nasional dengan kurikulum keislaman, seperti pelajaran Al-Qur'an, Hadis, fiqh, dan bahasa Arab, untuk membentuk peserta didik yang berakhlak mulia dan berprestasi. Bina Cendeki berkomitmen untuk mencetak generasi yang cerdas, beriman, dan berakhlak, sesuai dengan nilai-nilai Islam.
                        Sekolah ini biasanya memiliki jenjang pendidikan dari tingkat dasar hingga menengah</p>
                    <div class="row g-4 justify-content-between mb-5">
                        <div class="col-lg-6 col-xl-5">
                            <p class="text-dark"><i class="fas fa-check-circle text-primary me-1"></i> Madrasah Berbasis Pesantren</p>
                            <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Aktrediasi A</p>
                        </div>
                        <div class="col-xl-7 mb-5">
                            <div class="about-customer d-flex position-relative">
                                <div class="position-absolute text-dark" style="left: 220px; top: 10px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- About End -->

    <?php
    include './layouts/testimonial.php';
    ?>

    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h4 class="text-primary">Daftar</h4>
                <h1 class="display-4">Nama-Nama guru di mts </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <div class="team-img">
                            <img src="<?= ASSETS_PATH ?>/pepeng.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            <!--<div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                        </div>
                        <div class="team-content bg-dark text-center rounded-bottom p-4">
                            <div class="team-content-inner rounded-bottom">
                                <h4 class="text-white">Ferdy parastyo</h4>
                                <p class="text-muted mb-0">PPLG</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <div class="team-img">
                                <img src="<?= ASSETS_PATH ?>/tyas.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                <!--<div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                            </div>
                            <div class="team-content bg-dark text-center rounded-bottom p-4">
                                <div class="team-content-inner rounded-bottom">
                                    <h4 class="text-white">Putri Ayuning Tyas</h4>
                                    <p class="text-muted mb-0">PPLG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded">
                            <div class="team-img">
                                <img src="<?= ASSETS_PATH ?>/ayu.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                            </div>
                            <div class="team-content bg-dark text-center rounded-bottom p-4">
                                <div class="team-content-inner rounded-bottom">
                                    <h4 class="text-white">Ayudia Putri .R.</h4>
                                    <p class="text-muted mb-0">PPLG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded">
                            <div class="team-img">
                                <img src="<?= ASSETS_PATH ?>/ririn1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                            </div>
                            <div class="team-content bg-dark text-center rounded-bottom p-4">
                                <div class="team-content-inner rounded-bottom">
                                    <h4 class="text-white">Ririn Eka Aprilia</h4>
                                    <p class="text-muted mb-0">PPLG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded">
                            <div class="team-img">
                                <img src="<?= ASSETS_PATH ?>/ririn1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                            </div>
                            <div class="team-content bg-dark text-center rounded-bottom p-4">
                                <div class="team-content-inner rounded-bottom">
                                    <h4 class="text-white">Ririn Eka Aprilia</h4>
                                    <p class="text-muted mb-0">PPLG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item rounded">
                                <div class="team-img">
                                    <img src="<?= ASSETS_PATH ?>/tyas.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                    <!--<div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                </div>
                                <div class="team-content bg-dark text-center rounded-bottom p-4">
                                    <div class="team-content-inner rounded-bottom">
                                        <h4 class="text-white">Putri Ayuning Tyas</h4>
                                        <p class="text-muted mb-0">PPLG</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item rounded">
                                <div class="team-img">
                                    <img src="<?= ASSETS_PATH ?>/ayu.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                    <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                </div>
                                <div class="team-content bg-dark text-center rounded-bottom p-4">
                                    <div class="team-content-inner rounded-bottom">
                                        <h4 class="text-white">Ayudia Putri .R.</h4>
                                        <p class="text-muted mb-0">PPLG</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item rounded">
                                <div class="team-img">
                                    <img src="<?= ASSETS_PATH ?>/ririn1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                    <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                </div>
                                <div class="team-content bg-dark text-center rounded-bottom p-4">
                                    <div class="team-content-inner rounded-bottom">
                                        <h4 class="text-white">Ririn Eka Aprilia</h4>
                                        <p class="text-muted mb-0">PPLG</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item rounded">
                                <div class="team-img">
                                    <img src="<?= ASSETS_PATH ?>/ririn1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                    <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                </div>
                                <div class="team-content bg-dark text-center rounded-bottom p-4">
                                    <div class="team-content-inner rounded-bottom">
                                        <h4 class="text-white">Ririn Eka Aprilia</h4>
                                        <p class="text-muted mb-0">PPLG</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 justify-content-center">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item rounded">
                                    <div class="team-img">
                                        <img src="<?= ASSETS_PATH ?>/tyas.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                        <!--<div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                    </div>
                                    <div class="team-content bg-dark text-center rounded-bottom p-4">
                                        <div class="team-content-inner rounded-bottom">
                                            <h4 class="text-white">Putri Ayuning Tyas</h4>
                                            <p class="text-muted mb-0">PPLG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item rounded">
                                    <div class="team-img">
                                        <img src="<?= ASSETS_PATH ?>/ayu.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                        <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                    </div>
                                    <div class="team-content bg-dark text-center rounded-bottom p-4">
                                        <div class="team-content-inner rounded-bottom">
                                            <h4 class="text-white">Ayudia Putri .R.</h4>
                                            <p class="text-muted mb-0">PPLG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item rounded">
                                    <div class="team-img">
                                        <img src="<?= ASSETS_PATH ?>/ririn1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                        <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                    </div>
                                    <div class="team-content bg-dark text-center rounded-bottom p-4">
                                        <div class="team-content-inner rounded-bottom">
                                            <h4 class="text-white">Ririn Eka Aprilia</h4>
                                            <p class="text-muted mb-0">PPLG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item rounded">
                                    <div class="team-img">
                                        <img src="<?= ASSETS_PATH ?>/ririn1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                        <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                    </div>
                                    <div class="team-content bg-dark text-center rounded-bottom p-4">
                                        <div class="team-content-inner rounded-bottom">
                                            <h4 class="text-white">Ririn Eka Aprilia</h4>
                                            <p class="text-muted mb-0">PPLG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 justify-content-center">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item rounded">
                                        <div class="team-img">
                                            <img src="<?= ASSETS_PATH ?>/tyas.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                            <!--<div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                        </div>
                                        <div class="team-content bg-dark text-center rounded-bottom p-4">
                                            <div class="team-content-inner rounded-bottom">
                                                <h4 class="text-white">Putri Ayuning Tyas</h4>
                                                <p class="text-muted mb-0">PPLG</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="team-item rounded">
                                        <div class="team-img">
                                            <img src="<?= ASSETS_PATH ?>/ayu.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                            <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                        </div>
                                        <div class="team-content bg-dark text-center rounded-bottom p-4">
                                            <div class="team-content-inner rounded-bottom">
                                                <h4 class="text-white">Ayudia Putri .R.</h4>
                                                <p class="text-muted mb-0">PPLG</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="team-item rounded">
                                        <div class="team-img">
                                            <img src="<?= ASSETS_PATH ?>/ririn1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                            <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                        </div>
                                        <div class="team-content bg-dark text-center rounded-bottom p-4">
                                            <div class="team-content-inner rounded-bottom">
                                                <h4 class="text-white">Ririn Eka Aprilia</h4>
                                                <p class="text-muted mb-0">PPLG</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="team-item rounded">
                                        <div class="team-img">
                                            <img src="<?= ASSETS_PATH ?>/ririn1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                            <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                        </div>
                                        <div class="team-content bg-dark text-center rounded-bottom p-4">
                                            <div class="team-content-inner rounded-bottom">
                                                <h4 class="text-white">Ririn Eka Aprilia</h4>
                                                <p class="text-muted mb-0">PPLG</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-4 justify-content-center">
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="team-item rounded">
                                            <div class="team-img">
                                                <img src="<?= ASSETS_PATH ?>/tyas.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                                <!--<div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                            </div>
                                            <div class="team-content bg-dark text-center rounded-bottom p-4">
                                                <div class="team-content-inner rounded-bottom">
                                                    <h4 class="text-white">Putri Ayuning Tyas</h4>
                                                    <p class="text-muted mb-0">PPLG</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="team-item rounded">
                                            <div class="team-img">
                                                <img src="<?= ASSETS_PATH ?>/ayu.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                                <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                            </div>
                                            <div class="team-content bg-dark text-center rounded-bottom p-4">
                                                <div class="team-content-inner rounded-bottom">
                                                    <h4 class="text-white">Ayudia Putri .R.</h4>
                                                    <p class="text-muted mb-0">PPLG</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="team-item rounded">
                                            <div class="team-img">
                                                <img src="<?= ASSETS_PATH ?>/ririn1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                                <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                            </div>
                                            <div class="team-content bg-dark text-center rounded-bottom p-4">
                                                <div class="team-content-inner rounded-bottom">
                                                    <h4 class="text-white">Ririn Eka Aprilia</h4>
                                                    <p class="text-muted mb-0">PPLG</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="team-item rounded">
                                            <div class="team-img">
                                                <img src="<?= ASSETS_PATH ?>/ririn1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                                <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                            </div>
                                            <div class="team-content bg-dark text-center rounded-bottom p-4">
                                                <div class="team-content-inner rounded-bottom">
                                                    <h4 class="text-white">Ririn Eka Aprilia</h4>
                                                    <p class="text-muted mb-0">PPLG</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-4 justify-content-center">
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="team-item rounded">
                                                <div class="team-img">
                                                    <img src="<?= ASSETS_PATH ?>/tyas.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                                    <!--<div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                                </div>
                                                <div class="team-content bg-dark text-center rounded-bottom p-4">
                                                    <div class="team-content-inner rounded-bottom">
                                                        <h4 class="text-white">Putri Ayuning Tyas</h4>
                                                        <p class="text-muted mb-0">PPLG</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="team-item rounded">
                                                <div class="team-img">
                                                    <img src="<?= ASSETS_PATH ?>/ayu.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                                    <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                                </div>
                                                <div class="team-content bg-dark text-center rounded-bottom p-4">
                                                    <div class="team-content-inner rounded-bottom">
                                                        <h4 class="text-white">Ayudia Putri .R.</h4>
                                                        <p class="text-muted mb-0">PPLG</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="team-item rounded">
                                                <div class="team-img">
                                                    <img src="<?= ASSETS_PATH ?>/ririn1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                                    <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                                </div>
                                                <div class="team-content bg-dark text-center rounded-bottom p-4">
                                                    <div class="team-content-inner rounded-bottom">
                                                        <h4 class="text-white">Ririn Eka Aprilia</h4>
                                                        <p class="text-muted mb-0">PPLG</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="team-item rounded">
                                                <div class="team-img">
                                                    <img src="<?= ASSETS_PATH ?>/ririn1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                                    <!-- <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                    <div class="team-icon-share">
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>-->
                                                </div>
                                                <div class="team-content bg-dark text-center rounded-bottom p-4">
                                                    <div class="team-content-inner rounded-bottom">
                                                        <h4 class="text-white">Ririn Eka Aprilia</h4>
                                                        <p class="text-muted mb-0">PPLG</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Team End -->

                                        <!-- Project Start -->
                                        <div class="container-fluid project">
                                            <div class="container">
                                                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                                                    <br><br>
                                                    <h1 class="text-primary"><b>Fasilitas</b></h1>
                                                    <h2 class="display-7">Di bawah ini adalah beberapa fasilitas yang sudah disediakan oleh Mts Bina Cendekia</h2>
                                                </div>
                                                <div class="project-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                                                    <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                                                        <div class="project-img">
                                                            <img src="<?= ASSETS_PATH ?>image/ruangkepsek.jpg" class="img-fluid w-100 rounded" alt="Image">
                                                        </div>
                                                        <div class="project-content bg-light rounded p-4">
                                                            <div class="project-content-inner">
                                                                <div class="project-icon mb-3"><i class="fas fa-home fa-4x text-primary"></i></div>
                                                                <p class="text-dark fs-5 mb-3"><i>Ruang KEPSEK</i></p>
                                                                <a href="#" class="h4">Di Madrasah ini sudah ada fasilitas khusus untuk Ruangan KEPSEK</a>
                                                                <div class="pt-4">
                                                                    <!--
                                    <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                                    -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.3s">
                                                        <div class="project-img">
                                                            <img src="<?= ASSETS_PATH ?>image/ruangguru.jpg" class="img-fluid w-100 rounded" alt="Image">
                                                        </div>
                                                        <div class="project-content bg-light rounded p-4">
                                                            <div class="project-content-inner">
                                                                <div class="project-icon mb-3"><i class="fas fa-home fa-4x text-primary"></i></div>
                                                                <p class="text-dark fs-5 mb-3"><i>Ruang Guru</i></p>
                                                                <a href="#" class="h4">Di Madrasah ini sudah ada fasilitas khusus untuk Ruangan Para Guru-Guru</a>
                                                                <div class="pt-4">
                                                                    <!--
                                    <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                                    -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="project-item h-100">
                                                        <div class="project-img">
                                                            <img src="<?= ASSETS_PATH ?>image/class.jpeg" class="img-fluid w-100 rounded" alt="Image">
                                                        </div>
                                                        <div class="project-content bg-light rounded p-4">
                                                            <div class="project-content-inner">
                                                                <div class="project-icon mb-3"><i class="fas fa-home fa-4x text-primary"></i></div>
                                                                <p class="text-dark fs-5 mb-3"><i>Ruang Kelas</i></p>
                                                                <a href="#" class="h4">Di Madrasah ini sudah ada fasilitas tempat belajar untuk siswa-siswi</a>
                                                                <div class="pt-4">
                                                                    <!--
                                    <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                                    -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="project-item h-100">
                                                        <div class="project-img">
                                                            <img src="<?= ASSETS_PATH ?>image/kantin.jpg" class="img-fluid w-100 rounded" alt="Image">
                                                        </div>
                                                        <div class="project-content bg-light rounded p-4">
                                                            <div class="project-content-inner">
                                                                <div class="project-icon mb-3"><i class="fas fa-home fa-4x text-primary"></i></div>
                                                                <p class="text-dark fs-5 mb-3"><i>Kantin</i></p>
                                                                <a href="#" class="h4">Di Madrasah ini sudah ada fasilitas istirahat siswa-siswi</a>
                                                                <div class="pt-4">
                                                                    <!--
                                    <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                                    -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="project-item h-100">
                                                        <div class="project-img">
                                                            <img src="<?= ASSETS_PATH ?>image/koperasi.jpg" class="img-fluid w-100 rounded" alt="Image">
                                                        </div>
                                                        <div class="project-content bg-light rounded p-4">
                                                            <div class="project-content-inner">
                                                                <div class="project-icon mb-3"><i class="fas fa-home fa-4x text-primary"></i></div>
                                                                <p class="text-dark fs-5 mb-3"><i>Koperasi</i></p>
                                                                <a href="#" class="h4">Di Madrasah ini sudah ada fasilitas atk siswa-siswi</a>
                                                                <div class="pt-4">
                                                                    <!--
                                    <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                                    -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="project-item h-100">
                                                        <div class="project-img">
                                                            <img src="<?= ASSETS_PATH ?>image/lapangan.jpg" class="img-fluid w-100 rounded" alt="Image">
                                                        </div>
                                                        <div class="project-content bg-light rounded p-4">
                                                            <div class="project-content-inner">
                                                                <div class="project-icon mb-3"><i class="fas fa-home fa-4x text-primary"></i></div>
                                                                <p class="text-dark fs-5 mb-3"><i>Lapangan</i></p>
                                                                <a href="#" class="h4">Di Madrasah ini sudah ada fasilitas untuk aktivitas siswa-siswi </a>
                                                                <div class="pt-4">
                                                                    <!--
                                    <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                                    -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="project-item h-100">
                                                        <div class="project-img">
                                                            <img src="<?= ASSETS_PATH ?>image/ruangtamu.jpg" class="img-fluid w-100 rounded" alt="Image">
                                                        </div>
                                                        <div class="project-content bg-light rounded p-4">
                                                            <div class="project-content-inner">
                                                                <div class="project-icon mb-3"><i class="fas fa-home fa-4x text-primary"></i></div>
                                                                <p class="text-dark fs-5 mb-3"><i>Ruang Tamu</i></p>
                                                                <a href="#" class="h4">Di Madrasah ini sudah ada fasilitas ruang tamu untuk wali murid siswa-siswi</a>
                                                                <div class="pt-4">
                                                                    <!--
                                    <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                                    -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="project-item h-100">
                                                        <div class="project-img">
                                                            <img src="<?= ASSETS_PATH ?>image/uks.jpg" class="img-fluid w-100 rounded" alt="Image">
                                                        </div>
                                                        <div class="project-content bg-light rounded p-4">
                                                            <div class="project-content-inner">
                                                                <div class="project-icon mb-3"><i class="fas fa-home fa-4x text-primary"></i></div>
                                                                <p class="text-dark fs-5 mb-3"><i>UKS</i></p>
                                                                <a href="#" class="h4">Di Madrasah ini sudah ada fasilitas keperluan obat siswa-siswi yang sakit</a>
                                                                <div class="pt-4">
                                                                    <!--
                                    <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                                    -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="project-item h-100">
                                                        <div class="project-img">
                                                            <img src="<?= ASSETS_PATH ?>image/toilet.JPEG" class="img-fluid w-100 rounded" alt="Image">
                                                        </div>
                                                        <div class="project-content bg-light rounded p-4">
                                                            <div class="project-content-inner">
                                                                <div class="project-icon mb-3"><i class="fas fa-home fa-4x text-primary"></i></div>
                                                                <p class="text-dark fs-5 mb-3"><i>Toilet</i></p>
                                                                <a href="#" class="h4">Di Madrasah ini juga sudah ada fasilitas umum </a>
                                                                <div class="pt-4">
                                                                    <!--
                                    <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                                    -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                                        <!-- Project End -->

                                        <!-- Services Start -->
                                        <div class="container-fluid service py-5">
                                            <div class="container py-5">
                                                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                                                    <h1 class="text-primary">Estrakulikuler</h1>
                                                    <h2 class="display-7">Di bawah ini adalah beberapa estrakulikuler yang ada Mts Bina Cendekia</h2>
                                                </div>
                                                <div class="row g-4 justify-content-center text-center">
                                                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                                                        <div class="service-item bg-light rounded">
                                                            <div class="service-img">
                                                                <img src="<?= ASSETS_PATH ?>image/pram8.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                            </div>
                                                            <div class="service-content text-center p-4">
                                                                <div class="service-content-inner">
                                                                    <p class="mb-4">Pramuka
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                                        <div class="service-item bg-light rounded">
                                                            <div class="service-img">
                                                                <img src="<?= ASSETS_PATH ?>image/p2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                            </div>
                                                            <div class="service-content text-center p-4">
                                                                <div class="service-content-inner">
                                                                    <p class="mb-4">Pagar Nusa
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                                                        <div class="service-item bg-light rounded">
                                                            <div class="service-img">
                                                                <img src="<?= ASSETS_PATH ?>image/o2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                            </div>
                                                            <div class="service-content text-center p-4">
                                                                <div class="service-content-inner">
                                                                    <p class="mb-4">Osis
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Services End -->

                                        <?php
                                        include './layouts/blog.php';
                                        ?>


                                        <!-- Team Start -->
                                        <div class="container-fluid team pb-5">
                                            <div class="container pb-5">
                                                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                                                    <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;">
                                                    <h1 class="text-primary"><b>Guru Madrasah</b></h1>
                                                    <h2 class="display-7">Disini adalah daftar nama-nama Guru di
                                                        <br> Mts Bina Cendekia
                                                    </h2>
                                                </div>
                                                <div class="row g-4 justify-content-center">
                                                    <div class="team-img">
                                                        <img src="<?= ASSETS_PATH ?>image/guru1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    include './layouts/kontak.php';
    ?>

    <?php
    include './layouts/footer.php';
    ?>