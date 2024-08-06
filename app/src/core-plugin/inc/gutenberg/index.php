<?php




function rmbt_register_gutenberg_blocks()
{
   if (!function_exists('register_block_type')) {
      return;
   }

   wp_enqueue_script('history_card', plugins_url('/blocks/history_card/card_history.js', __FILE__), ['wp-blocks', 'wp-element', 'wp-editor'], '1.0');
   wp_enqueue_style('history_card', plugins_url('/blocks/history_card/card_history.css', __FILE__), [], '1.0');

   register_block_type('rmbt/history-card', ['style' => 'history_card', 'editor_script' => 'history_card']);
}
add_action('init', 'rmbt_register_gutenberg_blocks');
