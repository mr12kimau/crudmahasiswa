<?php echo $judul; ?></h1>
    </h1>
    <div class=" row">
        <div class="col-md-6"><a href="<?= base_url() ?>pinjaman/tambah" class="btn btn-info mb-2">
                Tambah Pinjaman</a></div>
        <div class="col-md-12">
        <?= $this->session->flashdata('message'); ?>
            <table class="table-responsive">
                <thead>
                    <tr>
                        <td><b>No</b></td>
                        <td><b>NIK</b></td>
                        <td><b>Nama</b></td>
                        <td><b>Alamat</b></td>
                        <td><b>Email</b></td>
                        <td><b>No Telpon</b></td>
                        <td><b>Besar Pinjaman</b></td>
                        <td><b>Durasi</b></td>
                        <td><b>Aksi</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($Pinjaman as $us): ?>
                        <tr>
                            <td>
                                <?= $i; ?>
                            </td>
                            <td>
                                <?= $us['nik']; ?>
                            </td>
                            <td>
                                <?= $us['nama']; ?>
                            </td>
                            <td>
                                <?= $us['alamat']; ?>
                            </td>
                            <td>
                                <?= $us['email']; ?>
                            </td>
                            <td>
                                <?= $us['no_telpon']; ?>
                            </td>
                            <td>
                                <?= $us['BesarPinjaman']; ?>
                            </td>
                            <td>
                                <?= $us['durasi']; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('Pinjaman/hapus/') . $us['nik']; ?>" class="badge badge-danger">Hapus</a>
                                <a href="<?= base_url('Pinjaman/edit/') . $us['nik']; ?>" class="badge badge-warning">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>