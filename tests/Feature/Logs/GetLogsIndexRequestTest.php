<?php

namespace Tests\Feature\Logs;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetLogsIndexRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Logs_Get_request(): void
    {
        $response = $this->Get('/');

        $response->assertStatus(200);
    }
}
