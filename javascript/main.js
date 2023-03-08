import { CountUp } from "./countUp.min.js";

window.onload = function () {
  var countUpYear = new CountUp("year", 1920, {
    enableScrollSpy: true,
    scrollSpyOnce: true,
    separator: "",
  });
  var countUpExperience = new CountUp("employees", 5000, {
    enableScrollSpy: true,
    scrollSpyOnce: true,
  });
  var countUpTrayectory = new CountUp("trayectory", 100, {
    enableScrollSpy: true,
    scrollSpyOnce: true,
  });
  var countUpCountries = new CountUp("countries", 80, {
    enableScrollSpy: true,
    scrollSpyOnce: true,
  });

  countUp.start();
};

// TYPEWRITER ENGLISH

var app = document.getElementById("typing-en");

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
});

typewriter
  .typeString("transform digitally")
  .pauseFor(3000)
  .deleteChars(19)
  .pauseFor(300)
  .typeString("better analyze data")
  .pauseFor(3000)
  .deleteChars(19)
  .pauseFor(300)
  .typeString("make better decisions")
  .pauseFor(3000)

  .start();

// TYPEWRITER SPANISH

var app = document.getElementById("typing-pt");

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
});

typewriter
  .typeString("transformarem-se digitalmente")
  .pauseFor(3000)
  .deleteChars(31)
  .pauseFor(300)
  .typeString("analisar melhor os dados")
  .pauseFor(3000)
  .deleteChars(24)
  .pauseFor(300)
  .typeString("tomar melhores decisões")
  .pauseFor(3000)

  .start();

// TYPEWRITER PORTUGUESE

var app = document.getElementById("typing-es");

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
});

typewriter
  .typeString("transformarse digitalmente")
  .pauseFor(3000)
  .deleteChars(26)
  .pauseFor(300)
  .typeString("analizar su información")
  .pauseFor(3000)
  .deleteChars(24)
  .pauseFor(300)
  .typeString("tomar mejores decisiones")
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
  loop: false,
  autoplay: {
    delay: 4000,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
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

// Cookies

$(document).ready(function () {
  $("#cookieReset").click(function () {
    cookieConsent.reset();
  });
});

$(document).ready(function () {
  $("#trackingLog").click(function () {
    console.log("trackingAllowed:", cookieConsent.trackingAllowed());
  });
});

const cookieConsent = new CookieConsent({
  contentUrl: "cookie-consent-content",
  privacyPolicyUrl: "privacy-policy.php",
  blockAccess: true,
});

var prev = 0;
var $window = $(window);
var nav = $(".header");
var menu = $(".navbar-toggler");
var navbar = $("#navbarNav");

$window.on("scroll", function () {
  var scrollTop = $window.scrollTop();
  nav.toggleClass("hidden", scrollTop > prev);
  menu
    .toggleClass("collapsed", scrollTop > prev)
    .attr("aria-expanded", "false", scrollTop > prev);
  navbar.removeClass("show", scrollTop > prev);
  prev = scrollTop;
});
