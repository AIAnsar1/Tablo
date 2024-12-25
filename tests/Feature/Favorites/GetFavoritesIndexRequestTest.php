<?php

namespace Tests\Feature\Favorites;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetFavoritesIndexRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Favorites_Get_request(): void
    {
        $response = $this->Get('/');

        $response->assertStatus(200);
    }
}
