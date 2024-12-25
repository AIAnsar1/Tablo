<?php

namespace Tests\Feature\FilterValues;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteFilterValuesDeleteRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_FilterValues_Delete_request(): void
    {
        $response = $this->Delete('/');

        $response->assertStatus(200);
    }
}
