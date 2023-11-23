<!DOCTYPE html>
    <html lang="en">
    
    <!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->
    <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Tugas &mdash; CodiePie</title>
    
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>modules/flag-icon-css/css/flag-icon.min.css">
    
    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/components.min.css">
    </head>
    
    <body class="layout-4">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            
            <!-- Start app top navbar -->
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="bi bi-toggles2"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                    <div class="search-backdrop"></div>
                    <div class="search-result">
                    <div class="search-header">
                        Histories
                    </div>
                    <div class="search-item">
                        <a href="#">How to hack NASA using CSS</a>
                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="search-item">
                        <a href="#">Kodinger.com</a>
                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="search-item">
                        <a href="#">#CodiePie</a>
                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="search-header">
                        Result
                    </div>
                    <div class="search-item">
                        <a href="#">
                        <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
                        oPhone S9 Limited Edition
                        </a>
                    </div>
                    <div class="search-item">
                        <a href="#">
                        <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                        Drone X2 New Gen-7
                        </a>
                    </div>
                    <div class="search-item">
                        <a href="#">
                        <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                        Headphone Blitz
                        </a>
                    </div>
                    <div class="search-header">
                        Projects
                    </div>
                    <div class="search-item">
                        <a href="#">
                        <div class="search-icon bg-danger text-white mr-3">
                            <i class="fas fa-code"></i>
                        </div>
                        CodiePie Admin Template
                        </a>
                    </div>
                    <div class="search-item">
                        <a href="#">
                        <div class="search-icon bg-primary text-white mr-3">
                            <i class="fas fa-laptop"></i>
                        </div>
                        Create a new Homepage Design
                        </a>
                    </div>
                    </div>
                </div>
                </form>
                <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="bi bi-envelope-arrow-up-fill"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-header">Messages
                        <div class="float-right">
                        <a href="#">Mark All As Read</a>
                        </div>
                    </div>
                    <div class="dropdown-list-content dropdown-list-message">
                        <a href="#" class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-avatar">
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                            <div class="is-online"></div>
                        </div>
                    </div>
                    <div class="dropdown-footer text-center">
                        <a href="#">View All <i class="bi bi-chevron-bar-contract"></i></i></a>
                    </div>
                    </div>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img class="rounded-circle mr-1" alt="image" src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>">
                    <div class="d-sm-none d-lg-inline-block">Hi, <?= $user['nama'] ?></div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-title">Logged in 5 min ago</div>
                    <a href="features-profile.html" class="dropdown-item has-icon">
                        <i class="far fa-user"></i> Profile
                    </a>
                    <a href="features-activities.html" class="dropdown-item has-icon">
                        <i class="fas fa-bolt"></i> Activities
                    </a>
                    <a href="features-settings.html" class="dropdown-item has-icon">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    </div>
                </li>
                </ul>
            </nav>
    
            <!-- Start main left sidebar menu -->
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index-2.html">CodiePie</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index-2.html">CP</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="index-0.html">Analytics</a></li>
                                <li><a class="nav-link" href="index-2.html">Ecommerce</a></li>
                            </ul>
                        </li>
                        <?php
                        if ($user['role']=='Admin') {
                            ?>
                        
                        <li class="menu-header">Menu</li>
                        <li class="nav-item">
                            <a href="<?= site_url('Mahasiswa/') ?>" class="nav-link" ><i class="fas fa-user"></i> <span>Mahasiswa</span></a>
                            </li>
                            <li class="nav-item">
                            <a href="<?= site_url('Prodi/') ?>" class="nav-link"><i class="fas fa-columns"></i> <span>Prodi</span></a>
                            </li>
                            <li class="nav-item">
                            <a href="<?= site_url('Pinjaman/') ?>" class="nav-link"><i class="fas fa-columns"></i> <span>Pinjaman</span></a>
                            </li>
                            <?php
                            } else {
                            ?>
                            <li class="nav-item">
                            <a href="<?= site_url('Profil/') ?>" class="nav-link"><i class="fas fa-columns"></i> <span>Profil</span></a>
                            </li>
                            <li class="nav-item">
                            <a href="<?= site_url('Auth/logout') ?>" class="nav-link collapsed"><i class="fas fa-columns"></i> <span>Logout</span></a>
                            </li>
                        <?php } ?>
                            </aside>
            </div>   

            <div class="main-content">
                <section class="section">
                    <div class="section-header">


                    <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">    