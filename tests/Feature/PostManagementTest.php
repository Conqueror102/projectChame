<?php

use App\Livewire\Admin\Posts\Index;
use App\Livewire\Admin\Posts\PostForm;
use App\Models\Post;
use App\Models\User;
use Livewire\Livewire;

test('admin can create a story with sanitized content', function () {
    $admin = User::factory()->create(['is_admin' => true]);

    $xssAttempt = '<p>Safe intro</p><script>alert("hacked")</script><a href="javascript:steal()">Click</a>';

    Livewire::actingAs($admin)
        ->test(PostForm::class)
        ->set('title', 'Groundbreaking Research Update')
        ->set('slug', 'groundbreaking-research-update')
        ->set('excerpt', 'A quick overview of progress.')
        ->set('content', $xssAttempt)
        ->set('status', 'published')
        ->set('read_time_minutes', 4)
        ->call('save')
        ->assertRedirect(route('admin.posts.index'));

    $post = Post::where('slug', 'groundbreaking-research-update')->first();
    expect($post)->not->toBeNull()
        ->and($post->content)->not->toContain('<script>')
        ->and($post->content)->not->toContain('javascript:');
});

test('admin can toggle post publish status from index', function () {
    $admin = User::factory()->create(['is_admin' => true]);
    $post = Post::factory()->create([
        'user_id' => $admin->id,
        'status' => 'draft',
    ]);

    Livewire::actingAs($admin)
        ->test(Index::class)
        ->call('toggleStatus', $post->id);

    expect($post->fresh()->status)->toBe('published');
});
