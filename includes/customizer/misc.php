<?php
//Creating function for the misc elements
function ju_misc_customizer_section( $wp_customize ){

   //Database settings
  $wp_customize->add_setting('ju_header_show_search', [
    'default' => 'yes',
    'transport' => 'postMessage'
  ]);

  $wp_customize->add_setting('ju_header_show_cart', [
    'default' => 'yes',
    'transport' => 'postMessage'
  ]);

  $wp_customize->add_setting('ju_footer_copyright_text', [
    'default' => 'Copyrights &copy; 2019 All Rights Reserved.',
  ]);

  $wp_customize->add_setting('ju_footer_tos_page', [
    'default' => 0,
  ]);

  $wp_customize->add_setting('ju_footer_privacy_page', [
    'default' => 0,
  ]);

  $wp_customize->add_setting('ju_read_more_color', [
    'default' => '#1ABC9C'
  ]);

  $wp_customize->add_setting('ju_report_file', [
    'default' => ''
  ]);
  $wp_customize->add_setting('ju_show_header_popular_posts',[
    'default' => false
  ]);
  $wp_customize->add_setting('ju_popular_posts_widget_title',[
    'default' => 'Braking News'
  ]);
  //section
  $wp_customize->add_section('ju_misc_section', [
    'title'  => __('Misc Settings', 'foreach'),
    'priority' => 30,
    'panel'    => 'foreach'
  ]);

  //Creating the controlors for each setting
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 'ju_header_show_search_input', 
    array(
      'label' => __('Show Search Button in Header', 'foreach'),
      'section' => 'ju_misc_section',
      'settings' => 'ju_header_show_search',
      'type'  => 'checkbox',
      'choices' => [
         'yes'  => 'Yes'
      ]
    )
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 'ju_header_show_cart_button', 
    array(
      'label' => __('Show Cart Button in Header', 'foreach'),
      'section' => 'ju_misc_section',
      'settings' => 'ju_header_show_cart',
      'type'  => 'checkbox',
      'choices' => [
         'yes'  => 'Yes'
      ]
    )
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 'ju_footer_copyright', 
    array(
      'label' => __('Show Cart Button in Header', 'foreach'),
      'section' => 'ju_misc_section',
      'settings' => 'ju_footer_copyright_text',
      
    )
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 'ju_footer_tos_page_input', 
    array(
      'label' => __('Footer TOS page', 'foreach'),
      'section' => 'ju_misc_section',
      'settings' => 'ju_footer_tos_page',
      'type'    => 'dropdown-pages'
      
    )
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, 'ju_footer_privacy_policy', 
    array(
      'label' => __('Privacy policy', 'foreach'),
      'section' => 'ju_misc_section',
      'settings' => 'ju_footer_privacy_page',
      'type'    => 'dropdown-pages'
      
    )
  ));

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'ju_read_more_color_input',
      array(
        'label' => __('Read more link color', 'foreach'),
        'section' => 'ju_misc_section',
        'settings' => 'ju_read_more_color',
      )
    )
  );

  
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'ju_report_file_input',
        array(
            'label'      => __( 'File Report', 'foreach' ),
            'section'    => 'ju_misc_section',
            'settings'   => 'ju_report_file',
            
        )
    )
);

$wp_customize->add_control(
  new WP_Customize_Image_Control(
      $wp_customize,
      'ju_show_popular_posts_widget_input',
      array(
          'label'      => __( 'Show Header Popular Posts Widget', 'foreach' ),
          'section'    => 'ju_misc_section',
          'settings'   => 'ju_show_header_popular_posts',
          'type'  => 'checkbox',
          'choices' => [
            'yes'  => __('yes', 'foreach')
          ]
          
      )
  )
);

$wp_customize->add_control(
  new WP_Customize_Image_Control(
      $wp_customize,
      'ju_popupar_post_input',
      array(
          'label'      => __( 'Popular posts widget Title', 'foreach' ),
          'section'    => 'ju_misc_section',
          'settings'   => 'ju_popular_posts_widget_title',
          'type' => 'text'
          
          
      )
  )
);


}