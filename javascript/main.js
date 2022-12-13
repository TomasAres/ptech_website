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
  