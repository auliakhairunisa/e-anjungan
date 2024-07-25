<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-4">
            <div class="card login-box-container">
                <div class="card-body">
                    <div class="authent-logo">
                        <img src="<?= base_url('assets/') ?>back-end/images/logo_anjungan@2x.png" alt="">
                    </div>
                    <div class="authent-text">
                        <p>Sign-in untuk Masuk ke Akun</p>
                    </div>

                    <?= $this->session->flashdata('message'); ?>

                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>">
                                <label for="floatingInput">Username</label>
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-info m-b-xs">Sign In</button>
                        </div>
                        <div class="d-grid text-center">
                            <a class="btn btn-primary m-b-xs" href='<?= base_url() ?>'>Kembali ke E-Anjungan</a>
                        </div>
                    </form>
                    <!--
                    <div class="authent-reg">
                        <p>Belum punya akun? <a href="<?= base_url('auth/registration'); ?>">Buat akun</a></p>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>