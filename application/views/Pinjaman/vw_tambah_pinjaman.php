<?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Prodi
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">NIK</label>
                            <input type="text" name="nik" value="<?= set_value('nik'); ?>"  class="form-control" id="nik" placeholder="NIK">
                            <?= form_error('nik', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Email</label>
                            <input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control" id="email" placeholder="email">
                            <?= form_error('email', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Durasi</label>
                            <input type="text" name="durasi" value="<?= set_value('durasi'); ?>" class="form-control" id="durasi"
                                placeholder="durasi">
                                <?= form_error('durasi', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Alamat</label>
                            <input type="text" name="alamat" value="<?= set_value('alamat'); ?>" class="form-control" id="alamat" placeholder="Alamat">
                            <?= form_error('alamat', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">No Telpon</label>
                            <input type="text" name="no_telpon" value="<?= set_value('no_telpon'); ?>" class="form-control" id="no_telpon" placeholder="No Telpon">
                            <?= form_error('no_telpon', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Besar Pinjaman</label>
                            <input type="text" name="BesarPinjaman" value="<?= set_value('BesarPinjaman'); ?>" class="form-control" id="BesarPinjaman" placeholder="Besar Pinjaman">
                            <?= form_error('BesarPinjaman', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <a href="<?= base_url('Pinjaman') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Peminjam</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>