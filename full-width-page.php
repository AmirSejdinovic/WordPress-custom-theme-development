<?php 
    /*
     *Template Name: Full Width Page


    */
    
    
    
    //Wordpress custom function for include header.php
     
    get_header();

   ?>

  <!-- Page Title
        ============================================= -->
        <section id="page-title">
      <div class="container clearfix">
        <h1><?php single_post_title(); ?></h1>
        <span><?php 

        //Whith this check with the function_exists we prevent to wp throw the errro when the plugin is deactivated
        
        if(function_exists('the_subtitle')){
          the_subtitle(); 
        }
       
        
        
        ?></span>
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
        
              while(have_posts()){
                 the_post();
                 //This is default wp varaiable which contains the info about the post
                 global $post;
                 //Grabing the author id
                 $author_ID  = $post->post_author;
                 //Grabing the author post via funciton and varaibale above
                 $author_URL = get_author_posts_url($author_ID);
               ?>

            <div class="single-post nobottommargin">

            <!-- Single Post
                          ============================================= -->
            <div class="entry clearfix">

             
 <!-- Entry Title
                              ============================================= -->
                              <div class="entry-title">
                <h2><?php the_title(); ?></h2>
              </div><!-- .entry-title end -->
             

              <!-- Entry Image
                              ============================================= -->
              <div class="entry-image">
                          <?php
                  if(has_post_thumbnail()){ 

                    ?>
                    <div class="entry-image">
                                  <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('full'); ?>
                                  </a>
                                </div>

                    <?php

                          }
                          ?>
              </div><!-- .entry-image end -->

              <!-- Entry Content
                              ============================================= -->
              <div class="entry-content notopmargin">

                <?php the_content(); 

                $defaults = array(
                   'before'  => '<p class="text-center">' . __('Pages', 'foreach'),
                   'after'   => '</p>'
                );
                
                wp_link_pages( $defaults);
                ?>

                <!-- Post Single - Content End -->

               

                <div class="clear"></div>

              </div>
            </div><!-- .entry end -->

           

            <div class="line"></div>

         

            <div class="line"></div>

            

            <?php 
             //Cheking if the comments are open or there are comments
            if(comments_open() || get_comments_number()){
            //This function will look for comments.php and when it finds it will load that file
            comments_template(); 
            }
            
            ?>

           

            </div>


            


               <?php
             
           }
         ?>

  

        

        </div>

      </div>

    </section><!-- #content end -->

   <?php
   //WordPress custom function for include footer.php
   get_footer();
   ?>