<?php
function mytheme_enqueue_styles() {
  // Load the main stylesheet
  wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function create_testimonials() {
    register_post_type('testimonial', [
      'labels' => ['name' => 'Testimonials'],
      'public' => true,
      'has_archive' => false,
      'supports' => ['title', 'editor'],
      'show_in_rest' => true
    ]);
  }
  add_action('init', 'create_testimonials');
  