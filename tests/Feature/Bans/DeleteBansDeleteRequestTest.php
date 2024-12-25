<?php

namespace Tests\Feature\Bans;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteBansDeleteRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Bans_Delete_request(): void
    {
        $response = $this->Delete('/');

        $response->assertStatus(200);
    }
}
