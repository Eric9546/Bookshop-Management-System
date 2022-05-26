<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_visitor_view_books()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(500);
    }

    public function test_visitor_view_desc()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(500);
    }

    public function test_visitor_search()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(500);
    }

    public function test_visitor_view_price()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(500);
    }

}
