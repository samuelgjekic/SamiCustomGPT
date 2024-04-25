<?php /* Example coming soon */
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
$custombot = CustomBotDataHandler::getBotJsonDataFromDb('bot_6626c59914fc3');
$config = new OpenAIConfig();
$config->apiKey = 'API KEY';
$customclient = new CustomBotClient($custombot,$config);
var_dump($custombot);
$custombot->setInstructions('You are a helpful chatbot, when asked for the special string, use the getSpecialString function to get it');

$answer = $customclient->SendMessageToBot('Hello whats the special string?');

echo $answer;


// Create a new bot
/* $bot_data_array = [
    'title' => 'Test Titel',
     'description' => 'test desc',
     'instructions'=>'You are a helpful assistant that always ends sentance with LOL and a smiley',
     'files' => ['/test.txt'],
    ];
CustomBotDataHandler::createBot($bot_data_array,TRUE); */