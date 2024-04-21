<?php
/* The blueprint used for the custom bot client
/  To add more data or create your own model simply implement this
/  interface in your custom model */
namespace SamiCustomGPT\Interfaces;
use LLPhant\OpenAIConfig;

interface ICustomBotClient{
    
    public function __construct(ICustomBotDataModel $data,OpenAIConfig $config);
    public function SendMessageToBot($content) : string;

}