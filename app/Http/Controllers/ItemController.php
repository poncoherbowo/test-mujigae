<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Items;

class ItemController extends Controller
{
    public function index()
    {
        return Items::all();
    }

    public function show($id)
    {
        return Items::find($id);
    }

    public function store(Request $request)
    {
        $item = Items::create($request->all());
        return response()->json($item, 201);
    }

    public function update(Request $request, Items $item)
    {
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function delete(Items $item)
    {
        $item->delete();
        return response()->json(['Message' => 'Data Deleted Successfully'], 200);
    }
}
