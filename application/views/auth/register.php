<!DOCTYPE html>
<html lang="en">

<!-- auth-register.html  Tue, 07 Jan 2020 03:39:47 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Register &mdash; CodiePie</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="<?= base_url('assets/') ?>modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="<?= base_url('assets/') ?>modules/jquery-selectric/selectric.css">

<!-- Template CSS -->
<link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.min.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>css/components.min.css">
</head>

<body class="layout-4">

<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="http://puffintheme.com/craft/codiepie/dist/assets/img/CodiePie-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Buat Akun</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('auth/registrasi'); ?>">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="nama">Nama Lengkap</label>
                                        <input id="nama" type="text" value="<?= set_value('nama') ?>" class="form-control" name="nama" autofocus>
                                        <?= form_error('nama', '<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" value="<?= set_value('email') ?>" class="form-control" name="email">
                                    <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password1" type="password" value="<?= set_value('password1') ?>" class="form-control pwstrength" data-indicator="pwindicator" name="password1">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                            <?= form_error('password1', '<small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password2" type="password" value="<?= set_value('password2') ?>" class="form-control" name="password2">
                                        <?= form_error('password2', '<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <a class="small" href="<?=base_url('Auth'); ?>">Sudah Punya Akun? Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; CodiePie 2020
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="<?= base_url('assets/') ?>bundles/lib.vendor.bundle.js"></script>
<script src="<?= base_url('assets/') ?>js/CodiePie.js"></script>

<!-- JS Libraies -->
<script src="<?= base_url('assets/') ?>modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="<?= base_url('assets/') ?>modules/jquery-selectric/jquery.selectric.min.js"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url('assets/') ?>js/page/auth-register.js"></script>

<!-- Template JS File -->
<script src="<?= base_url('assets/') ?>js/scripts.js"></script>
<script src="<?= base_url('assets/') ?>js/custom.js"></script>
</body>

<!-- auth-register.html  Tue, 07 Jan 2020 03:39:48 GMT -->
</html>