<?php
//This function will be included into function php and it will be responsible for registering menu
function ju_setup_theme(){
  //Enable the feature image on post and pages
  add_theme_support( 'post-thumbnails' );
  //Caling the wp function for registering menu. In this funciton we must provide a location and description as parametars
  //__() this function inside this is special function for wordpress which alow us to transalte wp. This funciton has two parametars first is the text which we'll transalta and second is the  textdomanin of theme
  //Custom wp function for head title. This function will generate tite tag 
  add_theme_support('title-tag');
  //Custom wp fuction for log. This function will enable users to upload their own logos
  add_theme_support('custom-logo');
  //Adding the html5 support for theme
  add_theme_support('html5', array('comment-list', 'search-form', 'gallery', 'caption'));
  add_theme_support('starter-content', [
      'widgets'   => [
        'ju_sidebar'  => [
          'text_bussiness_info', 'search', 'text_about',
        ]

      ],
      'attachments'  => [
        'image-about'  =>[
          'post_title'  => __('About', 'foreach'),
          'file'  => 'assets/images/about/1.jpg',
        ]

      ],
      'posts'    => [
        'home'  => [
          'thumbnail' => '{{image-about}}'
        ]
      ],
      'options'  =>[
        'show_on_front'  => 'page',
        'page_on_front'  => '{{home}}',
        'page_for_posts' =>'{{blog}}',

      ],
      'theme_mods'  =>[

      ],
      'nav_menus'  =>[

      ],
  ]);
  //Theme support for automatic rss feeds
  add_theme_support('automatic-feed-links');
  register_nav_menu('primary', __('Primary Menu','foreach'));
  //Registering the top menu
  register_nav_menu('top', __('Top menu', 'foreach'));

  //Custom code for QAAds plugin
  if(function_exists('quads_register_ad')){
    quads_register_ad( array(
      'location'    => 'ju_header', 
      'description' => 'JU position'
    
    ));
    
  }

}

