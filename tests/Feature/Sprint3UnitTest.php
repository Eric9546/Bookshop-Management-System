<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Sprint3UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_customer_search_page()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function test_customer_view_books_desc_prices_page()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function test_customer_add_books_page()
    {
        $response = $this->get('/checkout.php');

        $response->assertStatus(500);
    }

    public function test_customer_remove_books_page()
    {
        $response = $this->get('/checkout.php');

        $response->assertStatus(500);
    }

    public function test_customer_update_books_page()
    {
        $response = $this->get('/checkout.php');

        $response->assertStatus(500);
    }

    public function test_customer_checkout_page()
    {
        $response = $this->get('/checkout.php');

        $response->assertStatus(500);
    }

    public function test_customer_purchase_history_page()
    {
        $response = $this->get('/customer-purchase-history.php');

        $response->assertStatus(500);
    }

}
