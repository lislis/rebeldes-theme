let wpImages;

if (document.querySelector('main.site-single-artist')) {
  wpImages = document.querySelectorAll('.entry-image img');
} else {
  wpImages = document.querySelectorAll('main img');
}

new simpleParallax(wpImages, {
  scale: 1.25,
  delay: 0.1,
  transition: 'cubic-bezier(0,0,0,1)'
});
