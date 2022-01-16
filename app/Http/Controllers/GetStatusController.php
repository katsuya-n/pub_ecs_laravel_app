<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class GetStatusController extends Controller
{
    public function __invoke(Request $request) {
        return response()->json(
            ['status' => "OK"]
        );
    }
}
