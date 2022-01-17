<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetVersionController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function __invoke(Request $request): array
    {
        $version = DB::table('m_version')
            ->select('version')
            ->orderBy('id')
            ->first();
        return [
            'version' => $version->version
        ];
    }
}
