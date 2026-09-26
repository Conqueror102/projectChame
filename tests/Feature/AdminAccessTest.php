<?php

use App\Models\User;

test('guests are redirected from admin routes to login', function (string $route) {
    $response = $this->get(route($route));
    $response->assertRedirect(route('login'));
})->with([
    'admin.posts.index',
    'admin.events.index',
    'admin.team.index',
    'admin.gallery.index',
    'admin.donors.index',
]);

test('non-admin users are forbidden from admin routes', function (string $route) {
    $user = User::factory()->create(['is_admin' => false]);
    $this->actingAs($user);

    $response = $this->get(route($route));
    $response->assertForbidden();
})->with([
    'admin.posts.index',
    'admin.events.index',
    'admin.team.index',
    'admin.gallery.index',
    'admin.donors.index',
]);

test('admin users can access admin routes', function (string $route) {
    $admin = User::factory()->create(['is_admin' => true]);
    $this->actingAs($admin);

    $response = $this->get(route($route));
    $response->assertOk();
})->with([
    'admin.posts.index',
    'admin.events.index',
    'admin.team.index',
    'admin.gallery.index',
    'admin.donors.index',
]);

test('guests accessing /admin are redirected to login', function () {
    $response = $this->get('/admin');
    $response->assertRedirect('/dashboard');

    $followResponse = $this->get('/dashboard');
    $followResponse->assertRedirect(route('login'));
});

test('admins accessing /admin are redirected to dashboard', function () {
    $admin = User::factory()->create(['is_admin' => true]);
    $this->actingAs($admin);

    $response = $this->get('/admin');
    $response->assertRedirect('/dashboard');
});
