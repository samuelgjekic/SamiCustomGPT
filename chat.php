<?php
use SamiCustomGPT\Handlers\KnowledgeBaseBuilder;
use SamiCustomGPT\Models\Leads_Bot;
session_start();
use SamiCustomGPT\Models\CustomBotDataModel;
// Embed SamiCustomGPT
use LLPhant\OpenAIConfig;
use SamiCustomGPT\CustomBotClient;
use SamiCustomGPT\Handlers\CustomBotDataHandler;

require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Interfaces/IKnowledgeBaseHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Interfaces/ICustomBotClient.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Handlers/CustomBotDataHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Handlers/KnowledgeBaseHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Models/CustomBotDataModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/CustomBotClient.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';


// Testing custom gpt bot
$config = new OpenAIConfig();
$config->apiKey = '';

$bot_model = new CustomBotDataModel();
$customgpt;
$bot_model->setInstructions('You are a chatbot on the SamiCustomGPT website. \\n Your job is to explain to the user the benefits of
using SamiCustomGPT on ones website, for example \\n Chatbot that helps customers find what they need, or \\n Chatbot that helps with customer support
\\n Faq Chatbot which answers frequently asked questions, \\n and more that you come up with. \\n SamiCustomGPT is easy to integrate and customize and
supports multiple bots using unique bot ids. \\n You must Keep your answers short but informative . Speak english as default. ');


/*  Will create a file from URL, AI will use the file to answer question, then delete the file. 
 This can be changed to not delete the file, by simply having the vectorFile creation done somewhere other than
 chat.php and removing the unlink. */
$filename = '/' . KnowledgeBaseBuilder::createVectorFileFromUrl('https://samicustomgpt.bredfy.com/','/');
$bot_files = [$filename];
$bot_model->setFiles($bot_files);
$bot_model->setTitle('SamiCustomGPT'); 


$bot_model->setDesc(('The official SamiCustomGPT chatbot'));

$customgpt = new CustomBotClient($bot_model,$config);
unlink($_SERVER['DOCUMENT_ROOT'] . $filename);

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
    <link rel="stylesheet" href="/styles/chatbot.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>
<body>
<div id="chatAvatar">
<i class="fas fa-comment chat-icon"></i>
</div>

<div class="chat-container" id="chatCont">
    <div class="close-button" id="closeButton">&times;</div>
        <div class="chat-title">SamiCustomGPT</div>
        <div class="chat-box" id="chatBox">
            <div class="message assistant-message">
                <div class="avatar">Sami</div>
                <div class="message-content">
                    <div class="message-title">SamiCustomGPT:</div>
                    <div class="message-text">Hey there! How can i help you?</div>
                </div>
            </div>
            
            
        </div>
        <div class="powered-by-text"> Created by Samuel Gjekic </div>
        <div class="input-container">
            <input type="text" id="messageInput" placeholder="Write your message...">
            <button id="sendButton">Send</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/chat.js"></script> <!-- Update JavaScript path to absolute -->
</body>
</html>