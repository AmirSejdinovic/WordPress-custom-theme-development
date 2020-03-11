    <?php 
    //Wordpress custom function for include header.php
     
    get_header();


    ?>
    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">
         <?php
           if(!is_single() && is_home() && function_exists('wpp_get_mostpopular')&& get_theme_mod('ju_show_header_popular_posts')){
             //Caling the custom fuction from plugin WordPress Popular Posts
             wpp_get_mostpopular([
               'wpp_start' => ' <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
               <div>
                 <div class="container clearfix">
                   <span class="badge badge-danger bnews-title">' . get_theme_mod('ju_popular_posts_widget_title') . '</span>
     
                   <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false"
                     data-pagi="false">
                     <div class="flexslider">
                     <div class="slider-wrap">',
                'wpp_end'   => '   </div>
                </div>
              </div>
            </div>
          </div>
        </div>',
        'post_html'  => '<div class="slide"><a href="{url}"><strong>{text_title}
        </strong></a></div>'

             ]);
             ?>
  
               

        <?php
           }
         ?>
       

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