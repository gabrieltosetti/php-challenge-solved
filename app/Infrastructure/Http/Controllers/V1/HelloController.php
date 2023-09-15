<?php

namespace App\Infrastructure\Http\Controllers\V1;

use \App\Infrastructure\Http\Controllers\BaseController;

class HelloController extends BaseController
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello!',
        ]);
    }
}
