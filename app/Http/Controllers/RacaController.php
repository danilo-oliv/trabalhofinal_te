<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Raca;
use Illuminate\Http\Request;

class RacaController extends Controller
{
    public function getAll() {
        $response = Raca::all();
        return response()->json($response);
    }

    public function store(Request $request) {
        Raca::create($request->all());
    }
}
