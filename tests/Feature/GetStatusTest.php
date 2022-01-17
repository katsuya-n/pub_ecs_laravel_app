<?php

namespace Tests\Feature;

use Tests\TestCase;

class GetStatusTest extends TestCase
{
    /**
     * @return void
     */
    public function test_get_status()
    {
        $response = $this->get('/api/status');

        $response->assertStatus(200);
    }
}
