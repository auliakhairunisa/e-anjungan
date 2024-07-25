<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        "Loading..."
    </div>
</div>

<main class="main-wrapper">
    <!-- Navigation -->
    <header class="nav">
        <div class="nav__holder nav--sticky">
            <div class="container-fluid nav__container nav__container--side-padding">
                <div class="flex-parent">
                    <div class="nav__header">
                        <!-- Logo -->
                        <a href="<?= base_url('') ?>" class="logo-container flex-child">
                            <img class="logo" src="<?= base_url('assets/') ?>front-end/img/logo_anjungan.png" srcset="img/logo_anjungan.png 1x, <?= base_url('assets/') ?>front-end/img/logo_anjungan@2x.png 2x" alt="logo">
                        </a>
                        <!-- Mobile toggle -->
                        <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="nav__icon-toggle-bar"></span>
                            <span class="nav__icon-toggle-bar"></span>
                            <span class="nav__icon-toggle-bar"></span>
                        </button>
                    </div>
                    <!-- Navbar -->
                    <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse">
                        <ul class="nav__menu">
                            <li class="nav__dropdown">
                                <a href="<?= base_url('') ?>" class="<?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">Beranda</a>
                            </li>
                            <li class="nav__dropdown">
                                <a href="<?= base_url('berita') ?>" class="<?= ($this->uri->segment(1) == 'berita') ? 'active' : '' ?>">Berita</a>
                            </li>
                            <li class="nav__dropdown">
                                <a href="<?= base_url('galeri') ?>" class="<?= ($this->uri->segment(1) == 'galeri') ? 'active' : '' ?>">Galeri</a>
                            </li>
                            <li class="nav__dropdown">
                                <a href="<?= base_url('visitor') ?>" class="<?= ($this->uri->segment(1) == 'visitor') ? 'active' : '' ?>">Form Pengunjung</a>
                            </li>
                        </ul> <!-- end menu -->
                        <div class="nav__phone nav__phone--mobile d-lg-none"></div>
                        <div class="nav__socials nav__socials--mobile d-lg-none">
                            <div class="socials">
                                <a href="https://www.facebook.com/people/Anjungan-Sumbar/pfbid02ZM7jp3SrXGihbvGkwVuSnRfupzNRjTEor55RTbi2Y3RSkYpnnBcTiBNjJxK6qTcRl/" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                                <a href="https://www.instagram.com/anjungansumbar_tmii/" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                                <a href="<?= base_url('auth') ?>" aria-haspopup="true">Login</a>
                            </div>
                        </div>
                    </nav> <!-- end nav-wrap -->
                    <div class="nav__phone nav--align-right d-none d-lg-block">
                        <span class="nav__phone-text"></span>
                    </div>
                    <div class="nav__socials d-none d-lg-block">
                        <div class="socials">
                            <a href="https://l.instagram.com/?u=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100007284195753&e=AT0JBtj3svrnG_1danHdWct2ILrTjRN17k4u3YZ55RH9WA-CtGG-_SETN9lQZfPzmnwhD_PuFaDRf-gh0fhbHhvpeBVUydrWABDlKA" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                            <a href="https://www.instagram.com/anjungansumbar_tmii/" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                            <div class="nav__menu">
                                <div class="nav__dropdown">
                                    <a href="<?= base_url('auth') ?>" aria-haspopup="true">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end flex-parent -->
            </div> <!-- end container -->
        </div>
    </header> <!-- end navigation -->

    <!-- Main content here -->

</main>

<!-- Include JavaScript at the end of the body tag -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const currentLocation = location.href;
        const menuItem = document.querySelectorAll('.nav__menu a');
        const menuLength = menuItem.length;
        for (let i = 0; i < menuLength; i++) {
            console.log(menuItem[i].href); // Debug: log href of each menu item
            if (menuItem[i].href === currentLocation) {
                console.log("Active link found:", menuItem[i]); // Debug: log the active link
                menuItem[i].classList.add('active');
            }
        }
    });
</script>