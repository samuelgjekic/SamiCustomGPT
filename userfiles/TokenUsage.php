<?php
/* Note that CreateStreamedResponse does not contain any usage parameter for now. */ 

namespace LLPhant\Chat;

use OpenAI\Responses\Chat\CreateResponse;

class TokenUsage {
    public ?string $Prompt_Tokens = '';
    
    public ?string $Completion_Tokens = '';
    
    public ?string $Total_Tokens = '';


    public function logLastUsage(CreateResponse $answer) : void {
        $this->Prompt_Tokens = $answer->usage->promptTokens;
        $this->Completion_Tokens = $answer->usage->completionTokens;
        $this->Total_Tokens = $answer->usage->totalTokens;
    }

    public function logLastUsageToArray(CreateResponse $answer) : array {
       $lastUsage = $answer->usage->toArray();
       return $lastUsage;
    }

}