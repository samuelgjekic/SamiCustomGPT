<?php 
namespace SamiCustomGPT\Interfaces;

/* This is the main interface for the SamiCustomGPT file handler, the functions below are required for the rest of the modules to
be able to run without error however you can still customize each function to fit your needs easily by implementing this interface to your
own file handler.
/
/
/ Remember that this is built on the OpenAI PHP Client and Llphants ai framework, so some functions require them aswell, for example:
/ VetorStorage and EmbeddingGenerator is both classes from LLphants library and they need to be implemented into the Filehandler, thats why
/ we have the getVectorStore and getGenerator functions so we can retrieve them when needed.

The attachAllFilesToBot is required for the attachment of files when the bot is starting up, currently this is multiple filepaths stored as array */

interface IKnowledgeBaseHandler
{
    function AttachAllFilesToBot($files); 
    function getVectorStore(); 

    function getGenerator(); 
}