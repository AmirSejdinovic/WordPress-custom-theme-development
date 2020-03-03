<?php
//Creating cutom class which extends the Walker_nav_menu 

class JU_Custon_Nav_Walker extends Walker_Nav_Menu{
  //Updating public function 
  public function start_lvl( &$output, $depth = 0, $args = [] ){
     //Apending the ul with class on html outpup
     $output .= '<ul class="special-class">';
  
  }
  //Updating the start_el function
  //The $item parametar has info about single link
  //The $id contains the id of link element
  public function start_el(&$output, $item, $depth = 0, $args = [], $id){
    //Appending the 
       $output .= '<li class="special-class-item"> ';
       $output .= $args->before;
       $output .= '<a href="'.$item->url .'">';
       $output .= $args->link_before . $item->title . $args->link_afrer;
       $output .= '</a>';
       $output .= $args->after;
  }
  public function end_el(&$output, $item, $depth = 0, $args = [], $id){
     $output .= '</li>';
  }
  //Update the end lvl function
  public function end_lvl(&$output, $depth = 0, $args = []){
    //Apending the closing ul tag to the output of html
    $output    .= '</ul>';
  }
   
}