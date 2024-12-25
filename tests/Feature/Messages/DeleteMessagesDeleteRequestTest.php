<?php

namespace Tests\Feature\Messages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteMessagesDeleteRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Messages_Delete_request(): void
    {
        $response = $this->Delete('/');

        $response->assertStatus(200);
    }
}
