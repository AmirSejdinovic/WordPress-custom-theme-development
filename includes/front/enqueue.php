<?php
//Creating the function which we call from functions.php
function ju_enqueue(){
//Creating variable and pas in it the get_theme_file_uri function which will hellp us to have apsolute path to the theme
  $uri = get_theme_file_uri();
//Calling the wp_register_style function which alows us to inport style.
  wp_register_style('ju_google_fonts','https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i');
  wp_register_style('ju_boostrap',$uri.'/assets/css/bootstrap.css');
  wp_register_style('ju_style',$uri.'/assets/css/style.css');
  wp_register_style('ju_dark', $uri.'/assets/css/dark.css');
  wp_register_style('ju_font_icons',$uri.'/assets/css/font-icons.css');
  wp_register_style('ju_animate',$uri.'/assets/css/animate.css');
  wp_register_style('ju_magnific_popup',$uri.'/assets/css/magnific-popup.css');
  wp_register_style('ju_responsive',$uri.'/assets/css/responsive.css');
  wp_register_style('ju_custom', $uri.'/assets/css/custom.css');

  //This wp_enqueue_style is custom wp function which allow us to connect the register styles with front end of theme it will insert register styles into wp head
  wp_enqueue_style('ju_google_fonts');
  wp_enqueue_style('ju_boostrap');
  wp_enqueue_style('ju_style');
  wp_enqueue_style('ju_dark');
  wp_enqueue_style('ju_font_icons');
  wp_enqueue_style('ju_animate');
  wp_enqueue_style('ju_magnific_popup');
  wp_enqueue_style('ju_responsive');
  wp_enqueue_style('ju_custom');

  //Registering the js scripts with wp_register_script
  //The last parametar of this functions enables that the script is loaded in footer
  wp_register_script('ju_plugins', $uri.'/assets/js/plugins.js',[],false,true);
  wp_register_script('ju_function',$uri.'/assets/js/functions.js',[],false,true);

  //This wp_enqueue_script will inport the register script into front end
  wp_enqueue_script('jquery');
  wp_enqueue_script('ju_plugins');
  wp_enqueue_script('ju_function');
  

}

?>