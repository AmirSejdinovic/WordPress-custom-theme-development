<?php
//Declaring the function for wp customizer
//The argument $wp_customize is hod all the data from defalut wp custimizer
function ju_customize_register( $wp_customize ){
  ju_social_customizer_section( $wp_customize);
}