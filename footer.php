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
         evt.target.nextElementSibling.classList.toggle('is-closed');

     });
 });

 document.querySelector('.totop').addEventListener('click', evt => {
     evt.preventDefault();
     window.scroll({top: 0, left: 0, behavior: 'smooth'});
 });

 // front page
 const logo = document.querySelector('.hero-logo');
 function checkLogoScale(logo) {
     let cbr = logo.getBoundingClientRect();
     let header = document.querySelector('.hero-cover');
     let h_cbr = header.getBoundingClientRect();
     if ((cbr.height * 0.75) + cbr.top > h_cbr.height + h_cbr.top) {
         logo.classList.add('is-smaller');
     } else {
         logo.classList.remove('is-smaller');
     }
 }

 if (logo) {
     checkLogoScale(logo);
     document.addEventListener('scroll', evt => {
         checkLogoScale(logo);
     });
 }

 // calendar
 const ew = document.querySelectorAll('.js-event-content-wrapper');
 if (ew && ew.length) {
     var COMMENT_PSEUDO_COMMENT_OR_LT_BANG = new RegExp(
         '<!--[\\s\\S]*?(?:-->)?'
         + '<!---+>?'  // A comment with no body
         + '|<!(?![dD][oO][cC][tT][yY][pP][eE]|\\[CDATA\\[)[^>]*>?'
         + '|<[?][^>]*>?',  // A pseudo-comment
         'g');

     const ec = document.querySelectorAll('.js-event-content');
     ec.forEach((e, i) => {
         let new_inner = e.innerHTML.replaceAll(COMMENT_PSEUDO_COMMENT_OR_LT_BANG, '').replaceAll('\n', '');
         if (new_inner !== '') {
             e.parentElement.parentElement.classList.remove('is-hidden');
         }
     })
 }


</script>
</html>
