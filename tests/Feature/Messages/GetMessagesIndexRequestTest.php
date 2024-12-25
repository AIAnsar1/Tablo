<?php

namespace Tests\Feature\Messages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetMessagesIndexRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Messages_Get_request(): void
    {
        $response = $this->Get('/');

        $response->assertStatus(200);
    }
}