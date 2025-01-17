<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index() {
        return response()->json([
            'message' => 'Hello World from API!'
        ]);
    }

    public function store() {
        return back()->with('success', 'Data has been saved!');
    }
}
