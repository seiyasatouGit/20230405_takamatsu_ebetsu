<?php
/**
 * Lightning G3 Header
 *
 * @package vektor-inc/lightning
 */

do_action( 'get_header' ); ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
global $lightning_theme_options;
$lightning_theme_options = get_option( 'lightning_theme_options' );
?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#main"><?php _e( 'Skip to the content', 'lightning' ); ?></a>
<a class="skip-link screen-reader-text" href="#vk-mobile-nav"><?php _e( 'Skip to the Navigation', 'lightning' ); ?></a>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>
<header>
    <section class="header_wrapper">
    <img class="header_kai"src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header_kai.svg">
    <a class="header_link" href="/top/">
     <img class="header_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header_logo.svg">
    </a>
    <img class="header_wa"src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header_wa.svg">

</section>
</header>