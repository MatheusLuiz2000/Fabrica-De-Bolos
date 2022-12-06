<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $titulo; ?></title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">

    <?php foreach ($css as $key => $cada1): ?>
        <link href="<?= base_url() . $cada1; ?>" rel="stylesheet" type="text/css">
    <?php endforeach; ?>
</head>
<input type="hidden" value="<?= base_url()?>" id="base_url">

<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <div class="left-side-logo d-block d-lg-none">
                <div class="text-center">

                    <a href="index.html" class="logo"><img src="<?= base_url() ?>assets/images/logo-dark.png" width="180" alt="logo"></a>
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="<?= base_url() ?>inicio" class="waves-effect">
                                <i class="dripicons-meter"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>inicio/clientes" class="waves-effect">
                                <i class="dripicons-user-group"></i>
                                <span>Clientes</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>inicio/cadastrarCliente" class="waves-effect">
                                <i class="dripicons-user"></i>
                                <span>Cadastrar Cliente</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>inicio/buscaCliente" class="waves-effect">
                                <i class="dripicons-search"></i>
                                <span>Busca Cliente</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <div class="topbar-left	d-none d-lg-block">
                        <div class="text-center">

                            <a class="logo"><img src="<?= base_url() ?>assets/images/logo.png" width="180" alt="logo"></a>
                        </div>
                    </div>

                    <nav class="navbar-custom">

                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="<?= base_url() ?>assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i>Sair</a>
                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item">
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="ion-navicon"></i>
                                </button>
                            </li>
                        </ul>

                        <div class="clearfix"></div>

                    </nav>

                </div>