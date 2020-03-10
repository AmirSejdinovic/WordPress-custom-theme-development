<?php


//Setup
//Here I create constatn which helds value of true. This constant I will use in develeopment mode so it can disable browser chaching
define('JU_DEV_MODE',true);

//Includes
//Function for include the file. Here I include the enqueue file from front folder. In that folder I create function for enqueue scripts which I call down bellow
//get_theme_file_path will provide the apsolute path to the theme
include(get_theme_file_path('/includes/front/enqueue.php'));
//Including setup.ph
include(get_theme_file_path('/includes/setup.php'));
//Include wallker class
include(get_theme_file_path('/includes/custom-nav-walker.php'));
//Include the widgets function
include(get_theme_file_path('/includes/widgets.php'));
//Include the theme-customizer file
include(get_theme_file_path('/includes/theme-customizer.php'));
//Include the social customizer from social.php
include(get_theme_file_path('/includes/customizer/social.php'));
//Including misc file
include(get_theme_file_path('/includes/customizer/misc.php'));

//Hooks
//This is the wp hoock for including style and scripts in wp. First parametar is the where we will input the code, second parametar is the name of function which will be creadted and which will has the code for input
//Function add_action is custom wp function which tels wp to add fuuctin when some event happens
//In our case we want to call ju_enqueue function when the wp_enqueue_scripts event is fired
add_action('wp_enqueue_scripts', 'ju_enqueue');
//Adding hook for register menu. We add the after_setup_theme hook which will tirger this hoock when all the files of the functions.php inisde theme folder are loaded after that it will run this code
//ju_setup_theme is function which I created in includes folder inside seutp.php file
add_action('after_setup_theme','ju_setup_theme');
//Adding the hoock for register widgets
add_action('widgets_init', 'ju_widgets');
//Adding hook for hook on wp customizer
//The customize_register hook is the hook which wp calls when we open the wp cutomizer
//ju_customize_register is the function which I create and in it I put the code for cutomize register
add_action('customize_register', 'ju_customize_register');



//Shortcodes


?>