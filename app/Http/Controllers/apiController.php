<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Work;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class apiController extends Controller
{
    //


    public function index()
    {
        return response()->json(['message' => 'ClientSync v1.0'], 200);
    }

    public function ping()
    {
        return response()->json(['message' => 'pong'], 200);
    }

    // retornar todos los clientes
    // recoger parametros de la url y filtrar (?id=1)
    public function clients()
    {

        $id = request('id');
        if ($id) {
            return response()->json(Client::find($id), 200);
        }
        return response()->json(Client::all(), 200);
    }


    // retornar todos los trabajos tambien quiero filtrar por  client_id (?client_id=1)

    public function jobs()
    {

        $client_id = request('client_id');
        if ($client_id) {
            return response()->json(Work::where('client_id', $client_id)->get(), 200);
        }
        return response()->json(Work::all(), 200);
    }

// funcion de login con laravel sanctum
    public function login(){
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
        $user = User::where('email', $credentials['email'])->first();
        $token = $user->createToken('authToken')->plainTextToken;
        return response()->json([
            'token' => $token,
            'token_type' => 'Bearer'
        ]);
        
    }
}
