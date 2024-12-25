<?php

namespace Tests\Feature\Filters;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostFiltersStoreRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Filters_Post_request(): void
    {
        $response = $this->Post('/');

        $response->assertStatus(200);
    }
}
