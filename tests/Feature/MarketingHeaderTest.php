<?php

test('public header does not show a sign in link to guests', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertDontSeeText('Sign in');
});

test('login page is still reachable directly', function () {
    $this->get(route('login'))->assertOk();
});
