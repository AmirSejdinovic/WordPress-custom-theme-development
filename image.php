<?php 
    //Wordpress custom function for include header.php
     
    get_header();


    ?>
    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">

       

        <div class="container clearfix">

          <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">

         <?php
           if( have_posts() ){
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

            

              
              <!-- Entry Content
                              ============================================= -->
              <div class="entry-content notopmargin">
                <a href="<?php echo $post->guid; ?>">Direct Download</a>

                <img src="<?php echo $post->guid; ?>" class="img-responsive">
                
                <?php 
                
                
                the_content(); 

                
                ?>

                <!-- Post Single - Content End -->

                <!-- Tag Cloud
                                  ============================================= -->
                <div class="tagcloud clearfix bottommargin">
                  <?php the_tags('', ' '); ?>
                </div><!-- .tagcloud end -->

                <div class="clear"></div>

              </div>
            </div><!-- .entry end -->

            <!-- Post Navigation
                          ============================================= -->
            <div class="post-navigation clearfix">

              <div class="col_half nobottommargin">
                <?php previous_post_link(); ?>
              </div>

              <div class="col_half col_last tright nobottommargin">
                <?php next_post_link(); ?>
              </div>

            </div><!-- .post-navigation end -->

            <div class="line"></div>

            <!-- Post Author Info
                          ============================================= -->
            <div class="card">
              <div class="card-header">
                <strong>
                  Posted by
                  <a href="<?php echo $author_URL; ?>"><?php the_author(); ?></a>
                </strong>
              </div>
              <div class="card-body">
                <div class="author-image">
                  <?php echo get_avatar($author_URL, 90, '',false,['class' => 'img-circle']); ?>
                </div>
                <?php 
                 
                echo nl2br(get_the_author_meta('description') ); ?>
              </div>
            </div><!-- Post Single - Author End -->

            <div class="line"></div>

            <h4>Related Posts:</h4>

            <div class="related-posts clearfix">

            <?php
            //Creating the varaible which helds categori of the current post. I do this via wp function get_the_category()
            $categories = get_the_category();
           
               //Creating the variable and as return value calling new instance of WP_Query() class
               $rp_query = new WP_Query([
                 //This controls how many post will the wp query return
                 'posts_per_page' => 2,
                 //This key is to not display the post in the loop
                 //$post is WP global vriable which helds the data about curent post in the loop. With this global WP varialbe we can extract the current post ID and asigned it to this key so this current post is not in the loop. This $post varable is always avaiable in the loop
                 'post__not_in' => [ $post->ID ],
                 'cat'          =>  !empty($categories) ? $categories[0]->term_id : null,
               ]);

               if($rp_query->have_posts()){
                  while($rp_query->have_posts()){
                    $rp_query->the_post(); ?>

<div class="mpost clearfix">
<?php
  if(has_post_thumbnail()){

    ?>

<div class="entry-image">
      <a href="<?php the_permalink(); ?>">
                  
  <?php the_post_thumbnail('thumbnail') ?>
                  </a>
      </div>
    <?php

  }
?>
                
                <div class="entry-c">
                  <div class="entry-title">
                    <h4>
                      <a href="<?php the_permalink(); ?>">
                       <?php the_title(); ?>
                      </a>
                    </h4>
                  </div>
                  <ul class="entry-meta clearfix">
                    <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
                    <li><i class="icon-comments"></i> <?php comments_number('0'); ?></li>
                  </ul>
                  <div class="entry-content">
                    <?php the_excerpt(); ?>
                  </div>
                </div>
              </div>

              <?php
                  }
                  //Reset post data
                  wp_reset_postdata();
               }
            ?>

             
            

            </div>

            <?php 
             //Cheking if the comments are open or there are comments
            if(comments_open() || get_comments_number()){
            //This function will look for comments.php and when it finds it will load that file
            comments_template(); 
            }
            
            ?>

           

            </div>


            </div><!-- .postcontent end -->


               <?php
              }
           }
         ?>

  

         <?php get_sidebar(); ?>

        </div>

      </div>

    </section><!-- #content end -->

   <?php
   //WordPress custom function for include footer.php
   get_footer();
   ?>