<?php

namespace App\Http\Controllers;
use App\Students;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    
    public function index()
    {
        $students = Students::with('school')->get();
        return response()->json($students);
    }

    public function show($id)
    {
        $students = Students::with('school')->find($id);

        if(!$students) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($students);
    }

    public function store(Request $request)
    {
        $students = new Students();
        $students->fill($request->all());
        $students->save();

        return response()->json($students, 201);
    }

    public function update(Request $request, $id)
    {
        $students = Students::find($id);

        if(!$students) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $students->fill($request->all());
        $students->save();

        return response()->json($students);
    }

    public function destroy($id)
    {
        $students = Students::find($id);

        if(!$students) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }
        $students->delete();
    }
}
