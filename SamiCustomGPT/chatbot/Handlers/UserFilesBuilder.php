<?php

namespace SamiCustomGPT\Handlers;

use LLPhant\Tool\WebPageTextGetter;
use Exception;


/* This is a work in progress, this class is able to fetch data from a website and store it in embedding. 
 */class UserFilesBuilder
{

    public function __construct()
    {
        // Set internal encoding to UTF-8
        mb_internal_encoding('UTF-8');
    }

    private static function getTextFromWebsites(array $website_urls)
    {
        //TODO: Add multiple urls?
    }

    private static function getTextFromWebsite(string $url): string
    {
        $webGetter = new WebPageTextGetter();
        $text = $webGetter->getWebPageText($url);
        $formattedText = self::formatText($text);
        return $formattedText;
    }

    private static function formatText(string $text): string
    {
        // Convert the text to UTF-8 encoding
        $webtext = mb_convert_encoding($text, 'UTF-8');

        // Split the text into an array of words using regular expression
        $words = preg_split('/\s+/', $webtext, -1, PREG_SPLIT_NO_EMPTY);

        // Initialize an empty array to hold lines
        $lines = array();

        // Initialize variables for line length and maximum line length
        $currentLine = '';
        $maxLineLength = 100;

        // Iterate through each word
        foreach ($words as $word) {
            // If adding the word would exceed the maximum line length, start a new line
            if (mb_strlen($currentLine . ' ' . $word) > $maxLineLength) {
                $lines[] = $currentLine;
                $currentLine = $word;
            } else {
                // Add the word to the current line
                if ($currentLine === '') {
                    $currentLine = $word;
                } else {
                    $currentLine .= ' ' . $word;
                }
            }
        }

        // Add the last line to the lines array
        if ($currentLine !== '') {
            $lines[] = $currentLine;
        }

        // Combine lines into formatted text with line breaks
        $formattedText = implode("\n", $lines);

        return $formattedText;
    }


    public static function createVectorFileFromUrl(string $url, string $filepath): string
    {
        /* This function will get text from a web url and format it
        to then save the file, maxFileSize decides how big the file can be */

        try {
            // Check if http or https already exists in the url given
            if (strpos($url, "http://") !== false || strpos($url, "https://") !== false) {
                $data = self::getTextFromWebsite($url);
            } else {
                // Not found, use default https
                $data = self::getTextFromWebsite('https://' . $url);
            }

            $fileName = self::generateFileName();
            $completePath = $_SERVER['DOCUMENT_ROOT'] . $filepath . $fileName;
            $validateFileSize = self::validateFileSize($completePath);
            if ($validateFileSize !== false) {
                // File is under MaxFileSize
                file_put_contents($completePath, $data);
            } else {
                // File to big!
                return null;
            }

            if (file_exists($completePath)) {
                return $fileName;
            } else {
                return null;
            }
        } catch (Exception $error) {
            // Return false on error
            return null;
        }
    }

    private static function generateFileName(): string
    {
        $filetype = '.txt';
        $filename = uniqid('file_') . $filetype;
        return $filename;
    }

    private static function validateFileSize($filePath): bool
    {
        $gigabyte = 1;
        $maxFileSize = $gigabyte * pow(1024, 3);

        // Check the size of the file
        $fileSize = filesize($filePath);

        if ($fileSize !== false && $fileSize <= $maxFileSize) {
            // File size is within the limit, proceed with writing contents
            return true;
        } else {
            // File size exceeds the limit
            return false;
        }
    }
}