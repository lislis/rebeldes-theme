<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rebeldes
 */

?>

    </div><!-- #page -->
    <?php wp_footer(); ?>
</body>
<script>
 document.querySelector('#menu-toggle')
         .addEventListener('click', (evt) => {
             document.querySelector('.site-header-mobile').classList.toggle('is-open');
             document.querySelector('.menu-toggle--open').classList.toggle('is-hidden');
             document.querySelector('.menu-toggle--close').classList.toggle('is-hidden');
             document.querySelector('#menu-toggle').toggleAttribute('aria-expanded');
         });
</script>
</html>
