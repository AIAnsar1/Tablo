<?php

namespace Tests\Feature\Filters;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteFiltersDeleteRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Filters_Delete_request(): void
    {
        $response = $this->Delete('/');

        $response->assertStatus(200);
    }
}
