<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rebeldes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
	<?php the_title( '<h1 class="h-3xl entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-image">
        <?php echo get_the_post_thumbnail(get_the_ID(), 'spalten-4'); ?>
    </div>

    <div class="entry-content">
        <p class="h-xl m-0 lh-1"><?php echo get_post_meta(get_the_ID(), 'title', true); ?></p>
        <p class="h-b-caps m-0"><?php echo get_post_meta(get_the_ID(), 'living', true); ?></p>


	<?php
	the_content();
	?>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->