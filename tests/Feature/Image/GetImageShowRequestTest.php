<?php

namespace Tests\Feature\Image;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetImageShowRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Image_Get_request(): void
    {
        $response = $this->Get('/');

        $response->assertStatus(200);
    }
}
