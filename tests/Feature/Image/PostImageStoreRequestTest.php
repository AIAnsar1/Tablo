<?php

namespace Tests\Feature\Image;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostImageStoreRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Image_Post_request(): void
    {
        $response = $this->Post('/');

        $response->assertStatus(200);
    }
}
