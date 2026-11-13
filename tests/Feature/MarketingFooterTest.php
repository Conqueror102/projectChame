<?php

test('footer shows official contact details and social links', function () {
    $response = $this->get(route('about'));

    $response
        ->assertOk()
        ->assertSeeText('+234 704 249 3624')
        ->assertSee('tel:+2347042493624', false)
        ->assertSee('https://wa.me/2347042493624', false)
        ->assertSee('mailto:projectcham0123@gmail.com', false)
        ->assertSee('https://instagram.com/projectcham', false)
        ->assertSee('https://www.linkedin.com/company/projectcham', false)
        ->assertSee('https://www.facebook.com/ProjectCham', false)
        ->assertDontSee('href="#footer"', false);
});
