<?php
/* Template Name: General Template with sub-heading*/
get_header();
get_header('services');
?>
<div class="main">
<div class="main-sidebar container">
    <div class="content">
      Content here...
    </div>
    <div class="sidebar">
        <div id="general-sidebar1" class="sidebar-widget">
            <?php
            if (is_active_sidebar('general-sidebar-1')) {
                dynamic_sidebar('general-sidebar-1');
            }
            ?>
        </div>
    </div>
</div>
  
</div>
<?php
get_footer();
