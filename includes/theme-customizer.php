<?php
//Declaring the function for wp customizer
//The argument $wp_customize is hod all the data from defalut wp custimizer
function ju_customize_register( $wp_customize ){
  //Caling function for social custom
  ju_social_customizer_section( $wp_customize);
  //Caling the function for misc elements from misc.php
  ju_misc_customizer_section( $wp_customize );

}