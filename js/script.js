
$(document).ready(function(){
  new WOW().init();
  fixedNavbarHandle();
  // portfolioSvg();

  $('.productSlider').owlCarousel({
    loop:true,
    nav:false,
    dots:false,
    items:1
  });
  var carousel = $(".parsonCarosal").featureCarousel({
    
  });
});
$(document).scroll(function () {
  fixedNavbarHandle();
});

function fixedNavbarHandle() {
  var $nav = $(".header_menuOuter");
  // $nav.toggleClass('header_fixed', $(this).scrollTop() > $nav.height());
  $nav.toggleClass('header_fixed', $(this).scrollTop() > 200);
}