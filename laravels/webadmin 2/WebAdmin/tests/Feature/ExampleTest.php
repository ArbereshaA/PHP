<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/dashboard');
        $response->assertSeeTextInOrder(['Subject','Students']);

        $response->assertStatus(200);
    }
       public function test_the_dashboardd_returns_a_successful_response()
    {
        $response = $this->get('/dashboardd');
        $response->assertSee('Subject');

        $response->assertStatus(200);
    }
       public function test_the_application_returns_a_notfound_response()
    {
        $response = $this->get('/dashboard2');

        $response->assertStatus(404);
    }
}
