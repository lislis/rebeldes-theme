<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rebeldes
 */

get_header();
?>

<main id="primary" class="site-single-artist">

    <?php
    while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content-single', 'artist' );

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php get_template_part( 'template-parts/artists', 'overview' ); ?>
<?php get_template_part( 'template-parts/real', 'footer' ); ?>
