

<?php
// chat as page
// Testing custom gpt bot
// TODO Implement Sessions
use LLPhant\OpenAIConfig;
use SamiCustomGPT\CustomBotClient;
use SamiCustomGPT\Handlers\CustomBotDataHandler;

require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Interfaces/IFileHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Interfaces/ICustomBotClient.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Handlers/CustomBotDataHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Handlers/FileHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Models/CustomBotDataModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/CustomBotClient.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$custombot = CustomBotDataHandler::getBotJsonDataFromDb('bot_6626c59914fc3');
$config = new OpenAIConfig();
$config->apiKey = 'API KEY';
$custombot->setInstructions(
    'You are a helpful assistant that will talk about SamiCustomGPT - A Custom AI Chatbot built in PHP using LLphants Ai framework. 
     You will explain all the positive things about using a AI Powered chatbot on websites');
$customclient = new CustomBotClient($custombot,$config);

// Check if the message parameter is set
if (isset($_POST['message'])) {
    $message = $_POST['message'];
    // Send the message and return the response
    $response = $customclient->SendMessageToBot($message);
    echo $response;
    exit; // End script execution after sending the response
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="/styles/chatbot.css"> 
    <link rel="stylesheet" href="/styles/chatbot_page.css"> 


</head>
<body>
<div class="chatbot-container">
    <div class="chatbot-title">Chat with SamiCustomGPT</div>
    <div class="chatbox" id="chatBox">
        <!-- Messages will be appended here -->
    </div>
    <div class="powered-by-text">Created by Samuel Gjekic</div>
    <div class="input-container">
        <input type="text" id="messageInput" placeholder="Type your message...">
        <button id="sendButton">Send</button>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/chat_page.js"></script>
</body>
</html>

