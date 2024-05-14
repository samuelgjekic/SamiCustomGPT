<?php 
/* The main Chatbot Data Object */

namespace SamiCustomGPT;
use Exception;
use LLPhant\Chat\Message;
use SamiCustomGPT\Handlers\KnowledgeBaseBuilder;
use SamiCustomGPT\Handlers\KnowledgeBaseHandler;
use SamiCustomGPT\Interfaces\IKnowledgeBaseHandler;
use SamiCustomGPT\Testing\TestFunction;
use LLPhant\Chat\FunctionInfo\FunctionBuilder;
use LLPhant\OpenAIConfig;
use LLPhant\Query\SemanticSearch\QuestionAnswering;
use LLPhant\Chat\OpenAIChat;
use SamiCustomGPT\Interfaces\ICustomBotClient;
use SamiCustomGPT\Interfaces\ICustomBotDataModel;
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Testing/TestFunction.php';



class CustomBotClient implements ICustomBotClient{
    private OpenAIConfig $config;
    public ICustomBotDataModel $data;
    private ?KnowledgeBaseHandler $knowledgeBase;
    public $client;

    public ?string $latestResponse = null;
function __construct(ICustomBotDataModel $bot_data_object,OpenAIConfig $config,?IKnowledgeBaseHandler $knowledgeBaseHandler = null){
// Create the chatbot either with default values or with the custom data model.
$this->config = $config;
if(!$bot_data_object == null){
$this->data = $bot_data_object;
}
$this->knowledgeBase = $knowledgeBaseHandler ?? new KnowledgeBaseHandler($this->config,'large');
$this->initializeCustomBotClient();
$this->AddFunctionsToBot();
//$this->client->chat->setModelOption('max_tokens', 150);
}

public function SendMessageToBot($content) : string {
    $response = $this->client->answerQuestionOrReturnFunctionReply($content);
  return $response;
}

public function SendConversationToBot($new_message)
{
    try{
    $messages = [];
    $conversation = [];
  if(isset($_SESSION['All_Messages'])){
    $conversation = $_SESSION['All_Messages'];
  // Iterate over each string in the conversation array
  foreach ($conversation as $message) {

    // Check if the string starts with "user_"
    if (strpos($message, 'user_') === 0) {
        $message = str_replace('user_', '', $message);
        $userMessage = Message::user($message);
        array_push($messages,$userMessage);
    }
    // Check if the string starts with "bot_"
    elseif (strpos($message, 'bot_') === 0) {
        $message = str_replace('bot_', '', $message);
        $botMessage = Message::assistant($message);
        array_push($messages,$botMessage);
    }
    // Handle other cases or invalid messages
    else {
        echo "Unknown message format: " . $message . "<br>";
    }
}}
$userMessage = Message::user($new_message);
array_push($conversation,'user_' . $new_message);
array_push($messages,$userMessage);

$response = $this->client->answerQuestionFromChatOrReturnFunctionCalled($messages);
array_push($conversation,'bot_' . $response);
$_SESSION['All_Messages'] = $conversation;
$this->latestResponse = $response;
return $response;
    } catch(Exception $SessionError)
    {
        // In case sessions are not working, we will use the AI without memory to retrieve response.
        echo '<script>console.log("' . $SessionError->getMessage() . '")</script>';
        $response = $this->client->answerQuestionOrReturnFunctionReply($message);
        $this->latestResponse = $response;
    }
}

private function initializeCustomBotClient(){ 
    $file_array = $this->data->getFiles();
    $this->knowledgeBase->AttachAllFilesToBot($file_array); 
    // We use the QuestionAnswering class provided by llphants library to create a client with memory vector storage.
    $this->client = new QuestionAnswering(
        $this->knowledgeBase->getVectorStore(),
        $this->knowledgeBase->getGenerator(),
        new OpenAIChat($this->config)
    );
    $this->client->systemMessageTemplate = $this->data->getInstructions() . '\\n\\n{context}.';
    
} 


private function AddFunctionsToBot(){
$tools = FunctionBuilder::buildFunctionInfo(new TestFunction(), 'getSpecialString');
$this->client->chat->addTool($tools);
}

}