<?php
/**
 * Plugin Name: ShortStack for WP
 * Plugin URI: http://www.shortstack.com
 * Description: Provides a shortcode for embedding published ShortStack Campaigns into WordPress
 * Version: 1.0.2
 * Author: ShortStack.com
 * Author Email: theteam@shortstacklab.com
 * Author URI: http://www.shortstack.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

// Inserts iframe into content via the [shortstack] shortcode.
// Options:
//  smart_url: The smart url for the campaign
//  width: Width of the embedded iframe
//  height: Height of the embedded iframe
//
function embed_campaign($args){
  // Parse shortcode attributes
  $settings = shortcode_atts(array(
    'smart_url' => '',
    'width' => '100%',
    'height' => '800',
    'responsive' => 'false',
    'v_offset' => 0,
    'autoscroll_p' => 'true'
  ), $args);
  return $settings['responsive'] === 'true' ? build_responsive_embed($settings) : build_fixed_embed($settings);
}

//Load responsive JS by default because it's easiest to unload it in the fixed function.
function load_responsive_js() {
  wp_enqueue_script(
      'iframeResizer',
      '//d2xcq4qphg1ge9.cloudfront.net/javascript/responsive_embed/20150624/iframeResizer.min.js',
      '',
      '',
      true
  );
  wp_enqueue_script(
      'shortstack-for-wp',
      plugins_url('/js/shortstack-for-wp.js', __FILE__),
      array('iframeResizer'),
      '',
      true
  );
}
function unload_responsive_js() {
  wp_dequeue_script( 'iframeResizer' );
  wp_dequeue_script( 'shortstack-for-wp' );
}

function build_fixed_embed($settings){
  unload_responsive_js();

  $iframe = '<iframe src="'.$settings['smart_url'].'?embed=1" id="'.
    get_id($settings['smart_url']).'"'.
    ' width="'.$settings['width'].'" height="'.$settings['height'].'"'.
    ' scrolling="auto" seamless="seamless" frameborder="0">'.
    '</iframe>';
  return $iframe;
}

function build_responsive_embed($settings){
  $iframe_src = preg_replace('/http(s)?:/i', '', $settings['smart_url']) . '?embed=1';
  $iframe_src .= '&v_offset=' . intval($settings['v_offset']);
  $iframe_src .= '&autoscroll_p=' . ($settings['autoscroll_p'] === 'true' ? 1 : 0);
  $iframe = "<iframe class='campaign_embed campaign_embed_responsive' src='". $iframe_src ."'
    seamless='seamless' frameborder='0' width='100%' scrolling='no'></iframe>";
   return $iframe;
}

function get_id($smart_url){
  $i = strrpos($smart_url, '/');
  $shortcode = substr($smart_url, $i);
  return 'sscampaign_'.$shortcode;
}

add_action( 'wp_enqueue_scripts',  'load_responsive_js');
add_shortcode("shortstack", 'embed_campaign');

?>
