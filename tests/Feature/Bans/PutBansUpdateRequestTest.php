<?php

namespace Tests\Feature\Bans;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PutBansUpdateRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Bans_Put_request(): void
    {
        $response = $this->Put('/');

        $response->assertStatus(200);
    }
}
