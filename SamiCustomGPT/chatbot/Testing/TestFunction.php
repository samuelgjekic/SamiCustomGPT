<?php
namespace SamiCustomGPT\Testing;
class TestFunction{

    /*This function returns special string to user */
    public function getSpecialString() : string{
        $testString = uniqid('SamiCustomGpt_');
        return $testString;
    }

}