<?php

use App\Services\MainOperations;

test('Verify test cases of random number function in MainOperations class', function () {
    expect(MainOperations::generateRandomNumber())->toBeInt('Value is not type int!');
    expect(MainOperations::generateRandomNumber(-1, 1000))->toBeInt('Value is not type int!');
});
