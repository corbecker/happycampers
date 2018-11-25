(function() {
  function classToggle() {
    if (document.getElementById("services-menu")) {
      var nav = document.getElementById("services-menu");
    } else if (document.getElementById("about-menu")) {
      var nav = document.getElementById("about-menu");
    } else if (document.getElementById("global-menu")) {
      var nav = document.querySelector("mob-nav");
    }

    nav.classList.toggle("show");
  }
  if (document.querySelector(".toggle")) {
    document.querySelector(".toggle").addEventListener("click", classToggle);
  }
  if (document.querySelector(".toggle-nav")) {
    document.querySelector(".toggle-nav").addEventListener("click", function() {
      document.querySelector(".mob-nav").classList.toggle("show");
    });
  }

  if (document.querySelector(".close-btn")) {
    document.querySelector(".close-btn").addEventListener("click", function() {
      document.querySelector(".mob-nav").classList.toggle("show");
    });
  }

  var todaysDate = new Date();
  var day = [];
  day[0] = "sun";
  day[1] = "mon";
  day[2] = "tue";
  day[3] = "wed";
  day[4] = "thu";
  day[5] = "fri";
  day[6] = "sat";

  var currentDay = day[todaysDate.getDay()];

  document.getElementById(currentDay).classList.toggle("today");
})();
