<?php

namespace App\Http\Controllers;
use App\Schools;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    public function index()
    {
        $school = Schools::all();
        return response()->json($school);
    }

    public function show($id)
    {
        $school = Schools::find($id);

        if(!$school) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($school);
    }

    public function store(Request $request)
    {
        $school = new Schools();
        $school->fill($request->all());
        $school->save();
        return response()->json($school, 201);
    }

    public function update(Request $request, $id)
    {
        $school = Schools::find($id);

        if(!$school) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $school->fill($request->all());
        $school->save();

        return response()->json($school);
    }

    public function destroy($id)
    {
        $school = Schools::find($id);

        if(!$school) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }
        $school->delete();
    }
}