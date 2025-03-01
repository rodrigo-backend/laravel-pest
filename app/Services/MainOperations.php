<?php
namespace App\Services;

use Exception;
use LengthException;

class MainOperations
{
    public static function generateRandomNumber($min = 1, $max = 1000)
    {
        if($min >= $max){
            throw new Exception('Min and Max equal or one greater or lesser than other');
        }

        if($max >= 10000){
            throw new LengthException('Maximum number bounds overtook!');
        }
        
        if($min <= -10000){
            throw new LengthException('Minimum number bounds overtook!');
        }

        return random_int($min, $max);
    }

    public static function generateHash($numberChars = 32)
    {
        return bin2hex(random_bytes($numberChars / 2));
    }
}
