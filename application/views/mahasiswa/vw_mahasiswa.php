<?php echo $judul; ?></h1>
    </h1>
    <div class=" row">
        <div class="col-md-6"><a href="<?= base_url() ?>Mahasiswa/tambah" class="btn btn-info mb-2">
                Tambah Mahasiswa</a></div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table-responsive">
                <thead>
                    <tr>
                        <td><b>No</b></td>
                        <td><b>Nama</b></td>
                        <td><b>Nim</b></td>
                        <td><b>Jenis Kelamin</b></td>
                        <td><b>Email</b></td>
                        <td><b>Prodi</b></td>
                        <td><b>Asal Sekolah</b></td>
                        <td><b>No Hp</b></td>
                        <td><b>Alamat</b></td>
                        <td><b>Aksi</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $us): ?>
                        <tr>
                            <td>
                                <?= $i; ?>
                            </td>
                            <td>
                                <?= $us['nama']; ?>
                            </td>
                            <td>
                                <?= $us['nim']; ?>
                            </td>
                            <td>
                                <?= $us['jenis_kelamin']; ?>
                            </td>
                            <td>
                                <?= $us['email']; ?>
                            </td>
                            <td>
                                <?= $us['prodi']; ?>
                            </td>
                            <td>
                                <?= $us['asal_sekolah']; ?>
                            </td>
                            <td>
                                <?= $us['no_hp']; ?>
                            </td>
                            <td>
                                <?= $us['alamat']; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="badge badge-info">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>