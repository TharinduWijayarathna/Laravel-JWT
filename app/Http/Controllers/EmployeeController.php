<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello World'
        ]);
    }

    public function list()
    {
        return response()->json([
            'message' => 'List method'
        ]);
    }

    public function all()
    {
        return response()->json([
            'message' => 'All method'
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'message' => 'Store method'
        ]);
    }

    public function get($id)
    {
        return response()->json([
            'message' => 'Edit method'
        ]);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'message' => 'Update method'
        ]);
    }

    public function delete($id)
    {
        return response()->json([
            'message' => 'Destroy method'
        ]);
    }
}
