<?php

namespace App;

class Tool
{
    public static function unique(array $array): array
    {
        return $array = array_keys(
            array_flip($array)
        );
    }
    public static function email($original)
    {
        return (bool)filter_var($original, FILTER_VALIDATE_EMAIL);
    }
}
