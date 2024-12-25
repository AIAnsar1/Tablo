<?php

namespace Tests\Feature\Logs;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteLogsDeleteRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Logs_Delete_request(): void
    {
        $response = $this->Delete('/');

        $response->assertStatus(200);
    }
}
