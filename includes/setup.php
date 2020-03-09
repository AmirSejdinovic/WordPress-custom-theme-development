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

