<?php

namespace Tests\Feature\Filters;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetFiltersIndexRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Filters_Get_request(): void
    {
        $response = $this->Get('/');

        $response->assertStatus(200);
    }
}
