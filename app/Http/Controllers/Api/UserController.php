<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        $users = User::orderBy('id', 'DESC')->paginate(20);

        // Retornar os dados em formato objeto e status 200
        return response()->json([
            'status' => true,
            'users' => $users,
        ], 200);
    }
}
