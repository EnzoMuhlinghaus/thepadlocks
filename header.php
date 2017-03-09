<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo( 'name' ); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/jquery.scrollTo.js"></script>
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/css/player.css">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/css/responsive.css">
    
</head>

<body <?php body_class();?>>
<header id="header" role="banner">
    <div class="main-nav">
        <div class="container">
            <div class="header-top">
                <div class="pull-right social-icons">
                    <a href="https://www.facebook.com/thepadlocksband"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/thepadlocksband/"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('url' ); ?>" style="display: none;">
                        <img class="img-responsive" src="<?php bloginfo('template_directory' ); ?>/img/logo.png" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#explore">Qui sommes-nous ?</a></li>
                        <li class="scroll"><a href="#team">Musiciens</a></li>
                        <li class="scroll"><a href="#music">Ecoutez nous !</a></li>
                        <li class="scroll"><a href="#concert">Concerts</a></li>
                        <li class="scroll"><a href="#galerie">galerie</a></li>
                        <li class="scroll"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--/#header-->

<section id="home">
    <div class="headerContent">
        <div class="headerText ">
            <div class="titleWrapper ">
                <a href="<?php bloginfo('url'); ?>" class="title">
                    <img class="logo-slider"  src="<?php bloginfo('template_directory' ); ?>/img/slider/bgwhite.png" alt="logo">
                </a>
            </div>
        </div>
    </div>
</section><!--/#home-->

   