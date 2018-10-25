<?php
/* Template Name: Gallery Page*/
get_header();
get_header('about');
add_filter('use_default_gallery_style', '__return_false');
?>
<div class="main">
    <div class="container card">
          <h2><?php single_post_title() ?></h2>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) :
                    the_post(); ?>
                    <?php remove_filter('the_content', 'wpautop'); ?>
                    <?php the_content(); ?>
                    
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            <?php endif; ?>
    </div>
</div>
<div class="lightbox-container">
    <div class="lightbox-controls">
        <div class="close-button"></div>
        <button type="button" class="next right"></button>
        <button type="button" class="next left"></button>
    </div>
    <div class="lightbox">
        
    </div>
</div>

<script type="text/javascript">
    //get images in gallery into an array (wordpress function)
    var images = <?php echo json_encode(get_post_gallery_images($post)) ?> 
    var lb = document.querySelector(".lightbox");
    var lbc = document.querySelector(".lightbox-container");

    //loop over this array and create an image element for each src
    for(var i = 0; i < images.length; i++){
        var imgContainer = document.createElement('div');
        imgContainer.classList.add("image");
        var img = document.createElement('img');
        img.src = images[i];
        img.alt = `Dog Daycare Dog Boarding Ireland ${i}`;
        lb.appendChild(img);
    }
    var imageElements = document.querySelectorAll(".gallery-icon");
    for (let [index, val] of imageElements.entries()) {
        // your code goes here    
        imageElements[index].addEventListener("click", function(){
            lbc.classList.add("active");
            lb.childNodes[index+1].classList.add("active");
        });
    };

    var elems = document.querySelectorAll(".lightbox img");
    [].forEach.call(elems, function(el) {
        el.addEventListener("click", function(){
            console.log("runit");
            nextImage();
        })
    });

    //hook up controls
    document.querySelector(".lightbox-container").addEventListener("click", function(){
        closeSlideShow();
    })

    function closeSlideShow() {
        lbc.classList.remove("active");
        var elems = document.querySelectorAll(".lightbox img");
        [].forEach.call(elems, function(el) {
            el.classList.remove("active");
        });
    }
    //arrow logic
    const firstImg = document.querySelector(".lightbox img:first-child");
    const lastImg = document.querySelector(".lightbox img:last-child");

    function nextImage() {
        event.stopPropagation();
        var current = document.querySelector(".lightbox img.active");
        if (current == lastImg)
        {
            current.classList.remove("active");
            firstImg.classList.add("active");
        }
        else 
        {
            current.classList.remove("active");
            current.nextSibling.classList.add("active");
        }
    }

    function prevImage() {
        event.stopPropagation();
        var current = document.querySelector(".lightbox img.active");
        if (current == firstImg)
        {
            current.classList.remove("active");
            lastImg.classList.add("active");
        }
        else 
        {
            current.classList.remove("active");
            current.previousSibling.classList.add("active");
        }
    }
    document.querySelector(".right").addEventListener("click", function(){
        nextImage();
    });

    document.querySelector(".left").addEventListener("click", function(){
        prevImage();
    });


</script>
<?php
get_footer();
