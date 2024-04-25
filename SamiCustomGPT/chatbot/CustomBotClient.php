<?php 
/* The main Chatbot Data Object */

namespace SamiCustomGPT;
use SamiCustomGPT\Testing\TestFunction;
use LLPhant\Chat\FunctionInfo\FunctionBuilder;
use LLPhant\OpenAIConfig;
use LLPhant\Query\SemanticSearch\QuestionAnswering;
use LLPhant\Chat\OpenAIChat;
use SamiCustomGPT\Interfaces\ICustomBotClient;
use SamiCustomGPT\Interfaces\ICustomBotDataModel;
use SamiCustomGPT\Interfaces\IFileHandler;
use SamiCustomGPT\Handlers\FileHandler;
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Testing/TestFunction.php';



class CustomBotClient implements ICustomBotClient{
    private OpenAIConfig $config;
    public ICustomBotDataModel $data;
    private ?IFileHandler $filehandler;
    public $client;
function __construct(ICustomBotDataModel $bot_data_object,OpenAIConfig $config,?IFileHandler $filehandler = null){
// Create the chatbot either with default values or with the custom data model.
$this->config = $config;
if(!$bot_data_object == null){
$this->data = $bot_data_object;
}
$this->filehandler = $filehandler ?? new FileHandler($this->config,'small');
$this->initializeCustomBotClient();
$this->AddFunctionsToBot();
}

public function SendMessageToBot($content) : string {
    $response = $this->client->answerQuestionOrReturnFunctionReply($content);
  return $response;
}

private function initializeCustomBotClient(){
    $file_array = $this->data->getFiles();
    $this->filehandler->AttachAllFilesToBot($file_array);
    
    // We use the QuestionAnswering class provided by llphants library to create a client with memory vector storage.
    $this->client = new QuestionAnswering(
        $this->filehandler->getVectorStore(),
        $this->filehandler->getGenerator(),
        new OpenAIChat($this->config)
    );
    $this->client->systemMessageTemplate = $this->data->getInstructions() . '\\n\\n{context}.';
    
}

private function AddFunctionsToBot(){
$tools = FunctionBuilder::buildFunctionInfo(new TestFunction(), 'getSpecialString');
$this->client->chat->addTool($tools);
}

}