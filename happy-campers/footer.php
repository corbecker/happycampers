<footer>
    <div class="flex-grid container">
        <div id="footer-sidebar1" class="footer-widget">
          <?php
            if(is_active_sidebar('footer-sidebar-1')){
              dynamic_sidebar('footer-sidebar-1');
            }
          ?>
          <h3>Hours</h3>
          <div class="col hours">
            <table>
              <colgroup>
              <col id="mon">
              <col id="tue">
              <col id="wed">
              <col id="thu">
              <col id="fri">
              <col id="sat">
              <col id="sun">
              </colgroup>
              <tr>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>
              </tr>
              <tr class="opening">
                <td>8-6</td>
                <td>8-6</td>
                <td>8-6</td>
                <td>8-6</td>
                <td>8-6</td>
                <td>9-6</td>
                <td>4-5</td>
              </tr>
            </table>
          </div>
        </div>
        <div id="footer-sidebar2" class="footer-widget">
          <?php
            if(is_active_sidebar('footer-sidebar-2')){
              dynamic_sidebar('footer-sidebar-2');
            }
          ?>
        </div>
        <div id="footer-sidebar3" class="footer-widget center-text">
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
