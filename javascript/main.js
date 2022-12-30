import { CountUp } from './countUp.min.js';



window.onload = function() {
    var countUpYear = new CountUp('year', 1920, { enableScrollSpy: true });
    var countUpExperience = new CountUp('employees', 6000, { enableScrollSpy: true });
    var countUpTrayectory = new CountUp('trayectory', 100, { enableScrollSpy: true });
    var countUpCountries = new CountUp('countries', 80, { enableScrollSpy: true })

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


    var swiper = new Swiper(".mySwiper", {
      
      spaceBetween: 24,
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
    });

    
    var swiper = new Swiper(".mySwiperCases", {
      
      slidesPerView: 3,
      spaceBetween: 24,
      slidesPerGroup: 3,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,

      },
      mousewheel: true,
      keyboard: true,
    });
    
