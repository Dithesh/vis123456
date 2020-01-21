
$(document).ready(function(){
  new WOW().init();
  fixedNavbarHandle();
  portfolioSvg();

  $('.owl-carousel').owlCarousel({
    loop:true,
    nav:false,
    dots:true,
    items:1
  })
});
$(document).scroll(function () {
  fixedNavbarHandle();
});

function fixedNavbarHandle() {
  var $nav = $(".header_menuOuter");
  // $nav.toggleClass('header_fixed', $(this).scrollTop() > $nav.height());
  $nav.toggleClass('header_fixed', $(this).scrollTop() > 200);
}

function portfolioSvg() {
  var myTimer = document.getElementById('number1');
  var interval = 1;
  var angle = 0;
  var angle_increment = 6;

  window.timer = window.setInterval(function () {
      myTimer.innerHTML = angle;

      if (angle >= 1716) {
          window.clearInterval(window.timer);
      }
      angle += angle_increment;
  }.bind(this), interval);
}