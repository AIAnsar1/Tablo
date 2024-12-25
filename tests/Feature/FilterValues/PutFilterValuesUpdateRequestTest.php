<?php

namespace Tests\Feature\FilterValues;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PutFilterValuesUpdateRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_FilterValues_Put_request(): void
    {
        $response = $this->Put('/');

        $response->assertStatus(200);
    }
}
