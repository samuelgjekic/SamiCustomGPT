<?php 
/* This is the handler that has all the custom bot creation,editing,deleting etc logic. */
namespace SamiCustomGPT\Handlers;
use Exception;
use ReflectionClass;
use ReflectionProperty;
use SamiCustomGPT\Interfaces\ICustomBotDataModel;
use SamiCustomGPT\Models\CustomBotDataModel;

class CustomBotDataHandler {


    public static function createJsonData(ICustomBotDataModel $bot_data){
    $encoded_json = json_encode($bot_data);
    return $encoded_json;
    }

    public static function insertBotToDb(ICustomBotDataModel $bot_data){
    /* Function to json serialize the CustomBotDataModel and store it in MySQLI Database. 
       NOTE: ALL PROPERTIES OF THE ICustomBotDataModel must be set to private for this to work atm. */

    // Access private properties using reflection
    $reflection = new ReflectionClass($bot_data);
    $properties = $reflection->getProperties(ReflectionProperty::IS_PRIVATE);
    $serialized_data = [];

    // Serialize each property
    foreach ($properties as $property) {
        $property->setAccessible(true); // Allow access to private property
        $property_name = $property->getName();
        $property_value = $property->getValue($bot_data);
        $serialized_data[$property_name] = $property_value;
    }

    // Serialize the serialized data array
    $bot_data_serialized = json_encode($serialized_data);
        
        // Establish connection to MySQLI Database
        $dbconn = mysqli_connect('localhost','admin','password','testdb');
        // Turn of autocommit as we are going to use database transactions
        $dbconn->autocommit(FALSE);

        // Begin transaction
        mysqli_begin_transaction($dbconn);

        try{
        // Prepare the statement
        $query = $dbconn->prepare('INSERT INTO chatbots(bot_id,user_id,chatbot_data_object) VALUES (?,?,?)');
        $user_id_temporary = 'TEMP_ID';
        $bot_id = $bot_data->getId();
        $query->bind_param('sss',$bot_id,$user_id_temporary,$bot_data_serialized);

        // Execute and commit the transaction
        $query->execute();
        mysqli_commit($dbconn);
        } catch (Exception $error){
            // Rollback transaction on error
            mysqli_rollback($dbconn);
            throw $error;
        } finally {
            $query->close();
            $dbconn->close();
        }

    }
    public static function getBotJsonDataFromDb($bot_id){
        /* Function to fetch the json from the database and create the bot data model object. */

        // Establish connection to MySQLI Database
        $dbconn = mysqli_connect('localhost','admin','password','testdb');
        // Turn of autocommit as we are going to use database transactions
        $dbconn->autocommit(FALSE);

        // Begin transaction
        mysqli_begin_transaction($dbconn);

        try{
        // Prepare the statement
        $query = $dbconn->prepare('SELECT chatbot_data_object FROM chatbots WHERE bot_id = ?');
        $query->bind_param('s',$bot_id);

        // Execute and commit the transaction
        $query->execute();

        // Bind the result to the chatbot_data object
        $query->bind_result($bot_data);
        // Fetch result
        $query->store_result();
        $query->fetch();

        mysqli_commit($dbconn);

        } catch (Exception $error){
            // Rollback transaction on error
            mysqli_rollback($dbconn);
            throw $error;
        } finally {
            $query->close();
            $dbconn->close();
        }
        $bot_data_object = new CustomBotDataModel();
        $bot_data_object->jsonDecode($bot_data);
        return $bot_data_object;
    }
    
    public static function createBot(array $bot_data,bool $insert_to_db){
    /*  Creates a custom bot data object and returns it, if bool $insert_to_db is
        set to TRUE the custom bot will also be saved to the database as json  */
    $bot_data_object = new CustomBotDataModel();
    $bot_data_object->setTitle($bot_data['title']);
    $bot_data_object->setDesc($bot_data['description']);
    $bot_data_object->setInstructions($bot_data['instructions']) ?? 'You are a helpful assistant';
    $bot_data_object->setFiles($bot_data['files']);
    if($insert_to_db == TRUE) {
       self::insertBotToDb($bot_data_object);
    }
    return $bot_data_object;
    }

    public static function getBot(ICustomBotDataModel $bot_data_object,$encoded_json_data){
        // Fetch bot using json data.
    $bot_data_object = new CustomBotDataModel();
    $bot_data_object->jsonDecode($encoded_json_data);
    return $bot_data_object;
    }

    public static function createBotFile(ICustomBotDataModel $bot) : string
    {
     // Access private properties using reflection
     $reflection = new ReflectionClass($bot);
     $properties = $reflection->getProperties(ReflectionProperty::IS_PRIVATE);
     $serialized_data = [];
 
     // Serialize each property
     foreach ($properties as $property) {
         $property->setAccessible(true); // Allow access to private property
         $property_name = $property->getName();
         $property_value = $property->getValue($bot);
         $serialized_data[$property_name] = $property_value;
     }
 
     // Serialize the serialized data array
     $bot_data_serialized = json_encode($serialized_data);
      // Save JSON data to file
      file_put_contents('userfiles/'.$bot->getId() . '.json', $bot_data_serialized);
      return $bot->getId();
    }

    public static function getBotFromFile($filename)
    {
    $jsonData = file_get_contents('userfiles/'. $filename . '.json');
    $bot = new CustomBotDataModel();
    $bot->jsonDecode($jsonData);
    return $bot;
    }

}