<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>assets/dest/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>assets/dest/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <?php wp_head(); ?>
</head>

    <body <?php body_class(); ?>>
        <div class="container">
            <!-- END header -->
            <div class="content-container" class="clearfix">
                <div class="main-content">
                    <header>
                        <div class="misc-items">
                            <ul class="top-nav">
                                <li><a href="<?php echo home_url(); ?>">Home</a> <span> | </span> </li>
                                <li><a href="http://localhost/soccer/about">About Us</a> <span> | </span> </li>
                                <li><a href="faq.html">FAQ</a> <span> | </span> </li>
                                <li><a href="contact.html">Contact</a> </li>
                            </ul>
                            <a href="#" class="facebook-link"><img class="facebook-icon" src="<?php echo get_template_directory_uri(); ?>/assets/dest/img/icon_facebook.png" width="136" height="40" alt="Facebook Icon"></a>
                            <div class="search-container">
                                <?php get_template_part('searchform'); ?>
                            </div>
                            <!-- END .search-container -->
                            <a class="donate" target="_blank" href="#"> <img width="199" height="34" alt="Donate" src="<?php echo get_template_directory_uri(); ?>/assets/dest/img/button_donate.png"> </a>
                        </div>
                        <!-- END .misc-items -->
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/dest/img/bhs_logo.png" alt="BHS Logo" width="121" height="121" class="logo"></a>
                        <nav>
                            <ul class="main-nav">
                                <li class="nav-home"><a href="index.html">HOME</a></li>
                                <li class="nav-about"><a class="current" href="#">ABOUT US</a></li>
                                <li class="nav-service"><a href="#">SERVICES</a></li>
                                <li class="nav-addict"><a href="#">WHAT IS ADDICTION?</a></li>
                                <li class="nav-appoint"><a href="#">MAKE AN APPOINTMENT</a></li>
                                <li class="nav-contact"><a href="#">CONTACT</a></li>
                            </ul>
                        </nav>
                        <!-- END nav -->
                    </header>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about_us.html">About Us</a></li>
                        <li><a href="#" class="current-page">Mission, Vision, Values</a></li>
                    </ol>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
