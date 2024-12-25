<?php

namespace Tests\Feature\Payments;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeletePaymentsDeleteRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Payments_Delete_request(): void
    {
        $response = $this->Delete('/');

        $response->assertStatus(200);
    }
}
