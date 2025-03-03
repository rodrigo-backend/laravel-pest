<?php

beforeEach(function () {
    $this->object                   = new stdClass();
    $this->object->name             = 'Cadeira';
    $this->object->representation2d = '3 lines, 2 vertical, one is greater than other and 1 horizontal connecting the middle of the verticals longest line to the smallest line';
});

describe('Hooks', function () {
    test("test if it's a stdClass", function(){
        expect($this->object)
        ->toBeInstanceOf(stdClass::class);
        
    });
    
    test("test if it's a chair", function(){
        expect($this->object->name)
        ->toBeString('Não é uma cadeira')
        ->toBe('Cadeira');
    });
    
    test("test if object description is greater than 20", function(){
        
        expect(strlen($this->object->representation2d))
        ->toBeInt()
        ->toBeGreaterThan(20);
    });
});
// afterEach(function(){
//     unset($this->object);
// });