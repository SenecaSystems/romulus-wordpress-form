<?php
/*
Plugin Name: Romulus Contact Form
Plugin URI: http://romuluscrm.com/
Description: Integrates Romulus CRM contact form into wordpress
Version: 1.0.0
Author: Romulus CRM
Author URI: https://romuluscrm.com/
License: MIT
*/

function romulus_contact_form_shortcode_function( $attrs ) {
  if ( ! empty( $attrs['url'] ) ) {
    $url = $attrs['url'];
    return '<iframe src="'.$url.'"
              width="520"
              height="1090"
              frameborder="0"
              style="overflow: auto; padding: 14px; margin: 12px; width: 98%; max-width: 900px; background-color: #fff; border: none">
      </iframe>';
  }
}

add_shortcode('romulus_contact_form', 'romulus_contact_form_shortcode_function');
