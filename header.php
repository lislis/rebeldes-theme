<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rebeldes

 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-config" content="<?php echo get_template_directory_uri() ?>/assets/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="page" class="site">
	    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rebeldes' ); ?></a>
            <div class="layout-inner">
                <header id="masthead" class="masthead">
                    <?php get_template_part( 'template-parts/nav', 'desktop' ); ?>

                    <?php get_template_part( 'template-parts/nav', 'mobile' ); ?>
                </header>
            </div>
