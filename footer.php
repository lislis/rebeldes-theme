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
             document.querySelector('.site-branding .site-title').classList.toggle('is-fadeout');
         });

 document.querySelectorAll('.js-event-accordion').forEach((el, i) => {
     el.addEventListener('click', (evt) => {
         evt.target.classList.toggle('is-open');
         evt.target.nextElementSibling.classList.toggle('is-hidden');

     });
 });

</script>
</html>
