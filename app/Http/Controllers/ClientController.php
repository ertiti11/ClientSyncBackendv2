<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Work;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    //


    public function index()
    {
        $id = request('id');
        if ($id) {
            return response()->json(Client::find($id), 200);
        }
        return response()->json(Client::all(), 200);
    }


    public function update()
    {
        $id = request('id');
        $client = Client::find($id);
        $client->name = request('name');
        $client->email = request('email');
        $client->phone = request('phone');
        $client->save();
        return response()->json($client, 200);
    
    }


    public function delete()
    {
        $id = request('id');
        $client = Client::find($id);
        $client->delete();
        return response()->json("ok", 200);
    }

    public function ping()
    {
        return response()->json(['message' => 'pong'], 200);
    }

    // retornar todos los clientes
    // recoger parametros de la url y filtrar (?id=1)


   
}
