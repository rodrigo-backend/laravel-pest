<?php
namespace App\Services;

use BadMethodCallException;
use Exception;
use LengthException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

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

    public static function parseMethod(string $method){
        $result = [
            'method' => null,
        ];
        switch($method){
            case 'GET': 
            case 'get': 
            case 'Get': 
                $result['description'] = 'Returns info from the server.';
                break;
            case 'POST': 
            case 'post': 
            case 'Post': 
                $result['description'] = 'Create a new resource on the server.';
                break;
            case 'DELETE': 
            case 'delete': 
            case 'Delete': 
                $result['description'] = 'Delete a resource on the server.';
                break;

            case 'PUT': 
            case 'put': 
            case 'Put': 
                $result['description'] = 'Update a resource on the server.';
                break;
            
            default: 
                throw new BadMethodCallException('Method not allowed');
        }
        $result['method'] = $method;

        return $result;
    }
}
