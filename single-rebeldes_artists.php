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

<aside class="artists-overview">
    <div class="layout-inner">
    <?php
    $posts = get_posts(array('post_type' => 'rebeldes_artists')); ?>

    <ul>
    <?php
    foreach ($posts as $post): ?>
        <li><a href="<?php the_permalink() ?>"><?php the_title($post->post_ID) ?></a><span class="artists-overview-sep">*</span></li>
    <?php
        endforeach;
    ?>
    </ul>
    </div>
</aside>

<footer class="site-footer">
    <div class="layout-inner">
        <div class="site-totop">
            <a href="#primary" title="Jump to top">
                <svg width="45" height="66" viewBox="0 0 45 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.79564 24.9291C3.07939 26.2128 5.15314 26.2128 6.43689 24.9291L19.2086 12.1903V62.1249C19.2086 63.9353 20.6898 65.4166 22.5002 65.4166C24.3106 65.4166 25.7919 63.9353 25.7919 62.1249V12.1903L38.5635 24.962C38.8683 25.2668 39.2301 25.5085 39.6283 25.6734C40.0264 25.8384 40.4532 25.9233 40.8842 25.9233C41.3152 25.9233 41.7419 25.8384 42.1401 25.6734C42.5383 25.5085 42.9001 25.2668 43.2048 24.962C43.5095 24.6573 43.7513 24.2955 43.9162 23.8973C44.0811 23.4991 44.166 23.0724 44.166 22.6414C44.166 22.2104 44.0811 21.7837 43.9162 21.3855C43.7513 20.9873 43.5095 20.6255 43.2048 20.3208L24.8044 1.88743C24.4999 1.58228 24.1381 1.34019 23.7399 1.17501C23.3417 1.00983 22.9149 0.924805 22.4838 0.924805C22.0527 0.924805 21.6258 1.00983 21.2276 1.17501C20.8294 1.34019 20.4677 1.58228 20.1631 1.88743L1.79564 20.2878C1.49049 20.5924 1.24839 20.9541 1.08321 21.3523C0.918032 21.7505 0.833008 22.1774 0.833008 22.6085C0.833008 23.0396 0.918032 23.4664 1.08321 23.8647C1.24839 24.2629 1.49049 24.6246 1.79564 24.9291Z" fill="white"/>
                </svg>
            </a>
        </div>
        <?php
        get_sidebar();
        get_footer(); ?>
    </div>
</footer>
