<?php

use App\Models\User;

test('guests are redirected to the login page', function () {
    $response = $this->get(route('dashboard'));
    $response->assertRedirect(route('login'));
});

test('non-admin authenticated users cannot visit the dashboard', function () {
    $user = User::factory()->create(['is_admin' => false]);
    $this->actingAs($user);

    $response = $this->get(route('dashboard'));
    $response->assertForbidden();
});

test('admin users can visit the dashboard', function () {
    $admin = User::factory()->create(['is_admin' => true]);
    $this->actingAs($admin);

    $response = $this->get(route('dashboard'));
    $response->assertOk();
});
