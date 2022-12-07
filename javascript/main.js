import { CountUp } from './countUp.min.js';


window.onload = function() {
    var countUpYear = new CountUp('year', 1920, { enableScrollSpy: true });
    var countUpExperience = new CountUp('employees', 6000, { enableScrollSpy: true });
    var countUpTrayectory = new CountUp('trayectory', 100, { enableScrollSpy: true });
    var countUpCountries = new CountUp('countries', 80, { enableScrollSpy: true })

    countUp.start();
  }