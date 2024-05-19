# SamiCustomGPT: OpenAI CustomGPT with Vector Stored Knowledge Base Indexing

## Introduction

**SamiCustomGPT** is a project aimed at creating a customizable GPT chatbot with vector stored knowledge base indexing. Built using PHP, this project is a work in progress with the goal of enabling users to easily customize chatbots for various purposes, tailored to individual or organizational needs.

![samicustomgpt](https://github.com/samuelgjekic/SamiCustomGPT/assets/41647182/db042857-870c-4765-8832-e2b89823022b)

## Demo
You can check out the chatbot in action [ Here](https://samicustomgpt.bredfy.com)
And you can also check out DinAI, a swedish AI website that has integrated SamiCustomGPT as a static chatbot on their website You can check out the chatbot in action [ Here](https://dinai.se)


## Changelog
```
1.0.6: Can now fetch and format knowledge base files using web URLs

1.0.5: 
*Animated the chatbot and added appearance upgrades.
*Added support for fetching data from URLs.

1.0.4: Enhanced the Chatbox design, now animated avatar, needs to be clicked to
show the chat.

1.0.3: Added support for session based conversation memory. Which means
the ai will now remember the conversation untill session is closed. 

1.0.2: Added support for storing the chatbot as json
```



## Motivation

The primary motivation behind this project is to empower users to create AI chatbots without the need for extensive coding knowledge. By leveraging a custom GPT model and vector stored knowledge base indexing, users can develop chatbots that are personalized to their specific requirements. This approach opens up possibilities for applications such as personal shopping assistants for e-commerce websites, all without writing a single line of code.

## Features

- **Customizable GPT Chatbot**: SamiCustomGPT allows users to customize GPT-based chatbots according to their needs and preferences.
  
- **Vector Stored Knowledge Base Indexing**: The project incorporates vector stored knowledge base indexing, enabling efficient storage and retrieval of information.

- **Easy Integration**: Built on the [ LLPhant](https://github.com/theodo-group/LLPhant) framework and OpenAI PHP Client library, SamiCustomGPT offers seamless integration with existing systems and workflows.

- **Session based Conversation Memory**: SamiCustomGPT has access to the whole conversation during a session, which gives it the possibility to learn and get to know more about the user and have deeper conversations.

-  **Knowledgebase from URLs**: With SamiCustomGPT you can easily fetch knowledgebase data from web URLs, such as your own website, the chatbot will use this data to answer the users questions in a better way.



## Getting Started

To get started with SamiCustomGPT, clone the repository to an empty folder using the following command:


git clone https://github.com/samuelgjekic/SamiCustomGPT.git .

## Quick Examples

Its easy to create custom bots and store them as json 

Example of creating a bot:
```
// You can set all the values easy to the custom bot data model
$bot_object = new CustomBotDataModel();
$bot_object->setTitle('My bot title');
$bot_object->setDesc('Bot description');
$bot_object->setInstructions('You are a shop assistant, use the product list to help customers find products');
```
Example fetching knowledgebase data from web URLs:
```
/*  Will create a file from URL, AI will use the file to answer question, then delete the file. 
 This can be changed to not delete the file, by simply having the vectorFile creation done somewhere else in the project */

$filename = '/' . KnowledgeBaseBuilder::createVectorFileFromUrl('https://samicustomgpt.bredfy.com/','/');
$bot_files = [$filename];
$bot_model->setFiles($bot_files);
$bot_model->setTitle('SamiCustomGPT'); 

// Or you can create a JSON file with the bot data:

// You can use the ID to access the bot from file
$bot_id = CustomBotDataHandler::createBotFile($bot_object);
```


Example of retrieving a bot from file:
```
// You can retrieve bot data using the ID
$bot_object = CustomBotDataHandler::getBotFromFile('bot_6626c59914fc3'); // Replace ID with the ID of the bot you want to retrieve
```


Example of creating the gpt client:
```
// You need to send OpenAiConfig and the bot object to initiate the client
$config = new OpenAiConfig();
$config->apiKey = 'API KEY'; // Remove line to fetch OPENAI_API_KEY from env variables

$client = new CustomBotClient($bot_object,$config);

// Extra note: You can create your own knowledgebasehandler and send it as parameter when creating a new client
```

Send a message and get a response:
```
$response = $client->SendMessageToBot($prompt);

echo $response;
```


Send conversation and get a response based on the conversation(ai memory):
```
$response = $client->SendConversationToBot($prompt);

echo $response;
```

## Functions

SamiCustomGPT supports functions, they are implemented and working. Thanks to LLPhants easy function calling
and handling, i have managed to make it so the ai will return the value from the function, if you want the bot
to return more you can add parameters to the function, such as $messagetouserafterfunctioncall. The bot will use
the parameter to send a message to the user after the function call, then you can simply add it to the return. 

More info and guides on the functions is coming soon. 
