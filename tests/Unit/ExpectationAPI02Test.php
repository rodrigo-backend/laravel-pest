<?php

describe('Expection API Modifiers', function () {

    test('and modifier', function () {
        $number = 12;

        $array = [$number, $number++, $number + 2];

        expect($number)
        ->toBeInt()
        ->and($array)->toBeArray();
    });

    test('sequence modifier', function () {
        $number = 12;
        
        $array = [$number, ++$number, $number + 2];

        expect($array)
        ->sequence(
            fn($value) => $value->toBeInt()->toBe(12),
            fn($value) => $value->toBeInt()->toBe(13),
            fn($value) => $value->toBeInt()->toBe(15)
        );
    });
    
    test('dd modifier', function () {
        $value = ['rodrigo', 'maria', 'joão'];
        $value = ['rodrigo', 'maria', 'joão'];
        // expect($value)->dd();
        // expect($value)
        // ->toBeArray()->dd($value);
        expect($value)
        ->toBeArray();
    });

    test('toBeIn for or simulation', function(){
        
        expect(1)->toBeIn([(int) '1', 3, 5]);
    });
    
    test('json modifier', function(){
        
        expect('{"name": "Rodrigo"}')->json();
    });
});
