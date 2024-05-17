<?php
/* Audio module that uses the OpenAI PHP client text to speech features */
// TODO: MAX CHARACTERS 4096, 5 Minutes
namespace AiTools\Audio;
use AiTools\Audio\Enums\AudioModel;
use AiTools\Audio\Enums\VoiceModel;
use OpenAI;
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/SamiCustomGPT/vendor/autoload.php';


class AudioGenerator
{

    public $client;

    public function __construct($apiKey)
    {
    $this->client = OpenAI::client($apiKey);
    }


    public function generateTextToSpeech(string $text, AudioModel $model, VoiceModel $voiceModel): string
    {
        $audioContent = $this->client->audio()->speech([
            'model' => $model->getModelName(),
            'input' => $text,
            'voice' => $voiceModel->getModelName(),
        ]); // audio file content as base64 string
        
        /* // Decode the base64-encoded audio content
        $decodedAudio = base64_decode($audioContent); */
    
        // Return the decoded audio content
        return $audioContent;
    }
}