<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_mock_company()
    {
        $response = $this->get('/api/company/mock');

        $response
            ->assertStatus(200)
            ->assertJson([
                "company" => "yumemi"
            ])
        ;
    }
}
