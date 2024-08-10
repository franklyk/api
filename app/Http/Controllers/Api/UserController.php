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

    /**
     * Recupera os dados de um usuário específico
     *
     * @param User $user O id para recuperar os dados do usuário
     * @return \iluminate\http\JsonResponse Retorna os dados em formato json
     */
    public function show(User $user): JsonResponse 
    {
        // Retornar os dados em formato objeto e status 200
        return response()->json([
            'status' => true,
            'users' => $user,
        ], 200);
        
    }
}
