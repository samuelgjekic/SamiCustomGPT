<?php 

namespace SamiCustomGPT\Interfaces;

interface ICustomBotDataHandler {

    public static function getBot(ICustomBotDataModel $bot_data_object,$encoded_json_data);
}

