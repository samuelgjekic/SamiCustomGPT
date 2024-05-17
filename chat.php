<?php
session_start();

use LLPhant\Chat\Enums\OpenAIChatModel;
use SamiCustomGPT\Models\Leads_Bot;
use SamiCustomGPT\Models\CustomBotDataModel;
// Embed SamiCustomGPT
use LLPhant\OpenAIConfig;
use SamiCustomGPT\CustomBotClient;
use SamiCustomGPT\Handlers\CustomBotDataHandler;

require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/SamiCustomGPT/SamiCustomGPT/chatbot/Interfaces/IFileHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/SamiCustomGPT/SamiCustomGPT/chatbot/Interfaces/ICustomBotClient.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/SamiCustomGPT/SamiCustomGPT/chatbot/Handlers/CustomBotDataHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/SamiCustomGPT/SamiCustomGPT/chatbot/Handlers/FileHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/SamiCustomGPT/SamiCustomGPT/chatbot/Models/CustomBotDataModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/SamiCustomGPT/SamiCustomGPT/chatbot/CustomBotClient.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/SamiCustomGPT/vendor/autoload.php';




// Testing custom gpt bot
$config = new OpenAIConfig();
$config->apiKey = '';

$bot_model = new CustomBotDataModel();


if(isset($_COOKIE['areLollo'])){
    $config->model = OpenAIChatModel::Gpt4Omni->getModelName();
} else {
    $config->model = OpenAIChatModel::Gpt35Turbo->getModelName();
}

$loadConversation = true; // set to false if you dont want to load the conversation from session. 

$bot_model->setInstructions('Du är en svensk talande assistent för allt möjligt. Du kan tala andra språk om användaren ber dig. \\n 
Försök att svara så korrekt som möjligt, om du inte vet något ska du nämna det. Du ska även tala om att du är en Chattbot för DinAI.se i början av konversationen. \\n
DinAI har många olika AI verktyg, använd dig av filen du mottagit för att kunna hitta information, om du inte hittar någon information får du improvisera. \\n
Om någon frågar dig vilken modell du använder ska du nämna att du använder DinAI GPT, som använder sig av den allra senaste strykan inom ai modeller. \\n ');

$bot_files = ['/wp-content/plugins/SamiCustomGPT/dinai.txt'];
$bot_model->setFiles($bot_files);
$bot_model->setTitle('DinAi');
$bot_model->setDesc(('Den officiella DinAI chattboten'));

$customgpt = new CustomBotClient($bot_model,$config);
// Check if the message parameter is set
if (isset($_POST['message'])) {
    $message = $_POST['message'];
    // Send the message and return the response
    $response = $customgpt->SendConversationToBot($message);
    echo json_encode(array("response" => $response, "assistantName" => $bot_model->getTitle()));
    exit; // End script execution after sending the response
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SamiCustomGPT></title>
    <link rel="stylesheet" href="/wp-content/plugins/SamiCustomGPT/styles/chatbot.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>
<body>


<div class="chat-container" id="chatCont">
<div id="tooltip-container">
    <div class="tooltip" id="tooltip">
        <span class="tooltip-text">Använd soptunnan för att rensa konversationen</span>
        <span class="tooltip-close" id="tooltipClose">&times;</span>
    </div>
</div>
<div class="close-button" id="closeButton">
    <i class="fas fa-trash-alt"></i> <!-- Font Awesome trash icon -->
</div>        <div class="chat-title">DinAI Chattbot</div>
        <div class="chat-box" id="chatBox">
            <div class="message assistant-message">
                <div class="avatar">DinAI</div>
                <div class="message-content">
                    <div class="message-title">DinAI:</div>
                    <div class="message-text">Hej där, hur kan jag hjälpa dig idag?</div>
                </div>
            </div>
            <?php // here is the chat message start 
            ?>
            <?php 
            if($loadConversation){
                if(isset($_SESSION['All_Messages'])){
                    $conversation = $_SESSION['All_Messages'];
                  // Iterate over each string in the conversation array
                  foreach ($conversation as $message) {
                  
                    // Check if the string starts with "user_"
                    if (strpos($message, 'user_') === 0) {
                        $message = str_replace('user_', '', $message);

                        echo '  <div class="message user-message">
                <div class="avatar">Du</div>
                <div class="message-content">
                    <div class="message-title">Du:</div>
                    <div class="message-text"><pre>'. $message . '</pre></div>
                </div>
            </div>';
                    }
                    // Check if the string starts with "bot_"
                    elseif (strpos($message, 'bot_') === 0) {
                        $message = str_replace('bot_', '', $message);

                        echo '  <div class="message assistant-message">
                        <div class="avatar">DinAI</div>
                        <div class="message-content">
                            <div class="message-title">DinAI:</div>
                            <div class="message-text"><pre>'. $message . '</pre></div>
                        </div>
                    </div>';
                    }
                    // Handle other cases or invalid messages
                    else {
                        echo '  <div class="message user-message">
                        <div class="avatar">Okänd</div>
                        <div class="message-content">
                            <div class="message-title">Okänd:</div>
                            <div class="message-text">'. $message . '</div>
                        </div>
                    </div>';
                    }
                }}
            }
            ?>
            
            
        </div>
        <div class="powered-by-text"> Powered by <a href="https://dinai.se">DinAI</a> </div>
        <div class="input-container">
        <textarea id="messageInput" placeholder="Skriv ditt meddelande..." rows="3"></textarea>
            <button id="sendButton">Skicka</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/wp-content/plugins/SamiCustomGPT/chat.js"></script> <!-- Update JavaScript path to absolute -->
</body>
</html>