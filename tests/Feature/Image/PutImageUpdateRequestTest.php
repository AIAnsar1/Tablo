<?php

namespace Tests\Feature\Image;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PutImageUpdateRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Image_Put_request(): void
    {
        $response = $this->Put('/');

        $response->assertStatus(200);
    }
}
