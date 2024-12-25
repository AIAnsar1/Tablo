<?php

namespace Tests\Feature\Favorites;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PutFavoritesUpdateRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Favorites_Put_request(): void
    {
        $response = $this->Put('/');

        $response->assertStatus(200);
    }
}
