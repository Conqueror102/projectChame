<?php

test('renders the Project Cham about page', function () {
    $response = $this->get(route('about'));

    $response
        ->assertViewIs('pages.about')
        ->assertSeeText('No child should face cancer without a clear path to support.')
        ->assertSeeText('No child should face cancer without hope.')
        ->assertSeeText('Support without structure limits impact.')
        ->assertSeeText('Awareness must lead to action.')
        ->assertSeeText('Support must reach the child.')
        ->assertSeeText('Impact must stay visible.')
        ->assertSeeText('Improve outcomes for children battling cancer through structured support, awareness, and access to care.')
        ->assertSeeText('A system where every child can reach the care and resources needed to survive and live fully.')
        ->assertSeeText('Compassion')
        ->assertSeeText('Structure')
        ->assertSeeText('Impact')
        ->assertSeeText('Advocacy')
        ->assertSeeText('Collaboration')
        ->assertSeeText('Structured, not one-time')
        ->assertSeeText('Every child deserves the support, care, and opportunity needed to survive and thrive.')
        ->assertSeeText('Partner with Project CHAM');
});
