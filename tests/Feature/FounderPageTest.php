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
