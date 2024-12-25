<?php

namespace Tests\Feature\Payments;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostPaymentsStoreRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Payments_Post_request(): void
    {
        $response = $this->Post('/');

        $response->assertStatus(200);
    }
}
