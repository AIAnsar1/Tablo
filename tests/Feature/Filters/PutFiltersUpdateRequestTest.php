<?php

namespace Tests\Feature\Filters;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PutFiltersUpdateRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Filters_Put_request(): void
    {
        $response = $this->Put('/');

        $response->assertStatus(200);
    }
}
