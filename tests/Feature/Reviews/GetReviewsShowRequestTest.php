<?php

namespace Tests\Feature\Reviews;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetReviewsShowRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Reviews_Get_request(): void
    {
        $response = $this->Get('/');

        $response->assertStatus(200);
    }
}
