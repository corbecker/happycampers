(function() {
  function classToggle() {
    if (document.getElementById("services-menu")) {
      var nav = document.getElementById("services-menu");
    } else {
      var nav = document.getElementById("about-menu");
    }

    nav.classList.toggle("show");
  }
  document.querySelector(".toggle").addEventListener("click", classToggle);
})();
