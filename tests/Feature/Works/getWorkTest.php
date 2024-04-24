<?php


test('tests works index route', function () {
    $response = $this->get('/works');
    $response->assertStatus(200);
});

test('tests update work route', function () {
    $response = $this->post('/updatework');
    $response->assertStatus(200);
});

test('tests delete work route', function () {
    $response = $this->post('/deletework');
    $response->assertStatus(200);
});

test('tests create work route', function () {
    $response = $this->post('/creatework');
    $response->assertStatus(200);
});

test('tests clients index route', function () {
    $response = $this->get('/clients');
    $response->assertStatus(200);
});

test('tests update client route', function () {
    $response = $this->post('/updateclient');
    $response->assertStatus(200);
});

test('tests delete client route', function () {
    $response = $this->post('/deleteclient');
    $response->assertStatus(200);
});

test('tests create client route', function () {
    $response = $this->post('/createclient');
    $response->assertStatus(200);
});