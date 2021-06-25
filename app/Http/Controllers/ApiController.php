<?php

namespace App\Http\Controllers;
use App\Models\Turnamen;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function api() {
        $data = Turnamen::get();
        // dd($Authors);
        return response()->json(['message' => 'Success','data' => $data]);
}
public function store(Request $request)
{
    $data = Turnamen::create($request->all());
    return response()->json(['message' => 'Success','data' => $data]);
}
public function update(Request $request,$id)
{
    $data = Turnamen::find($id);
    $data->update($request->all());
    return response()->json(['message' => 'Success','data' => $data]);
}
public function destroy($id)
{
    $data = Turnamen::find($id);
    $data->delete();
    return response()->json(['message' => 'Success','data' => null]);
}
}
