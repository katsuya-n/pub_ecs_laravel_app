<?php

namespace Tests\Unit;

use App\Http\Controllers\GetStatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use PHPUnit\Framework\TestCase;

class GetStatusControllerTest extends TestCase
{
    /**
     * @return void
     */
    public function test_get_status_controller(): void
    {
        $controller = new GetStatusController();
        $request = Request::create(
            '/api/status',
            'GET',
        );
        $response = $controller->__invoke($request);
        self::assertSame("OK", Arr::get($response, 'status'));
    }
}
