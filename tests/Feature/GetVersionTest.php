<?php

namespace Tests\Feature;

use Database\Seeders\MVersionSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GetVersionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @return void
     */
    public function test_get_version(): void
    {
        $this->seed(MVersionSeeder::class);
        $response = $this->get('/api/version');

        $response->assertStatus(200);
    }
}
