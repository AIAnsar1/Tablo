<?php

namespace Tests\Feature\FilterValues;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetFilterValuesShowRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_FilterValues_Get_request(): void
    {
        $response = $this->Get('/');

        $response->assertStatus(200);
    }
}
