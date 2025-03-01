<?php

use App\Services\MainOperations;

test('Verify test cases for generate hash function in MainOperations', function () {    
    expect(strlen(MainOperations::generateHash()))->toEqual(32);
    expect(strlen(MainOperations::generateHash(16)))->toEqual(16);
    expect(strlen(MainOperations::generateHash(94)))->toEqual(94);
    
    expect(MainOperations::generateHash(94))->toBeString('Generate Hash is not generating string in this case');
});
