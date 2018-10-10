(function() {
    function castParallax() {
        var opThresh = 350;
        var opFactor = 750;

        window.addEventListener("scroll", function(event) {
            var top = this.pageYOffset;

            var layers = document.getElementsByClassName("parallax");
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

    function dispelParallax() {
        $("#nonparallax").css("display", "block");
        $("#parallax").css("display", "none");
        console.log("jcsnkjfnc");
    }

    function startSite() {
        console.log("yippee");
        var platform = navigator.platform.toLowerCase();
        var userAgent = navigator.userAgent.toLowerCase();

        if (
            platform.indexOf("ipad") != -1 ||
            platform.indexOf("iphone") != -1
        ) {
            dispelParallax();
        } else {
            castParallax();
        }
    }
    startSite();
})();
