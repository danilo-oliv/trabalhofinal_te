<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function showAll(){
        $animais = Animal::all();
        return view('index', compact('animais'));
    }

    public function create() {
        return view('formAdicionar');
    }

    public function store(Request $request) {
        Animal::create($request->all());
        return redirect('index');
    }

    public function update(){
        return view('formEditar');
    }

    public function save(Request $request) {
        $animal = Animal::find($request->id);
        $animal->update([
            'brinco' => $request->brinco,
            'nome' => $request->nome,
            'peso' => $request->peso,
            'sexo' => $request->sexo,
            'cod_raca' => $request->cod_raca
        ]);
    }

    public function delete($id) {
        $animal = Animal::find($id);
        $animal->delete();
        return redirect('index');
    }
}
