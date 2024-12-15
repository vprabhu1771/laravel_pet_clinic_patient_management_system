<?php

namespace App\Enums;


enum Gender: String 
{
    case MALE = 'Male';
    
    case FEMALE = 'Female';    

    public static function getValues(): array
    {
        return array_column(Gender::cases(), 'value');
    }

    public static function getKeyValues(): array
    {
        return array_column(Gender::cases(), 'value', 'key');
    }
}