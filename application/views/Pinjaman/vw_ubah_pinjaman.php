<?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data pinjaman
                </div>
                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $pinjaman['nik']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $pinjaman['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">NIK</label>
                            <input type="text" name="nik" value="<?= $pinjaman['nik']; ?>"  class="form-control" id="ruangan" placeholder="NIK">
                            <?= form_error('nik', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Email</label>
                            <input type="text" name="email" value="<?= $pinjaman['email']; ?>" class="form-control" id="email" placeholder="email">
                            <?= form_error('email', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Durasi</label>
                            <input type="text" name="durasi" value="<?= $pinjaman['durasi']; ?>" class="form-control" id="durasi"
                                placeholder="durasi">
                                <?= form_error('durasi', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Alamat</label>
                            <input type="text" name="alamat" value="<?= $pinjaman['alamat']; ?>" class="form-control" id="Alamat" placeholder="Alamat">
                            <?= form_error('alamat', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">No Telpon</label>
                            <input type="text" name="no_telpon" value="<?= $pinjaman['no_telpon']; ?>" class="form-control" id="No Telpon" placeholder="No Telpon">
                            <?= form_error('no_telpon', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Besar Pinjaman</label>
                            <input type="text" name="BesarPinjaman" value="<?= $pinjaman['BesarPinjaman']; ?>" class="form-control" id="BesarPinjaman" placeholder="Besar Pinjaman">
                            <?= form_error('BesarPinjaman', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <a href="<?= base_url('Pinjaman') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>