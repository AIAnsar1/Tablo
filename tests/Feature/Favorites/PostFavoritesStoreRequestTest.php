<?php

namespace Tests\Feature\Favorites;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostFavoritesStoreRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Favorites_Post_request(): void
    {
        $response = $this->Post('/');

        $response->assertStatus(200);
    }
}
