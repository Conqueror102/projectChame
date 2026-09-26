<?php

use App\Livewire\Admin\Reviews\Index as ReviewsIndex;
use App\Livewire\Admin\Reviews\ReviewForm;
use App\Models\Review;
use App\Models\User;
use Livewire\Livewire;

test('guests are redirected from review management routes', function () {
    $response = $this->get(route('admin.reviews.index'));
    $response->assertRedirect(route('login'));
});

test('admin can view reviews list', function () {
    $admin = User::factory()->create(['is_admin' => true]);
    $review = Review::factory()->create(['author_name' => 'Alhaji Musa']);

    $this->actingAs($admin)
        ->get(route('admin.reviews.index'))
        ->assertOk()
        ->assertSee('Alhaji Musa');
});

test('admin can create a review via Livewire', function () {
    $admin = User::factory()->create(['is_admin' => true]);

    Livewire::actingAs($admin)
        ->test(ReviewForm::class)
        ->set('author_name', 'Mrs. Amina Bello')
        ->set('role', 'Caregiver Parent')
        ->set('content', 'Project Cham provided chemotherapy assistance and emotional guidance when we were desperate.')
        ->set('meta', 'Abuja, Nigeria')
        ->set('rating', 5)
        ->set('order', 1)
        ->set('is_active', true)
        ->call('save')
        ->assertRedirect(route('admin.reviews.index'));

    expect(Review::where('author_name', 'Mrs. Amina Bello')->exists())->toBeTrue();
});

test('admin can edit an existing review', function () {
    $admin = User::factory()->create(['is_admin' => true]);
    $review = Review::factory()->create([
        'author_name' => 'Original Author',
        'content' => 'Old content quote.',
    ]);

    Livewire::actingAs($admin)
        ->test(ReviewForm::class, ['review' => $review])
        ->set('author_name', 'Updated Author')
        ->set('content', 'Updated testimonial quote.')
        ->call('save')
        ->assertRedirect(route('admin.reviews.index'));

    $review->refresh();
    expect($review->author_name)->toBe('Updated Author')
        ->and($review->content)->toBe('Updated testimonial quote.');
});

test('admin can toggle review status and delete review', function () {
    $admin = User::factory()->create(['is_admin' => true]);
    $review = Review::factory()->create(['is_active' => true]);

    Livewire::actingAs($admin)
        ->test(ReviewsIndex::class)
        ->call('toggleActive', $review->id);

    $review->refresh();
    expect($review->is_active)->toBeFalse();

    Livewire::actingAs($admin)
        ->test(ReviewsIndex::class)
        ->call('confirmDelete', $review->id)
        ->assertDispatched('modal-show', name: 'delete-review')
        ->call('deleteReview');

    expect(Review::find($review->id))->toBeNull();
});

test('homepage dynamically displays active reviews', function () {
    $review = Review::factory()->create([
        'author_name' => 'Special Test Parent',
        'content' => 'Unique quote displayed on homepage carousel.',
        'is_active' => true,
    ]);

    $response = $this->get('/');
    $response->assertOk()
        ->assertSee('Special Test Parent')
        ->assertSee('Unique quote displayed on homepage carousel.');
});
