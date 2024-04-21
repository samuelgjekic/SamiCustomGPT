<?php 
/* The main Chatbot Data Object */

namespace SamiCustomGPT\Models;
use SamiCustomGPT\Interfaces\ICustomBotDataModel;
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Interfaces/ICustomBotDataModel.php';

class CustomBotDataModel implements ICustomBotDataModel {

    private ?string $id;
    private?string $title;
    private ?string $description;
    private ?string $instructions;
    private ?array $files;
    

    function __construct() {
        $this->id = $this->generateId();
    }

    function getFiles() : array{
        return $this->files;
    }

    function setFiles(array $files){
        $this->files = $files ?? [];
    }

    function getInstructions() : string{
        return $this->instructions;
    }

    function setInstructions(string $instructions) {
        $this->instructions = $instructions ?? 'You are a helpful assistant.';
    }
    
    function jsonDecode($bot_json_data){
        $decoded_data = json_decode($bot_json_data);
        $this->id = $decoded_data->id ?? $this->generateId();
        $this->title = $decoded_data->title ?? null;
        $this->description = $decoded_data->description ?? null;
        $this->instructions = $decoded_data->instructions ?? null;
        $this->files = $decoded_data->files ?? [];
    }

    static function generateId(){
       $id = uniqid('bot_');
       return $id;
    }

    function getId(){
        return $this->id;
    }

    function getTitle(){
        return $this->title;
    }

    function setTitle(?string $bot_title){
        $this->title = $bot_title ?? 'Sami Custom GPT';
    }

    function getDesc(){
        return $this->description;
    }

    function setDesc(?string $description){
        $this->description = $description;
    }
}