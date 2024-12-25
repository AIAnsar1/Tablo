<?php

namespace Tests\Feature\Bans;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetBansShowRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Bans_Get_request(): void
    {
        $response = $this->Get('/');

        $response->assertStatus(200);
    }
}
