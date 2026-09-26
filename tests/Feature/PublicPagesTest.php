<?php

use App\Models\Event;
use App\Models\GalleryItem;
use App\Models\Post;
use App\Models\TeamMember;

test('public pages are accessible to guests', function (string $url) {
    $response = $this->get($url);
    $response->assertOk();
})->with([
    '/about',
    '/team',
    '/donate',
    '/gallery',
    '/stories',
    '/events',
]);

test('public story reader renders article', function () {
    $post = Post::factory()->create([
        'title' => 'Sample Childhood Cancer Story',
        'slug' => 'sample-childhood-cancer-story',
        'status' => 'published',
        'published_at' => now(),
    ]);

    $response = $this->get(route('stories.show', $post->slug));
    $response->assertOk()
        ->assertSee('Sample Childhood Cancer Story');
});

test('homepage and public stories list dynamically display published posts', function () {
    $post = Post::factory()->create([
        'title' => 'Breaking News on Oncology Care',
        'status' => 'published',
        'published_at' => now(),
    ]);

    $homeResponse = $this->get('/');
    $homeResponse->assertOk()->assertSee('Breaking News on Oncology Care');

    $storiesResponse = $this->get('/stories');
    $storiesResponse->assertOk()->assertSee('Breaking News on Oncology Care');
});

test('homepage and public events list dynamically display active upcoming events', function () {
    $event = Event::factory()->create([
        'title' => 'Community Awareness Day 2026',
        'event_date' => now()->addDays(7),
        'is_active' => true,
    ]);

    $homeResponse = $this->get('/');
    $homeResponse->assertOk()->assertSee('Community Awareness Day 2026');

    $eventsResponse = $this->get('/events');
    $eventsResponse->assertOk()->assertSee('Community Awareness Day 2026');
});

test('homepage dynamically displays active team members and gallery items', function () {
    TeamMember::factory()->create([
        'name' => 'Dr. Folake Adeyemi',
        'role' => 'Chief Paediatric Oncologist',
        'is_active' => true,
    ]);

    GalleryItem::factory()->create([
        'title' => 'Compassion in Pediatric Ward',
        'is_active' => true,
    ]);

    $homeResponse = $this->get('/');
    $homeResponse->assertOk()
        ->assertSee('Dr. Folake Adeyemi')
        ->assertSee('Compassion in Pediatric Ward');

    $galleryResponse = $this->get('/gallery');
    $galleryResponse->assertOk()
        ->assertSee('Compassion in Pediatric Ward');
});

test('about page and dedicated team page display team members and profile links', function () {
    $member = TeamMember::factory()->create([
        'name' => 'Dr. Kemi Adeleke',
        'slug' => 'dr-kemi-adeleke',
        'role' => 'Pediatric Support Specialist',
        'bio' => 'Championing compassionate care for families.',
        'linkedin_url' => 'https://linkedin.com/in/kemi-adeleke',
        'is_active' => true,
    ]);

    $aboutResponse = $this->get('/about');
    $aboutResponse->assertOk()
        ->assertSee('Dr. Kemi Adeleke')
        ->assertSee('Pediatric Support Specialist')
        ->assertSee(route('team.show', $member->slug));

    $teamResponse = $this->get('/team');
    $teamResponse->assertOk()
        ->assertSee('Dr. Kemi Adeleke')
        ->assertSee('Pediatric Support Specialist')
        ->assertSee('Championing compassionate care for families.')
        ->assertSee(route('team.show', $member->slug));
});

test('individual team member dedicated profile page displays full details and socials', function () {
    $member = TeamMember::factory()->create([
        'name' => 'Dr. Chinwe Obi',
        'slug' => 'dr-chinwe-obi',
        'role' => 'Oncology Research Coordinator',
        'specialty' => 'Pediatric Clinical Trials',
        'email' => 'chinwe.obi@projectcham.org',
        'linkedin_url' => 'https://linkedin.com/in/chinwe-obi',
        'twitter_url' => 'https://x.com/chinwe_obi',
        'bio' => 'Devoted to clinical protocols and supportive healthcare navigation.',
        'quote' => 'Every child deserves the highest standard of evidence-based oncology care.',
        'is_active' => true,
    ]);

    $response = $this->get(route('team.show', $member->slug));

    $response->assertOk()
        ->assertSee('Dr. Chinwe Obi')
        ->assertSee('Oncology Research Coordinator')
        ->assertSee('Pediatric Clinical Trials')
        ->assertSee('chinwe.obi@projectcham.org')
        ->assertSee('https://linkedin.com/in/chinwe-obi')
        ->assertSee('https://x.com/chinwe_obi')
        ->assertSee('Devoted to clinical protocols and supportive healthcare navigation.')
        ->assertSee('Every child deserves the highest standard of evidence-based oncology care.');
});
