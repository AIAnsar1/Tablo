<?php

namespace Tests\Feature\Messages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostMessagesStoreRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Messages_Post_request(): void
    {
        $response = $this->Post('/');

        $response->assertStatus(200);
    }
}
