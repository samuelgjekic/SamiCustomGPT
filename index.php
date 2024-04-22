<?php /* Example coming soon */
use LLPhant\OpenAIConfig;
use SamiCustomGPT\CustomBotClient;
use SamiCustomGPT\Handlers\CustomBotDataHandler;

require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Interfaces/IFileHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Interfaces/ICustomBotClient.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Handlers/CustomBotDataHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Handlers/FileHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Models/CustomBotDataModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/CustomBotCLient.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';





// Testing custom gpt bot
$custombot = CustomBotDataHandler::getBotJsonDataFromDb('bot_6626c59914fc3');
$config = new OpenAIConfig();
$config->apiKey = 'api_key';
$customclient = new CustomBotClient($custombot,$config);
var_dump($custombot);

$answer = $customclient->SendMessageToBot('Hello what products are available');

echo $answer;


// Create a new bot
/* $bot_data_array = [
    'title' => 'Test Titel',
     'description' => 'test desc',
     'instructions'=>'You are a helpful assistant that always ends sentance with LOL and a smiley',
     'files' => ['/test.txt'],
    ];
CustomBotDataHandler::createBot($bot_data_array,TRUE); */