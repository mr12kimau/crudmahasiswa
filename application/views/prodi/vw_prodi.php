<?php echo $judul; ?></h1>
    </h1>
    <div class=" row">
        <div class="col-md-6"><a href="<?= base_url() ?>Prodi/tambah" class="btn btn-info mb-2">
                Tambah Prodi</a></div>
        <div class="col-md-12">
        <?= $this->session->flashdata('message'); ?>
            <table class="table-responsive">
                <thead>
                    <tr>
                        <td><b>No</b></td>
                        <td><b>Nama Prodi</b></td>
                        <td><b>Ruangan</b></td>
                        <td><b>Jurusan</b></td>
                        <td><b>Akreditasi</b></td>
                        <td><b>Nama Kaprodi</b></td>
                        <td><b>Tahun Berdiri</b></td>
                        <td><b>Output Lulusan</b></td>
                        <td><b>Gambar</b></td>
                        <td class="center"><b>Action</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($prodi as $us): ?>
                        <tr>
                            <td>
                                <?= $i; ?>
                            </td>
                            <td>
                                <?= $us['nama']; ?>
                            </td>
                            <td>
                                <?= $us['ruangan']; ?>
                            </td>
                            <td>
                                <?= $us['jurusan']; ?>
                            </td>
                            <td>
                                <?= $us['akreditasi']; ?>
                            </td>
                            <td>
                                <?= $us['nama_kaprodi']; ?>
                            </td>
                            <td>
                                <?= $us['tahun_berdiri']; ?>
                            </td>
                            <td>
                                <?= $us['output_lulusan']; ?>
                            </td>
                            <td>
                                <img src="<?= base_url('assets/img/prodi/') .$us['gambar']; ?>" style="width: 100px;" class="img-thumbnail" alt="">
                            </td>
                            <td>
                                <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>