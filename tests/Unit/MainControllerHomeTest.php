<?php

use App\Http\Controllers\MainController;
use Illuminate\View\View;

test('expect MainController return view', function () {
    $mainController = new MainController();

    expect($mainController->home())->toBeString('MainController Home returns a string');
    expect($mainController->home())->toEqual('Hello World');
});
