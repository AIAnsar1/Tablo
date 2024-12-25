<?php

namespace Tests\Feature\Payments;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PutPaymentsUpdateRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Payments_Put_request(): void
    {
        $response = $this->Put('/');

        $response->assertStatus(200);
    }
}
