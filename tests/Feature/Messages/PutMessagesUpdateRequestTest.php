<?php

namespace Tests\Feature\Messages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PutMessagesUpdateRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Messages_Put_request(): void
    {
        $response = $this->Put('/');

        $response->assertStatus(200);
    }
}
