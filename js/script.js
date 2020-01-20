
$(document).ready(function(){
  new WOW().init();
  fixedNavbarHandle();

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