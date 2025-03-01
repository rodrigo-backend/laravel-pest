<?php

it('tests the welcome page', function () {
    $response = $this->get('/');

    expect($response->status())->toEqual(200);;
});
