<?php
function ju_widgets(){
  //This is a function for registering the sidebar
  register_sidebar([
      'name'         => __('First Sidebar', 'foreach'),
      'id'          => 'ju_sidebar',
      'description' => __('Sidebar for theme','foreach'),
      'before_widget' => '<div id="%1$s" class="widget cleafiy %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4>',
      'after_title'  => '</h4>'
 
  ]);

}