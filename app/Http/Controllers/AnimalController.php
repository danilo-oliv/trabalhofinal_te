<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Raca;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function showAll()
    {
        $animais = Animal::all();
        return view('index', compact('animais'));
    }

    public function create()
    {
        $racas = Raca::all();
        return view('formAdicionar', compact('racas'));
    }


    public function store(Request $request)
    {
        Animal::create($request->all());
        return redirect('index');
    }

    public function update()
    {
        return view('formEditar');
    }

    public function edit($id)
{

    $animal = Animal::findOrFail($id);


    $racas = Raca::all();

 
    return view('formEditar', compact('animal', 'racas'));
}




public function save(Request $request, $id)
{

    $animal = Animal::findOrFail($id);


    $animal->update([
        'brinco' => $request->brinco,
        'nome' => $request->nome,
        'peso' => $request->peso,
        'sexo' => $request->sexo,
        'cod_raca' => $request->cod_raca
    ]);

    return redirect('/')->with('success', 'Animal atualizado com sucesso!');
}


    public function storeAnimal(Request $request)
    {

        $animal = new Animal();
        $animal->brinco = $request->input('brinco');
        $animal->nome = $request->input('nome');
        $animal->peso = $request->input('peso');
        $animal->sexo = $request->input('sexo');
        $animal->cod_raca = $request->input('cod_raca');

        $animal->save();

        return redirect('/');
    }


    public function delete($id)
    {
        $animal = Animal::find($id);
        $animal->delete();
        return redirect('/');
    }

}
