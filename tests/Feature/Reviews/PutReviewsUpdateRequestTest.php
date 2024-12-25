<?php

namespace Tests\Feature\Reviews;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PutReviewsUpdateRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Reviews_Put_request(): void
    {
        $response = $this->Put('/');

        $response->assertStatus(200);
    }
}
