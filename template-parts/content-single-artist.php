<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="layout-inner">
        <header class="entry-header">
            <?php the_title( '<h1 class="h-3xl entry-title">', '</h1>' ); ?>

        </header><!-- .entry-header -->
        <div class="entry-image">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'artist-teaser'); ?>
            <figcaption><?php echo get_the_post_thumbnail_caption(get_the_ID()); ?></figcaption>
        </div>

        <div class="entry-content">
            <?php
            the_content();
            ?>
        </div><!-- .entry-content -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
