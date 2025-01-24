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
        

              <!-- Blog Start -->
              <div class="container-fluid blog pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                 
                    <h2 class="display-7">Di bawah ini ada beberapa moment kegiatan di
                        <br> Mts Bina Cendekia</h2>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                    <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m1.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                    <!--
                                    <a href="Asset/m1.jpg" data-lightbox="blog-1" class="btn btn-primary btn-md-square rounded-pill"><i class="fas fa-plus fa-1x"></i></a>
                                    -->
                                </div>
                            </div>
                            <div class="my-4">
                                <P><h4>Mendapatkan juara dalam kegiatan<h4></P>
                            </div>
                           <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Jelajahi Moment</a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m19.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Praktek Penyembelihan sebagai Qurban</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                            -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m25.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Prestasi yang didapatkan oleh eskul Pramuka</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                        </div>
                            -->
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                    <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m2.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                    <!--
                                    <a href="Asset/m1.jpg" data-lightbox="blog-1" class="btn btn-primary btn-md-square rounded-pill"><i class="fas fa-plus fa-1x"></i></a>
                                    -->
                                </div>
                            </div>
                            <div class="my-4">
                                <P><h4>Kegiatan berkemah<h4></P>
                            </div>
                           <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Jelajahi Moment</a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m3.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Kegiatan Setiap Pagi</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                            -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m4.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Acara Tausiah</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                        </div>
                            -->
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                    <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m5.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                    <!--
                                    <a href="Asset/m1.jpg" data-lightbox="blog-1" class="btn btn-primary btn-md-square rounded-pill"><i class="fas fa-plus fa-1x"></i></a>
                                    -->
                                </div>
                            </div>
                            <div class="my-4">
                                <P><h4>Sholat Berjamaah<h4></P>
                            </div>
                           <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Jelajahi Moment</a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m6.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>StudyTour</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                            -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m7.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Penghargaan</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                        </div>
                            -->
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                    <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/p5.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                    <!--
                                    <a href="Asset/m1.jpg" data-lightbox="blog-1" class="btn btn-primary btn-md-square rounded-pill"><i class="fas fa-plus fa-1x"></i></a>
                                    -->
                                </div>
                            </div>
                            <div class="my-4">
                                <P><h4>Kegiatan Ekskul<h4></P>
                            </div>
                           <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Jelajahi Moment</a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m8.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Jurit Malam</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                            -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m9.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Apel LDKS</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                        </div>
                            -->
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                    <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m10.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                    <!--
                                    <a href="Asset/m1.jpg" data-lightbox="blog-1" class="btn btn-primary btn-md-square rounded-pill"><i class="fas fa-plus fa-1x"></i></a>
                                    -->
                                </div>
                            </div>
                            <div class="my-4">
                                <P><h4>LDKS<h4></P>
                            </div>
                           <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Jelajahi Moment</a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m11.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Foto Bersama</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                            -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m12.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Upacara Bendera</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                        </div>
                            -->
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                    <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m13.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                    <!--
                                    <a href="Asset/m1.jpg" data-lightbox="blog-1" class="btn btn-primary btn-md-square rounded-pill"><i class="fas fa-plus fa-1x"></i></a>
                                    -->
                                </div>
                            </div>
                            <div class="my-4">
                                <P><h4>Jum'at Nyantri<h4></P>
                            </div>
                           <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Jelajahi Moment</a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m14.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Belajar</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                            -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m15.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Cek Gula Darah</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                        </div>
                            -->
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                    <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m24.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                    <!--
                                    <a href="Asset/m1.jpg" data-lightbox="blog-1" class="btn btn-primary btn-md-square rounded-pill"><i class="fas fa-plus fa-1x"></i></a>
                                    -->
                                </div>
                            </div>
                            <div class="my-4">
                                <P><h4>Piala/Penghargaan<h4></P>
                            </div>
                           <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Jelajahi Moment</a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m17.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Lomba Agustusan</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                            -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m18.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Lomba Sepak Bola</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                        </div>
                            -->
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                    <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m20.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                    <!--
                                    <a href="Asset/m1.jpg" data-lightbox="blog-1" class="btn btn-primary btn-md-square rounded-pill"><i class="fas fa-plus fa-1x"></i></a>
                                    -->
                                </div>
                            </div>
                            <div class="my-4">
                                <P><h4>Upacara Hari Santri<h4></P>
                            </div>
                           <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Jelajahi Moment</a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/m21.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Upacara Kemah</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                            -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">Moment</h4>
                                <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> August 23, 2024</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span> Mts BCC</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="<?= ASSETS_PATH ?>image/pram7.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="blog-plus-icon">
                                </div>
                            </div>
                            <div class="my-4">
                                <p><h4>Fotbar Pramuka</h4></p>
                            </div>
                            <!--
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Explore More</a>
                        </div>
                            -->
                    </div>
                </div>
        <!-- Blog End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
  
            <?php
            include './layouts/footer.php';
            ?>
