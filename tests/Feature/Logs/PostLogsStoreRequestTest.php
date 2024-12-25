<?php

namespace Tests\Feature\Logs;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostLogsStoreRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Logs_Post_request(): void
    {
        $response = $this->Post('/');

        $response->assertStatus(200);
    }
}
