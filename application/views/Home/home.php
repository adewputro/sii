<?php include "head.php" ?>

    <section class="content landing__content">
        <section class="container">
            <center>
            <img width="200px" src="<?= base_url('assets/images/Logo SMK.png') ?>" />
            </center>
            <br>
            <h1 class="text-center" style="font-size: 50px">Selamat Datang di</h1>
            <h1 class="text-center">Digital Library SMK Negeri Jatirogo</h1>
            <br>
            <br>
            <br>
            <p class="text-center" style="font-size: 32px">Silahkan Absensi Terlebih Dahulu</p>
            <form action="<?php echo site_url('login') ?>" method="POST">
            <div class="landing__form-input">
                <div class="form-group landing__form-group">
                    <div class="form-line">
                        <input type="text" class="form-control landing__input" placeholder="Nama Lengkap" />
                    </div>
                </div>
                <button class="btn  btn-primary btn-lg">
                    Simpan
                </button>
            </div>
            </form>
            <h3 class="text-center">
                <a href="#">or guest?</a>
            </h3>
        </section>
    </section>
    <?php include "footer.php" ?>
