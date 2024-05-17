<?php
use AiTools\Audio\AudioGenerator;
use AiTools\Audio\Enums\AudioModel;
use AiTools\Audio\Enums\VoiceModel;
/**
* Plugin Name: SamiCustomGPT
* Plugin URI: https://github.com/samuelgjekic/SamiCustomGPT
* Description: A OpenAI powered embed chatbot for your wordpress site with vector stored custom knowledge data
* Version: 1.0.2
* Author: Samuel Gjekic
* Author URI: https://github.com/samuelgjekic/
**/
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/SamiCustomGPT/includes/tools/Audio/AudioGenerator.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/SamiCustomGPT/includes/tools/Audio/Enums/AudioModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/SamiCustomGPT/includes/tools/Audio/Enums/VoiceModel.php';




function embed_chatbot()
{
    ob_start(); // Start output buffering
    ?>
    <div id="sami-custom-gpt-chatbot">
        <iframe src="<?php echo plugins_url('/SamiCustomGPT/chat.php'); ?>" style="max-width: 100%; width: 140vw; height: 105vh; border: none;"></iframe>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered output
}

// Function to generate audio URL


// Shortcode function to embed the audio player
function setLolloCookieShortcode()
{
    $model = AudioModel::standard;
    $voiceModel = VoiceModel::Nova;
    $audioGenerator = new AudioGenerator('');
    $text = 'Welcome to Safe Toys, which is the best reseller for toys ever!';

    $audioContent = $audioGenerator->generateTextToSpeech($text, $model, $voiceModel);

    // Output HTML for the audio player
    ob_start();
    ?>
    <div id="sami-custom-gpt-chatbot">
        <audio controls>
            <source src="data:audio/mpeg;base64,<?php echo base64_encode($audioContent); ?>" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <button onclick="saveAudio('<?php echo base64_encode($audioContent); ?>')">Save Audio</button>
    </div>

    <script>
        function saveAudio(base64Audio) {
            // Implement logic to save audio to disk here
            // You can use AJAX to send the base64-encoded audio content to the server for saving
            // Alternatively, you can provide a download link for users to save the audio file locally
        }
    </script>
    <?php
    return ob_get_clean();
}

add_shortcode('sami_custom_gpt','embed_chatbot');
add_shortcode('din_ai_tts','setLolloCookieShortcode');

