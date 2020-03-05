 <?php
 //This checks to se if the post require pasword befor veiw it
  if(post_password_required())
        //If the comment requires password then disable rest of the code
        
     return;
 ?>
 
 <!-- Comments
      ============================================= -->
<div id="comments" class="clearfix">


<?php 
//If have comments dsiplay the code below
if(have_comments()){

  ?>

<h3 id="comments-title"><span><?php comments_number(); ?></span> </h3>

<!-- Comments List
                ============================================= -->
<ol class="commentlist clearfix">

<?php 
  //Looping through the comments which are stored in the $comments variable whics is a array
  foreach( $comments as $comment){
    ?>

<li class="comment even thread-even depth-1" id="li-comment-1">

    <div id="comment-1" class="comment-wrap clearfix">

      <div class="comment-meta">

        <div class="comment-author vcard">

          <span class="comment-avatar clearfix">
          <?php echo get_avatar( $comment,  60, '','',['class' => 'avatar avatar-60 photo avatar-default']); ?>
           
          </span>

        </div>

      </div>

      <div class="comment-content clearfix">

        <div class="comment-author">
          J<?php comment_author(); ?>
          <span><?php comment_date(); ?></span>
        </div>

        <?php comment_text(); ?>

      </div>

      <div class="clear"></div>

    </div>

  </li>


    <?php
//End of foreach loop
  }
//Wp default function for wp pagination
  the_comments_pagination();
?>

  


</ol><!-- .commentlist end -->

  <?php
  //end if statemant
}

?>


<div class="clear"></div>

<!-- Comment Form
============================================= -->
<div id="respond" class="clearfix">

 <?php  
  //Wordpress defaulu function which generate the comment form
  //This function has two parametars and they are optional
  comment_form([
    //This is the input field for comment
    'comment_field'  => '<div class="clear"></div>

    <div class="col_full">
      <label>Comment</label>
      <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
    </div>',
    //This is array of all othe fields from coment form like email author etc
    'fields'   => [
        'author'  =>'<div class="col_one_third">
        <label>'. __('Name', 'foreach') .'</label>
        <input type="text" name="author" class="sm-form-control" />
      </div>',
        'email'   =>'<div class="col_one_third">
        <label>' . __('Email','foreach').'</label>
        <input type="text" name="email" class="sm-form-control" />
      </div>',
        'url'     =>' <div class="col_one_third col_last">
        <label>'. __('Website', 'foreach') . '</label>
        <input type="text" name="url" class="sm-form-control" />
      </div>',

    ],
    'class_submit'  => 'button button-3d nomargin',
    'label_submit'  => __('Submit Comment', 'foreach'),
    'title_reply'   => __('Leave a <span>Comment</span>','foreach')
  ]);
 ?>
 


</div><!-- #respond end -->

</div><!-- #comments end -->