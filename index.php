    <?php 
    //Wordpress custom function for include header.php
     
    get_header();


    ?>
    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">

        <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
          <div>
            <div class="container clearfix">
              <span class="badge badge-danger bnews-title">Breaking News:</span>

              <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false"
                data-pagi="false">
                <div class="flexslider">
                  <div class="slider-wrap">
                    <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </strong></a></div>
                    <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </strong></a></div>
                    <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </strong></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

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
              

             

              

              <div class="entry clearfix">
                <div class="entry-image clearfix">
                  <iframe width="100%" scrolling="no" frameborder="no"
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115823769&amp;auto_play=false&amp;hide_related=true&amp;visual=true"></iframe>
                </div>
                <div class="entry-title">
                  <h2><a href="single.html">This is an Embedded Audio Post</a></h2>
                </div>
                <ul class="entry-meta clearfix">
                  <li><i class="icon-calendar3"></i> 28th April 2014</li>
                  <li><a href="#"><i class="icon-user"></i> admin</a></li>
                  <li><i class="icon-folder-open"></i> <a href="#">Audio</a>, <a href="#">General</a></li>
                  <li><a href="single.html#comments"><i class="icon-comments"></i> 16 Comments</a></li>
                </ul>
                <div class="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi
                    autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus
                    exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio
                    sequi adipisci. Nulla, fuga perferendis voluptatum beatae voluptate architecto laboriosam provident
                    deserunt. Saepe!</p>
                  <a href="single.html" class="more-link">Read More</a>
                </div>
              </div>

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