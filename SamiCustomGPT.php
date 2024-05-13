<?php
/**
* Plugin Name: SamiCustomGPT
* Plugin URI: https://github.com/samuelgjekic/SamiCustomGPT
* Description: A OpenAI powered embed chatbot for your wordpress site with vector stored custom knowledge data
* Version: 0.1
* Author: Samuel Gjekic
* Author URI: https://github.com/samuelgjekic/
**/

function embed_chatbot()
{
  if ( !is_admin()){
  $plugin_url = plugins_url(); // Get the base URL of the plugins directory
  $chat_url = $plugin_url . '/SamiCustomGPT/chat.php';
 echo '<iframe src="' . $chat_url .  '" style="z-index: 9999; position: fixed; bottom: 20px; right: 20px; width: 390px; height: 600px; border: none;"></iframe>';
} 
}

add_action( 'wp_loaded', 'embed_chatbot');
