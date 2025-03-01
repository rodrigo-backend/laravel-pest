<?php

use App\Http\Controllers\MainController;
use Illuminate\View\View;

test('expect MainController returns string from welcome', function () {
    $mainController = new MainController();

    expect($mainController->welcome())->toBeString('MainController Home returns a string');
    expect($mainController->welcome())->toEqual('Hello World');
});
