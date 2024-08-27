<?php

declare(strict_types = 1);

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    $response = $this->post('/register', [
        'name'                  => 'Test User',
        'email'                 => 'test@example.com',
        'password'              => 'password',
        'password_confirmation' => 'password',
        'phone'                 => '(12) 34567-8901',
        'address'               => '123 Test St',
        'city'                  => 'Test City',
        'state'                 => 'TS',
        'zipcode'               => '12345-678',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
});
