
<?php
use SamiCustomGPT\Models\CustomBotDataModel;
session_start();
// Embed SamiCustomGPT
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
$config->apiKey = 'API KEY HERE';

$bot_model = new CustomBotDataModel();
$customgpt;

if(!isset($_SESSION['botid'])) {
    if(isset($_GET['botid'])) {
        $bot_model = CustomBotDataHandler::getBotFromFile($_GET['botid']);
        $_SESSION['botid'] = $_GET['botid'];
    } else {
        exit('No bot id was set');
    }
} else {
    if(isset($_GET['botid']) && $_GET['botid'] !== $_SESSION['botid']) {
        $_SESSION['botid'] = $_GET['botid']; 
    }
    $bot_model = CustomBotDataHandler::getBotFromFile($_SESSION['botid']);
}
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
    <title>SamICustomGPT</title>
    <link rel="stylesheet" href="/styles/chatbot.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-wH9k7nsVUoZqzYYJf8e2J/UVWl8z9+3K8Ra5R11k+vsHVDc14nYDbZMq0tLn1U6/4drK2+fbSKVnurUrfzlVPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="chat-avatar" id="chatAvatar">
<i class="fas fa-user">Chat now</i> 
</div>

<div class="chat-container" id="chatCont">
        <div class="chat-title">DinAI Chattbot</div>
        <div class="chat-box" id="chatBox">
            <div class="message assistant-message">
                <div class="avatar">DinAI</div>
                <div class="message-content">
                    <div class="message-title">DinAI:</div>
                    <div class="message-text">Hej där! Kan jag hjälpa dig?</div>
                </div>
            </div>
            
            
        </div>
        <div class="powered-by-text"><?= 'Powered by ' . $bot_model->getPoweredBy() // Powered by section ?></div>
        <div class="input-container">
            <input type="text" id="messageInput" placeholder="Skriv ditt meddelande...">
            <button id="sendButton">Skicka</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/chat.js"></script> <!-- Update JavaScript path to absolute -->
</body>
</html>