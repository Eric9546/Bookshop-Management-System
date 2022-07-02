<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Sprint2UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_visitor_view_books_desc_prices_page()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function test_visitor_search_page()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function test_customer_view_books_page()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function test_admin_view_customer_purchase_history_page()
    {
        $response = $this->get('/admin-purchase-history.php');

        $response->assertStatus(500);
    }

    public function test_admin_edit_books_page()
    {
        $response = $this->get('/check-stock.php');

        $response->assertStatus(200);
    }

    public function test_admin_delete_books_page()
    {
        $response = $this->get('/check-stock.php');

        $response->assertStatus(200);
    }

}
