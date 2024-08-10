<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function store(UserRequest $request)
    {
        DB::beginTransaction();

        try {
            //code...



            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);

            DB::commit();

            // Retornar os dados em formato objeto e status 200
            return response()->json([
                'status' => true,
                'user' => $user,
                'message' => 'Usuário cadastrado com sucesso!',
            ], 201);
        } catch (Exception $e) {

            DB::rollBack();

            // Retornar os dados em formato objeto e status 400
            return response()->json([
                'status' => false,
                'message' => 'Usuário não cadastrado!',
            ], 400);
        }
    }
}
