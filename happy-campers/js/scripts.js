(function() {
  function classToggle() {
    if (document.getElementById("services-menu")) {
      var nav = document.getElementById("services-menu");
    } else {
      var nav = document.getElementById("about-menu");
    }

    nav.classList.toggle("show");
  }
  if (document.querySelector(".toggle")) {
    document.querySelector(".toggle").addEventListener("click", classToggle);
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
  console.log(currentDay);

  document.getElementById(currentDay).classList.toggle("today");
})();
