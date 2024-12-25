<?php

namespace Tests\Feature\FilterValues;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostFilterValuesStoreRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_FilterValues_Post_request(): void
    {
        $response = $this->Post('/');

        $response->assertStatus(200);
    }
}
