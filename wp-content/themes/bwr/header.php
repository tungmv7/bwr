<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/print.css" media="print">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/lib.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/plugin.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/screen.css" media="screen"/>
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js" type="text/javascript"></script>
    <script src="../js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
</head>
<body <?php body_class() ?>>

<div class="top-header">
    <div class="container">
        <span><i>Opening Hours :</i> Monday to Saturday - 8am to 5pm</span>
        <ul class="list-social-1">
            <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" title=""><i class="fa fa-youtube-play"></i></a></li>
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
            <a class="navbar-brand page-scroll" href="#"><img
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
