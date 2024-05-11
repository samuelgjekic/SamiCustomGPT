# SamiCustomGPT: OpenAI CustomGPT with Vector Stored Knowledge Base Indexing

## Introduction

**SamiCustomGPT** is a project aimed at creating a customizable GPT chatbot with vector stored knowledge base indexing. Built using PHP, this project is a work in progress with the goal of enabling users to easily customize chatbots for various purposes, tailored to individual or organizational needs.
![samigpt](https://github.com/samuelgjekic/SamiCustomGPT/assets/41647182/a8fe0b1a-60d3-4973-b08a-8f517f607f54)

## Changelog
```
2024-05-11: Added support for session based conversation memory. Which means
the ai will now remember the conversation untill session is closed. 

2024-05-05: Added support for storing the chatbot as json
```



## Motivation

The primary motivation behind this project is to empower users to create AI chatbots without the need for extensive coding knowledge. By leveraging a custom GPT model and vector stored knowledge base indexing, users can develop chatbots that are personalized to their specific requirements. This approach opens up possibilities for applications such as personal shopping assistants for e-commerce websites, all without writing a single line of code.

## Features

- **Customizable GPT Chatbot**: SamiCustomGPT allows users to customize GPT-based chatbots according to their needs and preferences.
  
- **Vector Stored Knowledge Base Indexing**: The project incorporates vector stored knowledge base indexing, enabling efficient storage and retrieval of information.

- **Easy Integration**: Built on the [ LLPhant](https://github.com/theodo-group/LLPhant) framework and OpenAI PHP Client library, SamiCustomGPT offers seamless integration with existing systems and workflows.

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

// You can use the ID to access the bot from file
$bot_id = CustomBotDataHandler::createBotFile($bot_object);
```


Example of retrieving a bot:
```
// You can retrieve bot data using the ID
$bot_object = CustomBotDataHandler::getBotFromFile('bot_6626c59914fc3'); // Replace ID with the ID of the bot you want to retrieve
```


Example of retrieving a bot:
```
// You need to send OpenAiConfig and the bot object to initiate the client
$config = new OpenAiConfig();
$config->apiKey = 'API KEY';

$client = new CustomBotClient($bot_object,$config);

// Extra note: You can create your own filehandler and send it as parameter when creating a new client
```

Send a message and get a response:
```
$response = $client->SendMessageToBot($prompt);

echo $response;
```

## Functions

SamiCustomGPT supports functions, they are implemented and working. Thanks to LLPhants easy function calling
and handling, i have managed to make it so the ai will return the value from the function, if you want the bot
to return more you can add parameters to the function, such as $messagetouserafterfunctioncall. The bot will use
the parameter to send a message to the user after the function call, then you can simply add it to the return. 

More info and guides on the functions is coming soon. 
