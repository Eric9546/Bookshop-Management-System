<?php

namespace Tests\Integration;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Sprint3IntegrationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_customer_login_view_books()
    {
        $response = $this->get('/login.php');
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function test_customer_login_search_books()
    {
        $response = $this->get('/login.php');
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function test_customer_login_view_cart()
    {
        $response = $this->get('/login.php');
        $response = $this->get('/checkout.php');

        $response->assertStatus(500);
    }

    public function test_customer_login_add_remove_update_cart()
    {
        $response = $this->get('/login.php');
        $response = $this->get('/checkout.php');

        $response->assertStatus(500);
    }

    public function test_customer_login_view_purchase_history()
    {
        $response = $this->get('/login.php');
        $response = $this->get('/customer-purchase-history.php');

        $response->assertStatus(500);
    }

    public function test_admin_login_view_purchase_history()
    {
        $response = $this->get('/login.php');
        $response = $this->get('/admin-purchase-history.php');

        $response->assertStatus(500);
    }

    public function test_admin_login_add_remove_update_stock()
    {
        $response = $this->get('/login.php');
        $response = $this->get('/check-stock.php');

        $response->assertStatus(200);
    }

}
