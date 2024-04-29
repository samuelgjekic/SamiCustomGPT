
<?php
// Embed SamiCustomGPT
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

// Testing custom gpt bot
$config = new OpenAIConfig();
$config->apiKey = 'API KEY';

$bot_model = CustomBotDataHandler::getBotFromFile('bot_6626c59914fc3');

$customgpt = new CustomBotClient($bot_model,$config);




// Check if the message parameter is set
if (isset($_POST['message'])) {
    $message = $_POST['message'];
    // Send the message and return the response
    $response = $customgpt->SendMessageToBot($message);
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
</head>
<body>
<div class="chat-container">
        <div class="chat-title">Chat with SamiCustomGPT</div>
        <div class="chat-box" id="chatBox">
            <div class="message assistant-message">
                <div class="avatar">A</div>
                <div class="message-content">
                    <div class="message-title">SamiCustomGPT:</div>
                    <div class="message-text">Hello! How can I assist you today?</div>
                </div>
            </div>
            <div class="message user-message">
                <div class="avatar">U</div>
                <div class="message-content">
                    <div class="message-title">You:</div>
                    <div class="message-text">I need help with my project.</div>
                </div>
            </div>
        </div>
        <div class="powered-by-text">Created by Samuel Gjekic</div>
        <div class="input-container">
            <input type="text" id="messageInput" placeholder="Type your message...">
            <button id="sendButton">Send</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/chat.js"></script> <!-- Update JavaScript path to absolute -->
</body>
</html>




