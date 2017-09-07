<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class ExampleTest extends TestCase
{

    use DatabaseMigrations;

    /** @test */
    public function test_we_can_see_wells()
    {
        $response = $this->get('/wells');

        $response->assertStatus(200);
    }

    public function test_we_can_create_wells()
    {
        $response = $this->get('/wells_create');

        $response->assertStatus(200);
    }
}
