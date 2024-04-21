<?php 
/* This handler class handles the file logic and the process for when a file is attached to the custom bot. 
/ For now this uses memory vector storage, more options will be implemented soon. */
namespace SamiCustomGPT\Handlers;
use Exception;
use LLPhant\Embeddings\DataReader\FileDataReader;
use LLPhant\Embeddings\DocumentSplitter\DocumentSplitter;
use LLPhant\Embeddings\EmbeddingGenerator\OpenAI\OpenAI3LargeEmbeddingGenerator;
use LLPhant\Embeddings\EmbeddingGenerator\OpenAI\OpenAI3SmallEmbeddingGenerator;
use LLPhant\Embeddings\VectorStores\Memory\MemoryVectorStore;
use LLPhant\OpenAIConfig;
use SamiCustomGPT\Interfaces\IFileHandler;
class FileHandler implements IFileHandler {

    public $vectorStorage;
    public $generator;
    
    private OpenAIConfig $config;

    function __construct(OpenAIConfig $config,string $generatorType = 'small'){
        $this->config = $config;
        switch($generatorType){
            case 'small': $this->generator = new OpenAI3SmallEmbeddingGenerator($config);
            case 'large': $this->generator = new OpenAI3LargeEmbeddingGenerator($config);
        }
        $this->vectorStorage = new MemoryVectorStore();
    }
    public function AttachFileToBot(string $filepath = '',int $maxlength = 500){
        /* Attaches a single file to the custom chatbot. In case the file was not found or
        /  if the filepath was empty the bot will continue without loading that particular file.
        /  In cases where no files were loaded the bot will rely on its instructions only.*/
        if($filepath == '') {return;}
        $dataReader = new FileDataReader($_SERVER['DOCUMENT_ROOT'] . $filepath);
        $documents = $dataReader->getDocuments();
        
        $splitDocuments = DocumentSplitter::splitDocuments($documents, $maxlength);
        $embeddedDocuments = $this->generator->embedDocuments($splitDocuments);    
        
        $this->vectorStorage->addDocuments($embeddedDocuments);
    }
    public function AttachAllFilesToBot(array $files = []){
        // Attaches multiple files to the custom chatbot, the filepaths has to be in array format
        foreach($files as $filePath) {
            // For each filepath in the array we run the AttachFileToBot function
            $this->AttachFileToBot($filePath); }
    }
}