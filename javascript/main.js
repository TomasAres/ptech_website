import { CountUp } from './countUp.min.js';



window.onload = function() {
    var countUpYear = new CountUp('year', 1920, { enableScrollSpy: true, scrollSpyOnce: true });
    var countUpExperience = new CountUp('employees', 6000, { enableScrollSpy: true, scrollSpyOnce: true });
    var countUpTrayectory = new CountUp('trayectory', 100, { enableScrollSpy: true, scrollSpyOnce: true });
    var countUpCountries = new CountUp('countries', 80, { enableScrollSpy: true, scrollSpyOnce: true })

    countUp.start();
  }

  var app = document.getElementById('typing');

  var typewriter = new Typewriter(app, {
    loop: true,
    delay: 75,
  });
  
  typewriter
    .typeString('transform digitally')
    .pauseFor(3000)
    .deleteChars(19)
    .pauseFor(300)
    .typeString('better analyze data')
    .pauseFor(3000)
    .deleteChars(19)
    .pauseFor(300)
    .typeString('make better decisions')
    .pauseFor(3000)

   
    .start();
  

    gsap.to(".bg-services", {
      scrollTrigger: {
        trigger: ".column-services",
        start: "top 15%",
        end: "bottom 30%",
        toggleActions: "restart reverse none none",
        markers: false,
        scrub: "1",
      
      }, 
      scale: 1, 
      opacity: 0,
    }); 


    var swiper = new Swiper(".mySwiperServices", {
      
      spaceBetween: 24,
      pagination: {
        el: ".swiper-services-pagination",
        clickable: true,
      },
    });

    var swiper = new Swiper(".mySwiperClients", {
      
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });


    
    var swiper = new Swiper(".mySwiperCases", {
      
        loop: true,
        autoplay: {
          delay: 4000,
        },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      keyboard: true,
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 24,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 24,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 24,
        },
      },
      
    });


    $(".case-study-page #our-work h3").html("More case studies");


// Cookies


$(document).ready(function(){
  $('#cookieReset').click(function(){
    cookieConsent.reset();
  });
});

$(document).ready(function(){
  $('#trackingLog').click(function(){
    console.log('trackingAllowed:', cookieConsent.trackingAllowed());
  });
});

const cookieConsent = new CookieConsent({
  contentUrl: "cookie-consent-content",
  privacyPolicyUrl: "privacy-policy.php",
  blockAccess: true, 

})

var prev = 0;
var $window = $(window);
var nav = $('.header');

$window.on('scroll', function(){
  var scrollTop = $window.scrollTop();
  nav.toggleClass('hidden', scrollTop > prev);
  prev = scrollTop;
});
