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
                    <img src="<?= ASSETS_PATH ?>image/1.jpg" class="img-fluid w-100" alt="Image">
                </div>
                <div class="carousel-caption">
                    <div class="carousel-caption-inner text-center p-3">
                        <h1 class="display-1 text-capitalize text-white mb-4">MTs BINA CENDEKIA</h1>
                        <h1 class="display-6 text-capitalize text-white mb-4">Madrasah Berbasis Pesantren</h1>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

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
        <!-- Project End -->
                                  
        <?php
            include './layouts/footer.php';
            ?>

    