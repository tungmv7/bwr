<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/print.css" media="print">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/lib.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/plugin.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/screen.css" media="screen"/>
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js" type="text/javascript"></script>
    <script src="../js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
    <?= wp_head() ?>
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/style.css" media="screen"/>
</head>
<body <?php body_class() ?>>

<div class="top-header">
    <div class="container">

        <span><a href="#footer" class="page-scroll" style="color: #ac814c;"><i>Opening Hours</i></a> - Today: <?= get_option('bwr_settings_opening_hours')[strtolower(date("D"))] ?></span>
        <ul class="list-social-1">
            <li><a href="<?= get_option('bwr_settings_general')['facebook'] ?>" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?= get_option('bwr_settings_general')['Twitter'] ?>" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?= get_option('bwr_settings_general')['Instagram'] ?>" title="Instagram"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
</div>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="/"><img
                    src="<?= get_template_directory_uri() ?>/images/logo-1.png" alt=""> <img
                    src="<?= get_template_directory_uri() ?>/images/logo-mobile.png" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-right frm-search-top">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="button" class="btn btn-default btn-search"><i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
            <?= wp_nav_menu(['menu_class' => 'nav navbar-nav navbar-right nav-scroll']); ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
