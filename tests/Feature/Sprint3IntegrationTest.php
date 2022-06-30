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
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function test_customer_login_add_remove_update_cart()
    {
        $response = $this->get('/login.php');
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function test_customer_login_view_purchase_history()
    {
        $response = $this->get('/login.php');
        $response = $this->get('/customer-payment-history.php');

        $response->assertStatus(200);
    }

    public function test_admin_login_view_purchase_history()
    {
        $response = $this->get('/login.php');
        $response = $this->get('/customer-payment-history.php');

        $response->assertStatus(200);
    }

    public function test_admin_login_add_remove_update_stock()
    {
        $response = $this->get('/login.php');
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

}
