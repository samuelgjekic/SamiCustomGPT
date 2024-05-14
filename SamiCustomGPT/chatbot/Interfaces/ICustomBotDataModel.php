<?php
/* The blueprint used for the custom bot data model
/  To add more data or create your own model simply implement this
/  interface in your custom model */

namespace SamiCustomGPT\Interfaces;

interface ICustomBotDataModel {
/* The data model needs to have serialize and unserialize for the database storage
/  to work without modification, it also needs a method for getting instructions
/  as the custom bot cant be started without the instructions.  */

    public function getInstructions();

    public function getFiles();

    public function getId(); // Unique Id of the bot

    public function jsonDecode($bot_json_data); // Function to turn decode values from encoded json and set the values to the custom bot data object



}