<?php


//Setup

//Includes
//Function for include the file. Here I include the enqueue file from front folder. In that folder I create function for enqueue scripts which I call down bellow
//get_theme_file_path will provide the apsolute path to the theme
include(get_theme_file_path('/includes/front/enqueue.php'));

//Hooks
//This is the wp hoock for including style and scripts in wp. First parametar is the where we will input the code, second parametar is the name of function which will be creadted and which will has the code for input
//Function add_action is custom wp function which tels wp to add fuuctin when some event happens
//In our case we want to call ju_enqueue function when the wp_enqueue_scripts event is fired
add_action('wp_enqueue_scripts', 'ju_enqueue');



//Shortcodes


?>