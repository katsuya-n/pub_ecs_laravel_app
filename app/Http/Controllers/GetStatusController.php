<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetStatusController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function __invoke(Request $request): array
    {
        return ['status' => 'OK'];
    }
}
