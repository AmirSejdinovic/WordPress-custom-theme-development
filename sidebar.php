  <!-- Sidebar
          ============================================= -->
          <div class="sidebar nobottommargin col_last">
            <div class="sidebar-widgets-wrap">
               <?php
               //Checking if the sidebar is active
                if(is_active_sidebar('ju_sidebar')){
                  //If its true display the sidebar from wp admin
                  //Only thing we have to pass in this function is an ID of registered sidebar
                  dynamic_sidebar('ju_sidebar');

                }
               ?>
            </div>

          </div><!-- .sidebar end -->