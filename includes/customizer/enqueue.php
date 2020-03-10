<?php

function ju_customize_preview_init(){
  wp_enqueue_script(
    'ju_theme_customier',
    get_theme_file_uri('/assets/js/theme-customize.js'),
    ['jquery', 'customize-preview'],
    false,
    true
  );
}