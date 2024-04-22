<?php 
/* The main Chatbot Data Object */

namespace SamiCustomGPT;
use LLPhant\OpenAIConfig;
use LLPhant\Query\SemanticSearch\QuestionAnswering;
use LLPhant\Chat\OpenAIChat;
use SamiCustomGPT\Interfaces\ICustomBotClient;
use SamiCustomGPT\Interfaces\ICustomBotDataModel;
use SamiCustomGPT\Interfaces\IFileHandler;
use SamiCustomGPT\Handlers\FileHandler;


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
}

public function SendMessageToBot($content) : string {
    $response = $this->client->answerQuestion($content);
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

}