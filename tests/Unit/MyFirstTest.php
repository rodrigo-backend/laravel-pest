<?php

test('example', function () {
    // variable true
    // $a = true;
    
    // variable false
    $a = false;
    expect($a)->toBeTrue();
});
