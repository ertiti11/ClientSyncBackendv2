<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Work;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
   

// haz un set cookie tambien
public function login(Request $request){

    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    $token = $user->createToken('my-app-token')->plainTextToken;

    return response()->json(['token' => $token], 200);

}


public function logout(Request $request)
{
    $request->user()->currentAccessToken()->delete();
    return response()->json(['message' => 'Logged out'], 200);

}

public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();

    return response()->json(['message' => 'User created'], 201);

}





}
