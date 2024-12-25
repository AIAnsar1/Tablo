<?php

namespace Tests\Feature\Payments;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetPaymentsShowRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Payments_Get_request(): void
    {
        $response = $this->Get('/');

        $response->assertStatus(200);
    }
}
