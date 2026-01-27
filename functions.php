<?php
/**
 * NEG’ MAWON Child Theme
 */

$block_styles = get_stylesheet_directory() . '/inc/block-styles.php';
if (file_exists($block_styles)) {
  require_once $block_styles;
}

add_action('wp_enqueue_scripts', function () {
  $css = get_stylesheet_directory() . '/assets/css/main.css';

  wp_enqueue_style(
    'negmawon-main',
    get_stylesheet_directory_uri() . '/assets/css/main.css',
    [],
    file_exists($css) ? filemtime($css) : null
  );
}, 20);

add_action('enqueue_block_editor_assets', function () {
  $css = get_stylesheet_directory() . '/assets/css/editor.css';

  wp_enqueue_style(
    'negmawon-editor',
    get_stylesheet_directory_uri() . '/assets/css/editor.css',
    [],
    file_exists($css) ? filemtime($css) : null
  );
});
