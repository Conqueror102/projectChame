<?php

test('renders the founder story page', function () {
    $response = $this->get(route('founder'));

    $response
        ->assertOk()
        ->assertViewIs('pages.founder')
        ->assertSeeText('The Story Behind')
        ->assertSeeText('Modupe Olusoga')
        ->assertSeeText('On October 23, 2022, I took that step and founded Project CHAM (Child Health and Mortality).')
        ->assertSee('project-cham-founder-modupe-olusoga', false);
});

test('about page links to the founder story', function () {
    $this->get(route('about'))->assertSee(route('founder'), false);
});

test('founder story is split into six navigable chapters', function () {
    $response = $this->get(route('founder'));

    $response->assertSeeInOrder([
        'The hospital',
        'The questions that stayed',
        'A love for children',
        'The first step',
        '100+ children later',
        'What if more of us acted?',
    ]);

    foreach (range(1, 6) as $chapter) {
        $response->assertSee('href="#founder-chapter-'.$chapter.'"', false)
            ->assertSee('id="founder-chapter-'.$chapter.'"', false);
    }
});

test('founder story keeps every question as its own card', function () {
    $this->get(route('founder'))
        ->assertSeeText('Must I have all the resources before I begin?')
        ->assertSeeText('How many children are diagnosed too late because the early warning signs are missed?')
        ->assertSeeText('Did they recover?')
        ->assertSeeText('Because some of the bravest fighters I know are children, and', false);
});
