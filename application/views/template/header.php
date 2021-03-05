<!DOCTYPE html>
<html lang="id" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Pusat Data dan Sistem Informasi - Kementerian Perdagangan Republik Indonesia">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ESPPD Adalah Sistem Informasi Perjalanan Dinas di Lingkungan Kementerian Perdagangan Republik Indonesia">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?= base_url() ?>resources/images/favicon.png">
    <!-- Page Title  -->
    <title><?= ($judul) ? $judul . ' | ' : ''; ?> ESPPD</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?= base_url() ?>resources/assets/css/dashlite.css?ver=2.2.0">
    <link id="skin-default" rel="stylesheet" href="<?= base_url() ?>resources/assets/css/theme.css?ver=2.2.0">

    <!-- Selectize -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/selectize@0.12.2/dist/css/selectize.bootstrap3.css"/>
</head>

<body class="nk-body npc-invest bg-lighter ">
    <div class="nk-app-root">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <div class="nk-header nk-header-fluid is-light">
                <div class="container-xl wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img" src="<?= base_url() ?>resources/images/logo.png" srcset="<?= base_url() ?>resources/images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img" src="<?= base_url() ?>resources/images/logo-dark.png" srcset="<?= base_url() ?>resources/images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div><!-- .nk-header-brand -->
                        <div class="nk-header-menu" data-content="headerNav">
                            <div class="nk-header-mobile">
                                <div class="nk-header-brand">
                                    <a href="html/index.html" class="logo-link">
                                        <img class="logo-light logo-img" src="<?= base_url() ?>resources/images/logo.png" srcset="<?= base_url() ?>resources/images/logo2x.png 2x" alt="logo">
                                        <img class="logo-dark logo-img" src="<?= base_url() ?>resources/images/logo-dark.png" srcset="<?= base_url() ?>resources/images/logo-dark2x.png 2x" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-menu-trigger mr-n2">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                                </div>
                            </div>
                            <ul class="nk-menu nk-menu-main ui-s2">
                                <li class="nk-menu-item">
                                    <a href="<?= base_url() ?>" class="nk-menu-link">
                                        <span class="nk-menu-text"><em class="icon ni ni-home"></em> HOME</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="<?= site_url() ?>surat-tugas" class="nk-menu-link">
                                        <span class="nk-menu-text"><em class="icon ni ni-briefcase"></em> SURAT TUGAS</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text"><em class="icon ni ni-file-docs"></em> LAPORAN</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?= site_url() ?>laporan" class="nk-menu-link"><span class="nk-menu-text">Laporan SPPD</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= site_url() ?>laporan/rekapitulasi" class="nk-menu-link"><span class="nk-menu-text">Rekap Perjalanan Dinas</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text"><em class="icon ni ni-coins"></em> REFERENCE</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Pegawai</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Data Pegawai</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Golongan Pangkat</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Jabatan</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Eselon</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Eselon 1</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Unit Kerja</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Tingkat</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Wilayah</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Negara</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Provinsi</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Kabupaten</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Kecamatan</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Bandara</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Biaya</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Kelompok Biaya</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Sub Kelompok Biaya</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Representasi</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Harian</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Harian FUll Board / Full Day</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Taxi</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Penginapan / Hotel</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Sewa Kendaraan</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Pesawat</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Rekening</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Sumber Dana</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">Kegiatan / Pagu</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->

                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text"><em class="icon ni ni-setting"></em> SETTINGS</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?= site_url() ?>settings/umum" class="nk-menu-link"><span class="nk-menu-text">Umum</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= site_url() ?>settings/format-nomor" class="nk-menu-link"><span class="nk-menu-text">Format Nomor</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= site_url() ?>settings/pengguna" class="nk-menu-link"><span class="nk-menu-text">Pengguna</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link"><span class="nk-menu-text">Backup / Restore Database</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text"><em class="icon ni ni-download"></em> MANUAL</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link"><span class="nk-menu-text">Verifikator</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link"><span class="nk-menu-text">Operator</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-header-menu -->
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
            
                                <li class="dropdown user-dropdown order-sm-first">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-xl-block">
                                                <div class="user-status">Administrator</div>
                                                <div class="user-name dropdown-indicator">Abu Bin Ishityak</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1 is-light">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">Abu Bin Ishtiyak</span>
                                                    <span class="sub-text">info@softnio.com</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner user-account-info">
                                            <h6 class="overline-title-alt">Informasi Akun</h6>
                                            <div class="user-balance-sub font-weight-bold">Role <span class=" text-primary">Pengguna</span></div>
                                            <div class="user-balance-sub font-weight-bold">Last Login <span class="text-primary">10 Desember 2022</span></div>

                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="#"><em class="icon ni ni-setting"></em><span>Pengaturan Akun</span></a></li>
                                                <li ><a href="#"><em class="icon ni ni-signout"></em><span>Keluar</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li><!-- .dropdown -->
                            </ul><!-- .nk-quick-nav -->
                        </div><!-- .nk-header-tools -->
                    </div><!-- .nk-header-wrap -->
                </div><!-- .container-fliud -->
            </div>
            <!-- main header @e -->