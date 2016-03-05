<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>BHS</title>
        <!-- <base href="/"> -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/node_modules/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">

<?php wp_head(); ?>
</head>

    <body class="my-about-page">
        <div class="container">
            <!-- END header -->
            <div class="content-container" class="clearfix">
                <div class="main-content">
                    <header>
                        <div class="misc-items">
                            <ul class="top-nav">
                                <li><a href="index.html">Home</a> <span> | </span> </li>
                                <li><a href="about_us.html">About Us</a> <span> | </span> </li>
                                <li><a href="faq.html">FAQ</a> <span> | </span> </li>
                                <li><a href="contact.html">Contact</a> </li>
                            </ul>
                            <a href="#" class="facebook-link"><img class="facebook-icon" src="<?php bloginfo('template_url'); ?>/assets/img/icon_facebook.png" width="136" height="40" alt="Facebook Icon"></a>
                            <div class="search-container">
                                <form class="search-form" method="get" action="#">
                                    <input class="search-input" type="text" onFocus="this.value=(this.value=='Search...')? '' : this.value ;" value="Search..." name="search">
                                    <input class="search-submit" type="image" value="Search" src="<?php bloginfo('template_url'); ?>/assets/img/btn_search.gif">
                                </form>
                            </div>
                            <!-- END .search-container -->
                            <a class="donate" target="_blank" href="#"> <img width="199" height="34" alt="Donate" src="<?php bloginfo('template_url'); ?>/assets/img/button_donate.png"> </a>
                        </div>
                        <!-- END .misc-items -->
                        <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/assets/img/bhs_logo.png" alt="BHS Logo" width="121" height="121" class="logo"></a>
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
