<!DOCTYPE html>
<html <?php language_attributes(); ?>  ng-app="phtApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Phuket Happiness Trip</title>
    <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">-->
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/flexslider.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/lightgallery.min.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri() ?>/css/main.css" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body <?php  body_class()?>>
<section class="section-nav">
    <div class="nav <?php echo (is_front_page()) ? 'fr-page' : '' ?>">
        <div class="container">
            <div class="nav-logo">
                <a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt=""></a>
            </div>

            <div class="nav-mobile">
                <i class="fa fa-bars"></i>
            </div>
            <div class="nav-menu">
                <ul class="list-unstyled">
                    <li><a href="<?php echo site_url() ?>">Home</a></li>
                    <li><a href="">Package</a></li>
                    <li><a href="<?php echo site_url('testimonial') ?>">Testimonial</a></li>
                    <li><a href="<?php echo site_url('gallery') ?>">Gallery</a></li>
                    <li><a href="<?php echo site_url('contact-us') ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>