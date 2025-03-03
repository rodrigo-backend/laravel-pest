<?php

use App\Http\Controllers\MainController;

describe('Expection API Tests', function () {
    test('toBeTrue method', function () {
        expect(true)->toBeTrue();
    });

    test('toBeURL method', function () {
        expect('http://localhost')->toBeUrl();
    });

    test('toBeBetween method', function () {
        expect(1)->toBeBetween(-1, 2);
    });

    test('toBeInt and = 3 method', function () {
        expect(3)
            ->toBeInt()
            ->toBe(3);
    });

    test('toBeFalsy method', function () {
        expect('')->toBeFalsy();
    });

    test('toBeTrutthy method', function () {
        expect(new stdClass())->toBeTruthy();
    });

    test('toBeNotInt and Equal Hello World', function () {
        expect('Hello World')
            ->not->toBeInt()
            ->not->toBeObject()
            ->not->toBeArray()
            ->not->toBeBool()
            ->not->toBeCallable()
            ->toEqual('Hello World');
    });

    test('toBeJson & and method', function () {
        expect('Rodrigo')
            ->toBeString()
            ->and('{"name": "Rodrigo"}')->toBeJson();
    });

    test('toHaveProperty method', function () {
        $user = new stdClass();

        $user->name = 'Rodrigo';
        $user->age = (int) '18';
        $user->cpf = '00011122233';
        
        expect($user)->toHaveProperty('cpf');
    });

    test('toHaveProperties method', function () {
        // benefit for reflection API cases
        
        $user = new stdClass();

        $user->name = 'Rodrigo';
        $user->age = (int) '18';
        $user->cpf = '00011122233';
        
        expect($user)->toHaveProperties([
            'name',
            'age',
            'cpf'
        ]);
    });
    
});
