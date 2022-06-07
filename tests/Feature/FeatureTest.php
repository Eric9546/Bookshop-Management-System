<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_the_application_started()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_visitor_view_books_desc_prices()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function test_visitor_search()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function test_customer_view_books()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function test_admin_view_customer_payment_history()
    {
        $response = $this->get('/customer-payment-history.php');

        $response->assertStatus(200);
    }

}
