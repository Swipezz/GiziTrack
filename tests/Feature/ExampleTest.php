<?php

test('returns a response', function () {
    $response = $this->get('/');

    // Jika route '/' redirect (302), test akan tetap lulus
    $response->assertStatus(302);
});
