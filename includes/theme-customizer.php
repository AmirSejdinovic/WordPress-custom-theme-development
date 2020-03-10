<?php
//Declaring the function for wp customizer
//The argument $wp_customize is hod all the data from defalut wp custimizer
function ju_customize_register( $wp_customize ){
  /*echo '<pre>';
  var_dump( $wp_customize);
  echo '</pre>';*/


 $wp_customize->get_section('title_tagline')->title = 'General';

  //Caling the add_panel() method this method will alow me to create panel for sectinons inside the custimizer. this method have two parametars whic is the ID and array of settings
  $wp_customize->add_panel('foreach',[
    'title'  => __('Foreach'),
    'description' => '<p>Foreach Theme Stting</p>',
    'priority'  => 160
  ]);
  //Caling function for social custom
  ju_social_customizer_section( $wp_customize);
  //Caling the function for misc elements from misc.php
  ju_misc_customizer_section( $wp_customize );

}