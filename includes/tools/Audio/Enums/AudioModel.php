<?php

namespace AiTools\Audio\Enums;

enum AudioModel: string
{
   case standard = 'tts-1';

   case hd = 'tts-1-hd';

   public function getModelName(): string
   {
       return match ($this) {
           AudioModel::standard => 'tts-1',
           AudioModel::hd => 'tts-1-hd',
       };
   }
}
