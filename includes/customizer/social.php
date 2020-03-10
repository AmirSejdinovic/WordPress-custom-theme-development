<?php

function ju_social_customizer_section( $wp_customize ){

   //This method add seting has two parametars first is id. Whith this method this value will be stored in db and we can manipluated with it
   $wp_customize->add_setting('ju_facebook_handle', [
    'default'  => ''
  ]);

  //Twiter seting
  $wp_customize->add_setting( 'ju_twitter_handle', array(
		'default'                   =>  '',
  ));
  //Instagram seting
  $wp_customize->add_setting('ju_instagram_handle', array(
     'default'  => '',
  ));
  //Phone setting
  $wp_customize->add_setting(
    'ju_phone_handle', array(
      'default' => '',
    )
    );
    //Email setting
    $wp_customize->add_setting( 'ju_email_handle', array(
      'default' => '',
    )
    );
  //Caling the method add_section this method will add new section in the customizer
  $wp_customize->add_section( 'ju_social_section', [
    'title'  => __('Social settings', 'foreach'),
    'priority'=> 30,
    //Ading the panel to section this where we add the id of panel
    'panel'  => 'foreach'
  ]);
  //Calling the add_control() method. This method will create the input field in the section which we created above
  $wp_customize->add_control( 
    //Caling the new instance of class  WP_Customize_Control
    new WP_Customize_Control(
    $wp_customize,
    'ju_social_facebook_input',
    array(
        'label'          => __( 'Facebook Handle', 'foreach' ),
        'section'        => 'ju_social_section',
        'settings'       => 'ju_facebook_handle',
        'type'           => 'text',
    
    )
) );
//Twitter control
$wp_customize->add_control(new WP_Customize_Control(
  $wp_customize,
  'ju_social_twitter_input',
  array(
    'label'                 =>  __( 'Twitter Handle', 'theme_name' ),
    'section'               => 'ju_social_section',
    'settings'              => 'ju_twitter_handle',
    'type'                  =>  'text'
  )
));
//instagram
$wp_customize->add_control(new WP_Customize_Control(
  $wp_customize,
  'ju_social_instagram_input',
  array(
    'label'                 =>  __( 'Instagram Handle', 'theme_name' ),
    'section'               => 'ju_social_section',
    'settings'              => 'ju_instagram_handle',
    'type'                  =>  'text'
  )
));

//Phone

$wp_customize->add_control(new WP_Customize_Control(
  $wp_customize,
  'ju_social_phone_input',
  array(
    'label'                 =>  __( 'Phone Handle', 'theme_name' ),
    'section'               => 'ju_social_section',
    'settings'              => 'ju_phone_handle',
    'type'                  =>  'text'
  )
));

//Email

$wp_customize->add_control(new WP_Customize_Control(
  $wp_customize,
  'ju_social_email_input',
  array(
    'label'                 =>  __( 'Email Handle', 'theme_name' ),
    'section'               => 'ju_social_section',
    'settings'              => 'ju_email_handle',
    'type'                  =>  'text'
  )
));


}