<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testFetchJsonWithoutSecureCode()
    {
        $response = $this->getJson('/api/collection/0');

        $response->assertStatus(403);
    }

    public function testFetchJsonWithSecureCode()
    {
        $response = $this->withHeaders([
            'X-Secure-Code' => '1234',
        ])->getJson('/api/collection/1');

        $response
            ->assertStatus(200)
            ->assertJsonPath('title', '親子步道')
            ->assertJsonStructure([
                'id',
                'title',
                'subTitle',
                'bgColor',
                'iconImage',
            ]);
    }
}
