<?php

function custom_enqueue() {
    wp_enqueue_style('reset_style', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('my_style', get_template_directory_uri() . '/css/style.css');
  }
  add_action('wp_enqueue_scripts', 'custom_enqueue');
