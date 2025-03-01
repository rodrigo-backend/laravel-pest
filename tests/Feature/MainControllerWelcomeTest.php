<?php

test('MainController welcome method test if status is 200', function () {
    $response = $this->get('/');

    expect($response->status())->toEqual(200);
});
