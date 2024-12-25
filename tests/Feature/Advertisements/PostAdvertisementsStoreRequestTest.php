<?php

namespace Tests\Feature\Advertisements;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostAdvertisementsStoreRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Advertisements_Post_request(): void
    {
        $response = $this->Post('/');

        $response->assertStatus(200);
    }
}
