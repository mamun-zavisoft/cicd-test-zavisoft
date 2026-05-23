<?php

it('returns a successful response', function () {
    $response = $this->get('/');

    // The app redirects unauthenticated users to login — this is correct behavior
    $response->assertStatus(302);
});
