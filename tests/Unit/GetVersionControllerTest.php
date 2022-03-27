<?php

namespace Tests\Unit;

use App\Http\Controllers\GetVersionController;
use Database\Seeders\MVersionSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Tests\TestCase;

class GetVersionControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @return void
     */
    public function test_get_version_controller(): void
    {
        $this->seed(MVersionSeeder::class);
        $controller = new GetVersionController();
        $request = Request::create(
            '/api/version',
            'GET',
        );
        $response = $controller->__invoke($request);
        self::assertSame("1.0.0", Arr::get($response, 'version'));
    }
}
