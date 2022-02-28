<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rebeldes
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <div class="entry-header">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
    </div><!-- .entry-header -->

    <div class="entry-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'artist-teaser'); ?>">
    <?php //echo get_the_post_thumbnail(get_the_ID(), 'artist-teaser'); ?>
    </div>
    </a>
</div>
