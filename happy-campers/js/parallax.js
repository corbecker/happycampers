(function() {
    function castParallax() {
        var layers = document.getElementsByClassName("parallax");
        window.addEventListener("scroll", function(event) {
            var top = this.pageYOffset;
            var layer, speed, yPos;
            for (var i = 0; i < layers.length; i++) {
                layer = layers[i];
                speed = layer.getAttribute("data-speed");
                var yPos = -((top * speed) / 100);
                layer.setAttribute(
                    "style",
                    "transform: translate3d(0px, " + yPos + "px, 0px)"
                );
            }
        });
    }
    castParallax();
})();
