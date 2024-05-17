<?php

namespace AiTools\Audio\Enums;

enum VoiceModel: string
{
   case alloy = 'alloy';
   case Echo = 'echo';
   case Fable = 'fable';
   case Onyx = 'onyx';
   case Nova = 'nova';
   case Shimmer = 'shimmer';


   public function getModelName(): string
   {
       return match ($this) {
           VoiceModel::alloy => 'alloy',
           VoiceModel::Echo => 'echo',
           VoiceModel::Fable => 'fable',
           VoiceModel::Onyx => 'onyx',
           VoiceModel::Nova => 'nova',
           VoiceModel::Shimmer => 'shimmer',
       };
   }
}
