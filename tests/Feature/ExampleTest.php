<?php

test('returns a successful response', function () {
    $response = $this->get(route('home'));

    $response->assertStatus(200);
});

test('home page shows the portfolio content', function () {
    $response = $this->get(route('home'));

    $response->assertSee(config('portfolio.name'))
        ->assertSee(config('portfolio.role'));

    foreach (config('portfolio.projects') as $project) {
        $response->assertSee($project['name']);
    }
});
