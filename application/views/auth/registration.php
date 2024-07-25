<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-4">
            <div class="card login-box-container">
                <div class="card-body">
                    <div class="authent-logo">
                        <img src="<?= base_url('assets/') ?>back-end/images/logo_anjungan@2x.png" alt="">
                    </div>
                    <div class="authent-text">
                        <p>Masukkan Data untuk Membuat Akun</p>
                    </div>

                    <?= $this->session->flashdata('message'); ?>

                    <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>">
                                <label for="floatingInput">Username</label>
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?= set_value('email') ?>">
                                <label for="floatingInput">Alamat Email</label>
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password">
                                <label for="floatingPassword">Konfirmasi Password</label>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-info m-b-xs">Register</button>
                        </div>
                    </form>
                    <div class="authent-login">
                        <p>Sudah punya akun? <a href="<?= base_url('auth'); ?>">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>