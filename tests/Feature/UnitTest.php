<?php

namespace Tests\Integration;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookshopIntegrationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testCustomerRegisterLogin()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function testAdminLoginViewPaymentHistory()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function testCustomerLoginViewBooks()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

    public function testCustomerLoginViewPaymentHistory()
    {
        $response = $this->get('/index.php');

        $response->assertStatus(200);
    }

}
