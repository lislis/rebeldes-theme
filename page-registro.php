<?php
/**
 * Template Name: Registro
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
.site-page {
  .layout-inner {
    .entry-title {
      margin: 0;
    }

    article.page {
      padding-bottom: var(--s-115);

      .entry-title {
        margin: 0;
        background: var(--gradient4);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
      }
    }

    @media screen and (min-width: $bp-m) {
      article.page {
        display: grid;
        grid-template-rows: 150px 1fr;
        grid-template-columns: repeat(12, 8.35%);
        padding: 0 var(--s-10) var(--s-115);

        .entry-header {
          grid-row: 1;
          grid-column: 2 / span 12;
        }
        .entry-content {
          grid-row: 2;
          grid-column: 4 / span 7;
        }
      }

      article.page-intro-only {
        display: grid;
        //grid-template-rows: 1fr;
        grid-template-columns: repeat(12, 8.35%);
        padding: 0 var(--s-10) var(--s-115);
        .entry-content {
          grid-column: 4 / span 7;
        }
      }
    }
  }


  .wp-block-image,
  .wp-block-gallery {
    @media screen and (min-width: $bp-m) {
      &.pull-2 {
        transform: translateX(-16vw);
      }
      &.pull-1 {
        transform: translateX(-8vw);
      }
    }
    @media screen and (min-width: $bp-l) {
      &.pull-2 {
        transform: translateX(-244px);
      }
      &.pull-1 {
        transform: translateX(-128px);
      }
    }
  }
  .wp-block-image {
    margin: var(--s-60) 0 var(--s-90);

    @media screen and (min-width: $bp-m) {
      &.spalte-10 {
        max-width: 1258px;
      }
      &.spalte-8 {
        max-width: 1004px;
      }
      &.spalte-6 {
        max-width: 749px;
      }
      &.spalte-4 {
        max-width: 497px;
      }
      &.spalte-2 {
        max-width: 307px;
      }
    }
  }

  .wp-block-gallery {
    margin: var(--s-115) 0 var(--s-60);
    @media screen and (min-width: $bp-m) {
      &.spalte-10 {
        width: 84vw;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 40px 100px 1fr;

        &.pull-2 {
          transform: translateX(-16vw);
        }

        .wp-block-image {
          width: 100% !important;
        }

        .wp-block-image:nth-child(1) {
          grid-column: 1 / span 4;
          grid-row: 1 / span 3
        }
        .wp-block-image:nth-child(2) {
          grid-column: 4 / span 3;
          grid-row: 2;
        }
        .wp-block-image:nth-child(3) {
          grid-column: 7 / span 4;
          grid-row: 3;
        }
      }
      &.spalte-8 {
        width: 1004px;
      }
    }
    @media screen and (min-width: $bp-l) {
      &.spalte-10 {
        width: 1258px;
        &.pull-2 {
          transform: translateX(-244px);
        }
      }
    }
  }

}
.site-page {
  .layout-inner {
    .entry-title {
      margin: 0;
    }

    article.page {
      padding-bottom: var(--s-115);

      .entry-title {
        margin: 0;
        background: var(--gradient4);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
      }
    }

    @media screen and (min-width: $bp-m) {
      article.page {
        display: grid;
        grid-template-rows: 150px 1fr;
        grid-template-columns: repeat(12, 8.35%);
        padding: 0 var(--s-10) var(--s-115);

        .entry-header {
          grid-row: 1;
          grid-column: 2 / span 12;
        }
        .entry-content {
          grid-row: 2;
          grid-column: 4 / span 7;
        }
      }

      article.page-intro-only {
        display: grid;
        //grid-template-rows: 1fr;
        grid-template-columns: repeat(12, 8.35%);
        padding: 0 var(--s-10) var(--s-115);
        .entry-content {
          grid-column: 4 / span 7;
        }
      }
    }
  }


  .wp-block-image,
  .wp-block-gallery {
    @media screen and (min-width: $bp-m) {
      &.pull-2 {
        transform: translateX(-16vw);
      }
      &.pull-1 {
        transform: translateX(-8vw);
      }
    }
    @media screen and (min-width: $bp-l) {
      &.pull-2 {
        transform: translateX(-244px);
      }
      &.pull-1 {
        transform: translateX(-128px);
      }
    }
  }
  .wp-block-image {
    margin: var(--s-60) 0 var(--s-90);

    @media screen and (min-width: $bp-m) {
      &.spalte-10 {
        max-width: 1258px;
      }
      &.spalte-8 {
        max-width: 1004px;
      }
      &.spalte-6 {
        max-width: 749px;
      }
      &.spalte-4 {
        max-width: 497px;
      }
      &.spalte-2 {
        max-width: 307px;
      }
    }
  }

  .wp-block-gallery {
    margin: var(--s-115) 0 var(--s-60);
    @media screen and (min-width: $bp-m) {
      &.spalte-10 {
        width: 84vw;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 40px 100px 1fr;

        &.pull-2 {
          transform: translateX(-16vw);
        }

        .wp-block-image {
          width: 100% !important;
        }

        .wp-block-image:nth-child(1) {
          grid-column: 1 / span 4;
          grid-row: 1 / span 3
        }
        .wp-block-image:nth-child(2) {
          grid-column: 4 / span 3;
          grid-row: 2;
        }
        .wp-block-image:nth-child(3) {
          grid-column: 7 / span 4;
          grid-row: 3;
        }
      }
      &.spalte-8 {
        width: 1004px;
      }
    }
    @media screen and (min-width: $bp-l) {
      &.spalte-10 {
        width: 1258px;
        &.pull-2 {
          transform: translateX(-244px);
        }
          }
  }

}
 *
 * @package rebeldes
 */

get_header();
?>

<main id="primary" class="site-main site-registro">
    <div class="layout-inner">

        <?php
        while ( have_posts() ) :
        the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header a11y-hidden">
                    <?php the_title( '<h1 class="h-3xl entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php

    the_content();
                    ?>
                </div><!-- .entry-content -->

            </article><!-- #post-<?php the_ID(); ?> -->

        <?php
        endwhile; // End of the loop.
        ?>
    </div>
</main><!-- #main -->

<?php get_template_part( 'template-parts/real', 'footer' ); ?>
