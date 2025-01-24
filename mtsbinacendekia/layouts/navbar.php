 <!-- Navbar & Hero Start -->
 <div class="container-fluid sticky-top px-0">
        <div class="position-absolute bg-info" style="left: 0; top: 0; width: 100%; height: 100%;"></div>
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-dark m-0"><img src="<?= ASSETS_PATH ?>image/logo.png" alt="Mts BCC" width="80" height="80" style="border:0;">MTs BINA CENDEKIA</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="<?= BASE_URL ?>index.php" class="nav-item nav-link">Beranda</a>
                        <a href="<?= BASE_URL ?>mtsbinacendekia/profil.php" class="nav-item nav-link">Profil</a>
                        <a href="<?= BASE_URL ?>mtsbinacendekia/fasilitas.php" class="nav-item nav-link">Fasilitas</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Estrakulikuler</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?= BASE_URL ?>mtsbinacendekia/osis.php" class="dropdown-item">Osis</a>
                                <a href="<?= BASE_URL ?>mtsbinacendekia/pramuka.php" class="dropdown-item">Pramuka</a>
                                <a href="<?= BASE_URL ?>mtsbinacendekia/pagarnusa.php" class="dropdown-item">Pagar Nusa</a>
                                <a href="<?= BASE_URL ?>mtsbinacendekia/paskibra.php" class="dropdown-item">Paskibra</a>
                                <a href="<?= BASE_URL ?>mtsbinacendekia/pmr.php" class="dropdown-item">PMR</a>
                                <a href="<?= BASE_URL ?>mtsbinacendekia/futsal.php" class="dropdown-item">Futsal</a>
                                <a href="<?= BASE_URL ?>mtsbinacendekia/hadroh.php" class="dropdown-item">Hadroh</a>
                            </div>
                        </div>
                        <a href="<?= BASE_URL ?>mtsbinacendekia/layouts/kontak.php" class="nav-item nav-link" id="content-container">Contact</a>
                        <a href="<?= ASSETS_PATH_ADMIN?>login.php" class="nav-item nav-link" id="content-container">Login</a>
                        </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->