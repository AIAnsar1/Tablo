<?php

namespace Tests\Feature\Reviews;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostReviewsStoreRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Reviews_Post_request(): void
    {
        $response = $this->Post('/');

        $response->assertStatus(200);
    }
}
