<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rebeldes
 */

get_header();
?>

<?php
$fi = $dynamic_featured_image->get_featured_images([$post->ID]);
$index = array_rand($fi, 1);
?>

<div>
    <div class="hero" style="background-image: url(<?php echo $fi[$index]['full']; ?>)">
    <div class="hero-description">
        <?php $rebeldes_description = get_bloginfo( 'description', 'display' );
        if ( $rebeldes_description || is_customize_preview() ) :
        ?>
            <p class="site-description"><?php echo $rebeldes_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
        <?php endif; ?>
    </div>


    <div class="hero-logo">
        <h1 class=""><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php get_template_part( 'design/svg', 'logo' ); ?>
        </a></h1>

    </div>
</div>
</div>
<main id="primary" class="site-main site-frontpage">
    <div class="layout-inner">
        <div class="front-content">
            <header class="front-sideline">
                <p class="front-date"><?php echo get_option('front_exhibition_date'); ?></p>
                <p class="front-place"><?php echo get_option('front_exhibition_place'); ?></p>
            </header>
            <?php
            while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'front' );

            endwhile; // End of the loop.
            ?>
        </div>
    </div>

    <?php get_template_part( 'template-parts/artists', 'overview' ); ?>

    <?php if (get_option('front_catalogue') || get_option('front_flyer')) : ?>
    <div class="layout-inner">
        <div class="front-content front-footer">
            <?php
            if (get_option('front_catalogue')) : ?>
                <div class="m-b-20">
                    <a href="<?php echo get_option('front_catalogue')?>" download class="btn  btn-download">
                        <?php _e('Catalogue', 'rebeldes'); ?>
                    </a>
                </div>
            <?php endif; ?>

            <?php
            if (get_option('front_flyer')) : ?>
                <div>
                    <a href="<?php echo get_option('front_flyer')?>" download class="btn btn-download">
                        <?php _e('Flyer', 'rebeldes'); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
</div>
</main>

<?php get_template_part( 'template-parts/real', 'footer' ); ?>
