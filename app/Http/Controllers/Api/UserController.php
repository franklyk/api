<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Return list of users
     *
     * @return JsonResponse return the users
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'status' => true,
            'user' => 'Listar usuarios',
        ], 200);
    }
}
