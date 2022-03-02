<?php
/**
 * Template Name: Curadoras
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rebeldes
 */

get_header();
?>

<main id="primary" class="site-main site-page">
    <div class="layout-inner">
        <article class="page-intro-only">
            <div class="entry-content">
                <?php
                while ( have_posts() ) :
                the_post();

                the_content();
                //get_template_part( 'template-parts/content', 'page' );
                endwhile; // End of the loop.
                ?>
            </div>

        </article><!-- #post-<?php the_ID(); ?> -->

        <section>
            <?php
            /* The 2nd Query (without global var) */
            $query2 = new WP_Query( array('post_type' => 'rebeldes_curators') );

            // The 2nd Loop
            while ( $query2->have_posts() ) {
                $query2->the_post();

                get_template_part( 'template-parts/content', 'curator');
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>
        </section>

    </div>
</main><!-- #main -->

<?php get_template_part( 'template-parts/real', 'footer' ); ?>
