<?php
if(!isset($_GET['botid'])) {
echo '<!-- Embed the chatbox using an iframe -->
<iframe src="/chat.php?botid=bot_66310ff24fa03" style="z-index: 9999; position: fixed; bottom: 20px; right: 20px; width: 330px; height: 400px; border: none;"></iframe>';
} else {
  echo '<!-- Embed the chatbox using an iframe -->
  <iframe src="/chat.php?botid=' . $_GET['botid'] . '" style="z-index: 9999; position: fixed; bottom: 20px; right: 20px; width: 330px; height: 400px; border: none;"></iframe>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SamiCustomGPT - A customizable ai powered chatbot for websites built in php</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #333;
      text-align: center;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    li {
      margin-bottom: 10px;
      padding-left: 30px;
      position: relative;
    }
    li::before {
      content: '\2713';
      color: #4CAF50;
      position: absolute;
      left: 0;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <h1>SamiCustomGPT - Customizable AI powered chatbot for websites</h1>
  </header>
  
  <div class="container">
    <h2>Top Pros of Using SamiCustomGPT</h2>
    <ul>
      <li>24/7 Availability for Customer Support</li>
      <li>Instant Responses to Customer Queries</li>
      <li>Personalized User Experience</li>
      <li>Increased Efficiency and Cost Savings</li>
      <li>Data Collection and Analysis for Business Insights</li>
    </ul>
  </div>
  <div class="container">You can also check out a static chatbot page <a href="/chat_page.php">here</a></div>
  <div class="container">
    <h2>Function calling in the chatbot</h2>
    <p>Try out function calling!<br><br> Tell the chatbot to run the getSpecialString function and see which string you get<br>
    the ai runs a function called getSpecialString that returns a unique string with a prefix.<br><br> This is just an example of 
    how the ai can run functions in the php code.</p>
  </div>
  <div class ="container">
  <form class="form-horizontal" method="POST" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Create a Custom GPT</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="botTitle">Bot Name</label>  
  <div class="col-md-4">
  <input id="botTitle" name="botTitle" type="text" placeholder="T.ex Personal Shopper" class="form-control input-md" required="">
  <span class="help-block">Title of the chatbot assistant</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="botDesc">Bot Description</label>  
  <div class="col-md-5">
  <input id="botDesc" name="botDesc" type="text" placeholder="T.ex: En personlig shopper för kunder som läser av produktlistan" class="form-control input-md">
  <span class="help-block">Brief description of the chatbot</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="botInstructions">Instructions</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="botInstructions" name="botInstructions">You are a helpful assistant and you are going to help the user find the right products </textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="fileBase">Upload knowledge base as file</label>
  <div class="col-md-4">
    <input id="fileBase" name="fileBase" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="createButton"></label>
  <div class="col-md-4">
    <button id="createButton" name="createButton" class="btn btn-primary">Create</button>
  </div>
</div>
<?php
use SamiCustomGPT\Handlers\CustomBotDataHandler;
use SamiCustomGPT\Models\CustomBotDataModel;

require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Interfaces/IFileHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Interfaces/ICustomBotClient.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Handlers/CustomBotDataHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Handlers/FileHandler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/Models/CustomBotDataModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SamiCustomGPT/chatbot/CustomBotClient.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $customgpt = new CustomBotDataModel();

  // Retrieve the form data
  $botTitle = $_POST['botTitle'];
  $botDesc = $_POST['botDesc'];
  $botInstructions = $_POST['botInstructions'];

  // Check if a file was uploaded
  if(isset($_FILES['fileBase']) && $_FILES['fileBase']['error'] === UPLOAD_ERR_OK) {
      // Retrieve uploaded file information
      $fileBase_name = $_FILES['fileBase']['name'];
      $fileBase_tmp = $_FILES['fileBase']['tmp_name'];
      $fileBase_size = $_FILES['fileBase']['size'];
      $fileBase_type = $_FILES['fileBase']['type'];

      // Move the uploaded file to a desired location
      move_uploaded_file($fileBase_tmp, 'userfiles/' . $fileBase_name);
      
      // Set file information in the model
      $fileArray = [
        '/userfiles/' . $fileBase_name
      ];
      $customgpt->setFiles($fileArray);
  } else {
      // If no file was uploaded, set an empty array for files
      $customgpt->setFiles([]);
  }

  // Set other form data in the model
  $customgpt->setTitle($botTitle);
  $customgpt->setDesc($botDesc);
  $customgpt->setInstructions($botInstructions);

  // Process the form data as needed
  CustomBotDataHandler::createbotFile($customgpt);
  echo '<span style="color:green;">' . 'Bot has been created, embed it using the ID:' . $customgpt->getId() . '</span><br>';
  echo 'Embed code: <br>';
  echo '<code>&lt;iframe src="/chat.php?botid=' . $customgpt->getId() . '" style="position: fixed; bottom: 20px; right: 20px; width: 330px; height: 400px; border: none;"&gt;&lt;/iframe&gt;</code>';

}
?>

</fieldset>
</form>
</div>
</body>
</html>
