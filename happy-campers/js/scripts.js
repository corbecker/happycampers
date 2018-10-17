(function() {
    function classToggle() {
        const nav = document.getElementById("services-menu");

        nav.classList.toggle("show");

        console.log(nav);
    }
    document.querySelector(".toggle").addEventListener("click", classToggle);
})();
