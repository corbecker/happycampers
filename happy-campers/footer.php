<footer>
    <div class="footer-container container">
        <div id="footer-sidebar1" class="footer-widget">
          <?php
            if(is_active_sidebar('footer-sidebar-1')){
              dynamic_sidebar('footer-sidebar-1');
            }
          ?>
        </div>
        <div id="footer-sidebar2" class="footer-widget">
          <?php
            if(is_active_sidebar('footer-sidebar-2')){
              dynamic_sidebar('footer-sidebar-2');
            }
          ?>
        </div>
        <div id="footer-sidebar3" class="footer-widget">
          <?php
            if(is_active_sidebar('footer-sidebar-3')){
              dynamic_sidebar('footer-sidebar-3');
            }
          ?>
        </div>
    </div>
    <div class="copyright container">&copy; <?php echo date("Y"); ?> Happy Campers Ireland</div>
</footer>
<?php wp_footer() ?>
</body>
</html>
