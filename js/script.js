var glance = 1;
var branch = 1;
var customer = 1;
$(document).ready(function(){
  new WOW().init();
  fixedNavbarHandle();
  // portfolioSvg();
  $('.parsonCarosal_slider').flipster({
    style: 'carousel', 
    start: 0,
    prevText: "<img src='images/prev-arrow.png'>",
    nextText: "<img src='images/next-arrow.png'>",
    enableNavButtons:true,
    autoplay:true,
    scrollwheel: false,
    onItemSwitch:callslide,
    // loop:true,
    // // style: 'carousel',
    // scrollwheel: false,
  });
  $('.cultureSlider').owlCarousel({
    loop:true,
    nav:false,
    dots:false,
    items:1
  });
  $('.lender_slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    autoplay:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
$('.partner_sliderSlideBox').owlCarousel({
  loop:true,
  margin:0,
  nav:true,
  autoplay:true,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
  }
});
$('.sector_sliderSlideBox').owlCarousel({
  loop:true,
  margin:0,
  nav:false,
  autoplay:true,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
  }
});
$('.employee_slider').owlCarousel({
  loop:true,
  margin:30,
  nav:false,
  autoplay:true,
  dots:true,
  responsive:{
      0:{
          items:2
      },
      600:{
          items:3
      },
      1000:{
          items:3
      }
  }
});
  $('.overviewHero_slider').owlCarousel({
    loop:false,
    nav:false,
    dots:false,
    items:1
  });
//   $('.img-animate').addClass("unvisible").viewportChecker({
//     classToAdd: 'visible animated slideInRight', // Class to add to the elements when they are visible
//     offset: 100,
//     repeat:true  
// });
});

$(document).scroll(function () {
  fixedNavbarHandle();
  checkViewport();
});
let slideText = 1;
function callslide(){
  console.log('hi');
  
}

function checkViewport(){
  if ($('.circleBox1').visible(true)) {
      $('.circleBox1').addClass('circle_animation_start');
        if(glance == 1){
          
          $('#counter1').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
            glance++
          });
        }
    }
    if ($('.circleBox2').visible(true)) {
      $('.circleBox2').addClass('circle_animation_start');
        if(branch == 1){
          $('#counter2').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
            branch++
          });
        }
    }
    if ($('.circleBox3').visible(true)) {
      $('.circleBox3').addClass('circle_animation_start');
        if(customer == 1){
          $('#counter3').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
            customer++
          });
        }
    }
}

function fixedNavbarHandle() {
  var $nav = $(".header_menuOuter");
  // $nav.toggleClass('header_fixed', $(this).scrollTop() > $nav.height());
  $nav.toggleClass('header_fixed', $(this).scrollTop() > 200);
}