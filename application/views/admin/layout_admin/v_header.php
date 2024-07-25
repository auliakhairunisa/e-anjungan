<body>

    <div class="page-container">
        <div class="page-header">
            <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                <div class="" id="navbarNav">
                    <ul class="navbar-nav" id="leftNav">
                        <li class="nav-item">
                            <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="logo">
                    <!-- <a class="navbar22" href="index.html"></a> -->
                    <a href="<?= base_url('admin') ?>" class="logo-container flex-child">
                        <img class="logo" src="<?= base_url('assets/') ?>front-end/img/logo_anjungan.png" srcset="img/logo_anjungan.png 1x, <?= base_url('assets/') ?>front-end/img/logo_anjungan@2x.png 2x" alt="logo">
                    </a>
                </div>
                <div class="" id="headerNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?= base_url('assets/') ?>back-end/images/avatars/profile-image.png" alt=""></a>
                            <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i data-feather="log-out"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>