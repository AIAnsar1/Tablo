<?php

namespace Tests\Feature\Reviews;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteReviewsDeleteRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Reviews_Delete_request(): void
    {
        $response = $this->Delete('/');

        $response->assertStatus(200);
    }
}
