<?php
//This function will be included into function php and it will be responsible for registering menu
function ju_setup_theme(){
  //Caling the wp function for registering menu. In this funciton we must provide a location and description as parametars
  //__() this function inside this is special function for wordpress which alow us to transalte wp. This funciton has two parametars first is the text which we'll transalta and second is the  textdomanin of theme
  register_nav_menu('primary', __('Primary Menu','foreach'));

}

