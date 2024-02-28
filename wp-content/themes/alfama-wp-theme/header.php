<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>


    <!-- Head Tags -->
    <!-- Meta Data -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <!-- Viewport  -->
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>

    <!-- Favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo get_template_directory_uri(); ?>/assets/img/meta/favicon.png'>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/meta/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/meta/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Meta -->
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">

    <!-- Wordpress Shit -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>


    <!-- Head Links Libraries -->
    <!-- Alertify -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/alertify/css/alertify.core.css'>
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/alertify/css/alertify.default.css'>

    <!-- Lightbox -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/lightbox/css/lightbox.css'>

    <!-- Font Awesome -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/fontawesome/css/all.css'>

    <!-- Bootstrap -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap/bootstrap.min.css'>

    <!-- Normalize -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/normalize/normalize.css'>

    <!-- Lince Form -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/linceform/linceform.css'>

    <!-- jQuery -->
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/jquery/jquery-1.11.1.min.js'></script>

    <!-- Wow -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/wow/animate.min.css'>

    <!-- Main CSS -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/css/style.css'>

    <!-- lightcase -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/lightcase/css/lightcase.css'>

    <!--  Owl Carousel  -->
    <link rel='stylesheet prefetch' href='<?php echo get_template_directory_uri(); ?>/assets/libs/owl/owl.carousel.css'>
    <link rel='stylesheet prefetch' href='<?php echo get_template_directory_uri(); ?>/assets/libs/owl/owl.theme.default.css'>

    <!-- Modernizr  -->
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/modernizr/modernizr.js'></script>

    <!-- HTML5 Shiv -->
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/html5shiv.min.js'></script>


</head>

<body <?php body_class(); ?>>
