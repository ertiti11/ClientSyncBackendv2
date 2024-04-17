<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;


class WorkController extends Controller
{
    //

    public function index()
    {
        //return all works
        $id = request('id');
        if ($id) {
            return response()->json(Work::find($id), 200);
        }
        return response()->json(Work::all(), 200);
    }

    public function update() {
        $id = request('id');
        $work = Work::find($id);
    
        $work->update(request()->only('title', 'description', 'client_id', 'start_date', 'end_date', 'price', 'status'));
    
        return response()->json($work, 200);
    }

    public function delete() {
        $id = request('id');
        if (!$id) {
            return response()->json("id is required", 400);
        }

        $work = Work::find($id);
        if (!$work) {
            return response()->json("work not found", 404);
        }
        $work->delete();
        return response()->json("ok", 204);
    }

    public function create() {
        $work = new Work();
        $work->title = request('title');
        $work->description = request('description');
        $work->client_id = request('client_id');
        $work->start_date = request('start_date');
        $work->end_date = request('end_date');
        $work->price = request('price');
        $work->status = request('status');
        $work->save();
        return response()->json($work, 201);
    }




}
