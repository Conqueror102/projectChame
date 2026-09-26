<?php

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

test('guests cannot upload media', function () {
    $response = $this->postJson(route('admin.media.upload'), [
        'image' => UploadedFile::fake()->image('photo.jpg'),
    ]);

    $response->assertUnauthorized();
});

test('non-admin users cannot upload media', function () {
    $user = User::factory()->create(['is_admin' => false]);
    $this->actingAs($user);

    $response = $this->postJson(route('admin.media.upload'), [
        'image' => UploadedFile::fake()->image('photo.jpg'),
    ]);

    $response->assertForbidden();
});

test('admin can upload valid image securely', function () {
    Storage::fake('public');

    $admin = User::factory()->create(['is_admin' => true]);
    $this->actingAs($admin);

    $response = $this->postJson(route('admin.media.upload'), [
        'image' => UploadedFile::fake()->image('story-photo.jpg', 800, 600),
    ]);

    $response->assertOk()
        ->assertJsonStructure(['url', 'path', 'name']);

    $path = $response->json('path');
    Storage::disk('public')->assertExists($path);
});

test('upload rejects non-image files', function () {
    Storage::fake('public');

    $admin = User::factory()->create(['is_admin' => true]);
    $this->actingAs($admin);

    $response = $this->postJson(route('admin.media.upload'), [
        'image' => UploadedFile::fake()->create('malicious.php', 100, 'application/x-php'),
    ]);

    $response->assertStatus(422);
});

test('upload rejects svg files for security', function () {
    Storage::fake('public');

    $admin = User::factory()->create(['is_admin' => true]);
    $this->actingAs($admin);

    $svgContent = '<svg xmlns="http://www.w3.org/2000/svg"><script>alert("xss")</script></svg>';
    $response = $this->postJson(route('admin.media.upload'), [
        'image' => UploadedFile::fake()->createWithContent('vector.svg', $svgContent),
    ]);

    $response->assertStatus(422);
});
