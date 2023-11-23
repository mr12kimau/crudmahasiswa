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
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Ruangan</label>
                            <input type="text" name="ruangan" value="<?= set_value('ruangan'); ?>"  class="form-control" id="ruangan" placeholder="Ruangan">
                            <?= form_error('ruangan', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Jurusan</label>
                            <input type="text" name="jurusan" value="<?= set_value('jurusan'); ?>" class="form-control" id="jurusan" placeholder="Jurusan">
                            <?= form_error('jurusan', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Akreditasi</label>
                            <input type="text" name="akreditasi" value="<?= set_value('akreditasi'); ?>" class="form-control" id="akreditasi"
                                placeholder="Akreditasi">
                                <?= form_error('akreditasi', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" value="<?= set_value('nama_kaprodi'); ?>" class="form-control" id="kaprodi" placeholder="Kaprodi">
                            <?= form_error('nama_kaprodi', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" value="<?= set_value('tahun_berdiri'); ?>" class="form-control" id="tahun" placeholder="Tahun">
                            <?= form_error('tahun_berdiri', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode">Output Lulusan</label>
                            <input type="text" name="output_lulusan" value="<?= set_value('output_lulusan'); ?>" class="form-control" id="output" placeholder="Output">
                            <?= form_error('output_lulusan', '<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                        <label for="kode">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar', '<small class="text-danger p1-3">','</small>'); ?>
                            </div>
                        </div>
                        <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Prodi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>