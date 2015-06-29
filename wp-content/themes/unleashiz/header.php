<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body <?php body_class(); ?>> 
    
    <header id="page" class="hfeed site">
        <?php if ( get_header_image() ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" id="link-logo" title="<?php bloginfo('description'); ?>">
                <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            </a>
        <?php endif; ?>
        <nav  id="primary-navigation" class="site-navigation primary-navigation btn-group" role="navigation"> 
            <button class="btn btn-default dropdown-toggle" type="button" aria-label="Center Align" data-toggle="dropdown">
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </button>
            <!--<ul class="dropdown-menu">
                <li class="li-1"><span id="menu-1">Concept</span></li>
                <li><span id="menu-2">Bénéfices</span></li>
                <li><span id="menu-3">Offre</span></li>
                <li><span id="menu-4">Conviction</span></li>
                <li><span id="menu-5">Contactez-nous</span></li>
                <li class="li-2"><a href="" title="">A propos</a></li>
                <li><a href="" title="">Blog</a></li>
                <li><a href="" title=""><img src="<?php media_url(); ?>facebook.png" alt="Suivez nous sur Facebook"></a></li>
                <li class="li-3"><a href="" title=""><img src="<?php media_url(); ?>twitter.png" alt="Suivez nous sur Twitter"></a></li>
                <li class="li-3"><a href="" title=""><img src="<?php media_url(); ?>linkedin.png" alt="Suivez nous sur Linkedin"></a></li>
            </ul>-->

            <!--a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'unleashiz' ); ?></a-->
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'dropdown-menu', 'menu_id' => 'primary-menu' ) ); ?>
        </nav>
    </header>
    <main id="main" class="site-main">
