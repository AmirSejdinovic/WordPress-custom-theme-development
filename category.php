<?php 
    //Wordpress custom function for include header.php
     
    get_header();


    ?>

    <!-- Page Title
        ============================================= -->
        <section id="page-title">

<div class="container clearfix">
  <h1><?php the_archive_title(); ?></h1>
  <span><?php the_archive_description(); ?></span>
</div>

</section><!-- #page-title end -->
    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">

        

        <div class="container clearfix">

          <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts">
              <?php
              //Check if for posts if it has posts than do the code
              if(have_posts() ){
                 //Creating the while loop and provideing as argument the have_posts() function  
                while(have_posts() ){
                  //Caling the post function
                   the_post();
                   //Including the tempalte part
                   get_template_part('partials/post/content-excerpt');
                   

              } }
              ?>
              

      

            </div><!-- #posts end -->

            <!-- Pagination
            ============================================= -->
            <div class="row mb-3">
              <div class="col-12">
              <?php
               Next_post_link('&larr; Older');

               previous_posts_link('Newer &rarr;');
              ?>
                <!--<a href="#" class="btn btn-outline-secondary float-left">-->
                  
                <!--</a>
                <a href="#" class="btn btn-outline-dark float-right">-->
                  
                </a>
              </div>
            </div>
            <!-- .pager end -->

          </div><!-- .postcontent end -->

         <?php get_sidebar(); ?>

        </div>

      </div>

    </section><!-- #content end -->

   <?php
   //WordPress custom function for include footer.php
   get_footer();
   ?>