<?php 
    /*
     *Template Name: Experimental


    */
    
    
    
    //Wordpress custom function for include header.php
     
    get_header();

   ?>

  <!-- Page Title
        ============================================= -->
        <section id="page-title">
      <div class="container clearfix">
        <h1>Experimental code</h1>
        
      </div>
    </section><!-- #page-title end -->



    
    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">

       

        <div class="container clearfix">

          <!-- Post Content
          ============================================= -->
          

         <?php
        

              //wp_loginout();

              single_post_title();
              
        ?>

          
        

        </div>

      </div>

    </section><!-- #content end -->

   <?php
   //WordPress custom function for include footer.php
   get_footer();
   ?>
