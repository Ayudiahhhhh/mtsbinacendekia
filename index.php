<?php
include './mtsbinacendekia/layouts/header.php';
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
            include './mtsbinacendekia/layouts/topbar.php';
            ?>

        <?php
            include './mtsbinacendekia/layouts/navbar.php';
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
                        <h1 class="display-6 text-capitalize text-white mb-4">Sekolah Berbasis Pesantren</h1>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <?php
            include'./mtsbinacendekia/layouts/about.php';
            ?>

        <?php
            include'./mtsbinacendekia/layouts/testimonial.php';
            ?>

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
            include'./mtsbinacendekia/layouts/blog.php';
            ?>

        <!-- Team Start -->
        <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;">
                    <h1 class="text-primary"><b>Guru Madrasah</b></h1>
                    <h2 class="display-7">Disini adalah daftar nama-nama Guru di
                        <br> Mts Bina Cendekia</h2>
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
        <!-- Team End -->

        <div id="content-container">
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s" id=>
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Location</h4>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6387344619707!2d108.61581937410497!3d-6.813720566643204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f04acc40a4fb1%3A0xe6f19685c9307c9a!2sMTs%20Bina%20Cendikia!5e0!3m2!1sen!2sid!4v1724478707411!5m2!1sen!2sid" width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <p class="mb-3"><i class="fa fa-map-marker-alt me-2"></i>Mertapada Wetan, Kec. Astanajapura, Kab. Cirebon,Jawa Barat</a></p>
                                <div class="position-relative mx-auto rounded-pill">
                                <!--
                                    <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                    <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Pusat Bantuan</h4>
                                <p class="mb-3">Jika Anda memerlukan bantuan, anda bisa hubungi contact info yang tersedia disini.</p>
                                <h4 class="text-white mb-4">Popular Post</h4>
                            <div class="footer-btn text-start">
                                <a href="<?= BASE_URL?>mtsbinacendekia/moment.php" class="btn btn-dark rounded-pill px-4">View All Post <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                                <div class="position-relative mx-auto rounded-pill">
                                <!--
                                    <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                    <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Explore</h4>
                            <a href="index.php"><i class="fas fa-angle-right me-2"></i> Beranda</a>
                            <a href="profil.php"><i class="fas fa-angle-right me-2"></i> Profil Madrasah</a>
                            <a href="fasilital.php"><i class="fas fa-angle-right me-2"></i> Fasilitas</a>
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Estrakulikuler</a>
                                <div class="dropdown-menu m-0">
                                    <a href="osis.php" class="dropdown-item">Osis</a>
                                    <a href="paskibra.php" class="dropdown-item">Pramuka</a>
                                    <a href="pramuka.php" class="dropdown-item">Pagar Nusa</a>
                                    <!--
                                    <a href="pagarnusa.php" class="dropdown-item">Paskibra</a>
                                    <a href="pmr.php" class="dropdown-item">PMR</a>
                                    <a href="hadroh.php" class="dropdown-item">Hadroh</a>
                                    -->
                                </div>
                            <a href="contact.php"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <i class="fa fa-map-marker-alt me-2"></i>Mertapada Wetan, Kec. Astanajapura, Kab. Cirebon,Jawa Barat</a>
                            <i class="fas fa-envelope me-2"></i> ppdb.mtsbinacendekia@gmail.com</a>
                            <div class="d-flex align-items-center">
                            <a class="btn btn-md-square me-2"href="whatsapp://send?text=Hello&phone=+6285797235593"><img src="<?= ASSETS_PATH ?>image/wa.jpeg" width="40" height="40" style="border:50%;"></a>
                            <a class="btn btn-md-square me-2" href="https://www.instagram.com/mtsbinacendekia/"><img src="<?= ASSETS_PATH ?>image/instagram.jpeg" width="40" height="40" style="border:50%;"></a>
                            <a class="btn btn-md-square me-2"href="https://youtube.com/@mtsbinacendekiacirebon6066?si=d3WriuQU8C4peHrT"><img src="<?= ASSETS_PATH ?>image/youtube.jpeg" width="40" height="40" style="border:50%;"></a>
                            <a class="btn btn-md-square me-2" href="https://www.facebook.com/MTsBinaCendekiaCirebon"><img src="<?= ASSETS_PATH ?>image/facebook.jpeg" width="40" height="40" style="border:50%;"></a>
                            <!--
                            <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-md-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href="whatsapp://send?text=Hello&phone=+6285797235593"><img src="https://www.octagonstudio.com/images/contact/wa-logo.png"></a>-->
                        </div>
                        </div>
                    </div>
                    <!--<div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item-post d-flex flex-column">
                            <h4 class="text-white mb-4">Popular Post</h4>
                            <div class="d-flex flex-column mb-3">
                                <p class="text-uppercase text-primary mb-2">Investment</p>
                                <a href="#" class="text-body">Revisiting Your Investment & Distribution Goals</a>
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <p class="text-uppercase text-primary mb-2">Business</p>
                                <a href="#" class="text-body">Dimensional Fund Advisors Interview with Director</a>
                            </div>
                            <div class="footer-btn text-start">
                                <a href="moment.php" class="btn btn-light rounded-pill px-4">View All Post <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- Footer End -->

 <!-- Copyright Start -->
  <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-dark"><i class="fas fa-copyright text-light me-2"></i>Mts Bina Cendekia</a></span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-dark" href="<?= BASE_URL ?>mtsbinacendekia/team.php"> The Kids m.m</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Copyright End -->
            <?php
            include './mtsbinacendekia/layouts/footer.php';
            ?>

        
    