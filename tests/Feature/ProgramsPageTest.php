<?php

test('renders the Project Cham programs page', function () {
    $response = $this->get(route('programs'));

    $response
        ->assertViewIs('pages.programs')
        ->assertSeeText('Four programs. One clearer path through care.')
        ->assertSeeText('Child Support Program')
        ->assertSeeText('Improved treatment support')
        ->assertSeeText('Reduced burden on families')
        ->assertSeeText('Awareness & Education Campaigns')
        ->assertSeeText('Increased awareness')
        ->assertSeeText('Earlier diagnosis')
        ->assertSeeText('Informed communities')
        ->assertSeeText('Family Support System')
        ->assertSeeText('Stronger family stability')
        ->assertSeeText('Reduced emotional strain')
        ->assertSeeText('Better care coordination')
        ->assertSeeText('Partnerships & Outreach')
        ->assertSeeText('Expanded reach')
        ->assertSeeText('Increased access to resources')
        ->assertSeeText('Sustainable impact')
        ->assertSeeText('From awareness to care, every program moves the child forward.');
});
