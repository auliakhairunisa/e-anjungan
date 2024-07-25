<div class="content-wrapper content-wrapper--boxed oh">
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url(img/page-title/contact.jpg);">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">Form Pengunjung</h1>
            </div>
        </div>
    </section> <!-- end page title -->

    <!-- Contact -->
    <section class="section-wrap">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-7 offset-lg-1">
                    <p style="text-align: center" class="mb-40">Silakan mengisi form pengunjung berikut.</p>

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Contact Form -->
                    <?php echo form_open('visitor/submit', array('id' => 'contact-form', 'class' => 'contact-form material')); ?>

                    <div class="material__form-group form-group">
                        <input type="text" name="nama" id="nama" class="form-input material__input" required="">
                        <label for="nama" class="material__label">Nama (Name)
                            <abbr title="required" class="required">*</abbr>
                        </label>
                        <span class="material__underline"></span>
                        <?php echo form_error('nama'); ?>
                    </div>

                    <div class="material__form-group form-group">
                        <label for="tipe">Tipe Pengunjung
                            <abbr title="required" class="required">*</abbr>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="domestik" value="Pengunjung Domestik">
                            <label class="form-check-label" for="domestik">
                                Pengunjung Domestik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="international" value="International Visitor" checked>
                            <label class="form-check-label" for="international">
                                International Visitor
                            </label>
                        </div>
                        <?php echo form_error('flexRadioDefault'); ?>
                    </div>

                    <div class="material__form-group form-group">
                        <input type="text" name="asal" id="asal" class="form-input material__input" required="">
                        <label for="asal" class="material__label">Daerah Asal (Place of Origin)
                            <abbr title="required" class="required">*</abbr>
                        </label>
                        <span class="material__underline"></span>
                        <?php echo form_error('asal'); ?>
                    </div>

                    <div class="material__form-group form-group">
                        <label for="tanggal">Tanggal Kunjungan (Date of Visit)
                            <abbr title="required" class="required">*</abbr>
                        </label>
                        <span class="material__underline"></span>
                        <input type="date" name="tanggal" id="tanggal" class="form-input" required="">
                        <?php echo form_error('tanggal'); ?>
                    </div>

                    <div class="material__form-group form-group">
                        <textarea id="kesan" name="kesan" rows="7" class="form-input material__input" required=""></textarea>
                        <label for="kesan" class="material__label">Kesan (Impression)
                            <abbr title="required" class="required">*</abbr>
                        </label>
                        <span class="material__underline"></span>
                        <?php echo form_error('kesan'); ?>
                    </div>

                    <div class="material__form-group form-group">
                        <textarea id="pesan" name="pesan" rows="7" class="form-input material__input" required=""></textarea>
                        <label for="pesan" class="material__label">Pesan (Message)
                            <abbr title="required" class="required">*</abbr>
                        </label>
                        <span class="material__underline"></span>
                        <?php echo form_error('pesan'); ?>
                    </div>

                    <div style="display: block; text-align: center;">
                        <input type="submit" class="btn btn--lg btn--color btn--button" value="Simpan" id="submit-message">
                        <div id="msg" class="message"></div>
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section> <!-- end contact -->
</div>

<!-- Include JavaScript at the end of the body tag -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('tanggal').value = today;
    });
</script>