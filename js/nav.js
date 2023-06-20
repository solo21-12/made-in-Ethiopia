var nav = document.querySelector('.header-wrapper');
var screenHeight = window.innerHeight * 0.3;

window.addEventListener('scroll', function() {
  if (window.pageYOffset > screenHeight) {
    nav.classList.add('fixed-nav');
  } else {
    nav.classList.remove('fixed-nav');
  }
});