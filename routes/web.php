<?php

use App\Http\Controllers\Admin\MediaUploadController;
use App\Http\Controllers\Public\EventController;
use App\Http\Controllers\Public\StoryController;
use App\Http\Controllers\Public\TeamController;
use App\Livewire\Admin\Donors\Index as DonorsIndex;
use App\Livewire\Admin\Events\EventForm;
use App\Livewire\Admin\Events\Index as EventsIndex;
use App\Livewire\Admin\Gallery\GalleryItemForm;
use App\Livewire\Admin\Gallery\Index as GalleryIndex;
use App\Livewire\Admin\Posts\Index as PostsIndex;
use App\Livewire\Admin\Posts\PostForm;
use App\Livewire\Admin\Reviews\Index as ReviewsIndex;
use App\Livewire\Admin\Reviews\ReviewForm;
use App\Livewire\Admin\Team\Index as TeamIndex;
use App\Livewire\Admin\Team\TeamMemberForm;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Marketing & Information Routes
|--------------------------------------------------------------------------
*/
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/team/{slug}', [TeamController::class, 'show'])->name('team.show');
Route::view('/programs', 'pages.programs')->name('programs');
Route::view('/donate', 'pages.donate')->name('donate');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::redirect('/admin', '/dashboard')->name('admin');

Route::get('/stories', [StoryController::class, 'index'])->name('stories.index');
Route::get('/stories/{slug}', [StoryController::class, 'show'])->name('stories.show');

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');

/*
|--------------------------------------------------------------------------
| Authenticated Dashboard & Settings
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Routes
    |--------------------------------------------------------------------------
    */
    Route::prefix('admin')->name('admin.')->group(function () {
        // Blog / Stories
        Route::livewire('posts', PostsIndex::class)->name('posts.index');
        Route::livewire('posts/create', PostForm::class)->name('posts.create');
        Route::livewire('posts/{post}/edit', PostForm::class)->name('posts.edit');

        // Events
        Route::livewire('events', EventsIndex::class)->name('events.index');
        Route::livewire('events/create', EventForm::class)->name('events.create');
        Route::livewire('events/{event}/edit', EventForm::class)->name('events.edit');

        // Team
        Route::livewire('team', TeamIndex::class)->name('team.index');
        Route::livewire('team/create', TeamMemberForm::class)->name('team.create');
        Route::livewire('team/{member}/edit', TeamMemberForm::class)->name('team.edit');

        // Gallery
        Route::livewire('gallery', GalleryIndex::class)->name('gallery.index');
        Route::livewire('gallery/create', GalleryItemForm::class)->name('gallery.create');
        Route::livewire('gallery/{item}/edit', GalleryItemForm::class)->name('gallery.edit');

        // Donors Outreach CRM
        Route::livewire('donors', DonorsIndex::class)->name('donors.index');

        // Reviews / Family Voices Testimonials
        Route::livewire('reviews', ReviewsIndex::class)->name('reviews.index');
        Route::livewire('reviews/create', ReviewForm::class)->name('reviews.create');
        Route::livewire('reviews/{review}/edit', ReviewForm::class)->name('reviews.edit');

        // Media upload for TipTap editor
        Route::post('media/upload', [MediaUploadController::class, 'upload'])->name('media.upload');
    });
});

require __DIR__.'/settings.php';
