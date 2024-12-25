<?php

namespace Tests\Feature\Logs;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PutLogsUpdateRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Logs_Put_request(): void
    {
        $response = $this->Put('/');

        $response->assertStatus(200);
    }
}
