<?php

namespace Tests\Feature\Bans;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostBansStoreRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Bans_Post_request(): void
    {
        $response = $this->Post('/');

        $response->assertStatus(200);
    }
}
