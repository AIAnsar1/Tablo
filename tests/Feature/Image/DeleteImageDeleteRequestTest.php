<?php

namespace Tests\Feature\Image;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteImageDeleteRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Image_Delete_request(): void
    {
        $response = $this->Delete('/');

        $response->assertStatus(200);
    }
}
