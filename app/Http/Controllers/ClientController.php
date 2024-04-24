<?php

namespace App\Http\Controllers;

use App\Models\Client;


class ClientController extends Controller
{
    //

    public function index()
    {
        //return all Client
        $id = request('id');
        if ($id) {
            return response()->json(Client::find($id), 200);
        }
        return response()->json(Client::all(), 200);
    }

    public function update() {
        $id = request('id');
        $client = Client::find($id);
        $client->update(request()->only('name', 'lastNames', 'email', 'phone', 'date', 'address', 'color'));
    
        return response()->json($client, 200);
    }

    public function delete() {
        $id = request('id');
        if (!$id) {
            return response()->json("id is required", 400);
        }

        $client = Client::find($id);
        if (!$client) {
            return response()->json("client not found", 404);
        }
        $client->delete();
        return response()->json("ok", 204);
    }

    public function create() {
        $client = new Client();
        $client->name = request('name');
        $client->lastNames = request('lastNames');
        $client->email = request('email');
        $client->phone = request('phone');
        $client->date = request('date');
        $client->address = request('address');
        $client->color = request('color');
        $client->save();
        return response()->json($client, 201);
    }




}
