<?php

namespace Tests\Feature\Favorites;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteFavoritesDeleteRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Favorites_Delete_request(): void
    {
        $response = $this->Delete('/');

        $response->assertStatus(200);
    }
}
