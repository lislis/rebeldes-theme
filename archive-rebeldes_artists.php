<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rebeldes
 */

get_header();
?>


<main id="primary" class="site-main site-artists">
    <div class="layout-inner">
        <ul class="artists-list">
            <?php if ( have_posts() ) : ?>
	        <?php while ( have_posts() ) : ?>
                    <li>
	                <?php
                        the_post();
	                get_template_part( 'template-parts/content', 'artist');
                        ?>
                    </li>
	        <?php endwhile; ?>
	    <?php endif; ?>
        </ul>
    </div>
</main><!-- #main -->
<?php get_template_part( 'template-parts/real', 'footer' ); ?>
