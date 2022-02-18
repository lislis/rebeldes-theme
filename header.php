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

	    <header id="masthead" class="site-header">
		<div class="site-branding">
		    <?php
		    the_custom_logo();
		    if ( is_front_page() && is_home() ) :
		    ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		    <?php
		    else :
		    ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		    <?php
		    endif;
                    ?>
		</div><!-- .site-branding -->
                <div class="site-claim">
                    <?php $rebeldes_description = get_bloginfo( 'description', 'display' );
		    if ( $rebeldes_description || is_customize_preview() ) :
		    ?>
			<p class="site-description"><?php echo $rebeldes_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		    <?php endif; ?>
                </div>

		<nav id="site-navigation" class="main-navigation">
		    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rebeldes' ); ?></button>
		    <?php
		    wp_nav_menu(
			array(
			    'theme_location' => 'menu-1',
			    'menu_id'        => 'primary-menu',
			)
		    );
		    ?>
		</nav><!-- #site-navigation -->
	    </header><!-- #masthead -->
