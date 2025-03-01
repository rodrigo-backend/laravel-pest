<?php

use App\Services\MainOperations;

describe('MainOperations parseMethod function', function () {
    test('test the GET method', function() {
        $result = MainOperations::parseMethod('get');
    
        expect($result)->toBeArray();
        expect($result['method'])->toBeString("Method {$result['method']} is not a string");
    });
    test('test the POST method', function() {
        $result = MainOperations::parseMethod('POST');
    
        expect($result)->toBeArray();
        expect($result['method'])->toBeString("Method {$result['method']} is not a string");
    });
    test('test the DELETE method', function() {
        $result = MainOperations::parseMethod('Delete');
    
        expect($result)->toBeArray();
        expect($result['method'])->toBeString("Method {$result['method']} is not a string");
    });
    test('test the PUT method', function() {
        $result = MainOperations::parseMethod('PUT');
    
        expect($result)->toBeArray();
        expect($result['method'])->toBeString("Method {$result['method']} is not a string");
    });
});

