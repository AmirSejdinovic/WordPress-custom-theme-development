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

//Hooks
//This is the wp hoock for including style and scripts in wp. First parametar is the where we will input the code, second parametar is the name of function which will be creadted and which will has the code for input
//Function add_action is custom wp function which tels wp to add fuuctin when some event happens
//In our case we want to call ju_enqueue function when the wp_enqueue_scripts event is fired
add_action('wp_enqueue_scripts', 'ju_enqueue');
//Adding hook for register menu. We add the after_setup_theme hook which will tirger this hoock when all the files of the functions.php inisde theme folder are loaded after that it will run this code
//ju_setup_theme is function which I created in includes folder inside seutp.php file
add_action('after_setup_theme','ju_setup_theme');



//Shortcodes


?>