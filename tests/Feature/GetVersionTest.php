<?php

namespace Tests\Feature;

use Tests\TestCase;

class GetVersionTest extends TestCase
{
    /**
     * @return void
     */
    public function test_get_version(): void
    {
        $response = $this->get('/api/version');

        $response->assertStatus(200);
    }
}
