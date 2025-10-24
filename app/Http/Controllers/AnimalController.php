<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animais = Animal::all();
        return view('animal.animal_index', compact('animais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animal.animal_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $validated = $request->validate([
            'nome' => 'required|min:3',
            'especie' => 'required',
            'raca' => 'required',
            'idade' => 'required',
            'nomeDono' => 'required',
        ]);

        $animal = new Animal();
        $animal->nome = $request->nome;
        $animal->especie = $request->especie;
        $animal->raca = $request->raca;
        $animal->idade = $request->idade;
        $animal->nomeDono = $request->nomeDono;
        $animal->save();

        return redirect()->route('animal.index')->with('message', 'Animal cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $animal = Animal::find($id);
        return view('animal.animal_show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $animal = Animal::find($id);
        return view('animal.animal_edit', compact('animal'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'nome' => 'required|min:3',
            'especie' => 'required',
            'raca' => 'required',
            'idade' => 'required',
            'nomeDono' => 'required',
        ]);

        $animal = Animal::find($id);
        $animal->nome = $request->nome;
        $animal->especie = $request->especie;
        $animal->raca = $request->raca;
        $animal->idade = $request->idade;
        $animal->nomeDono = $request->nomeDono;
        $animal->save();

        return redirect()->route('animal.index')->with('message', 'Animal foi atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $animal = Animal::find($id);
        $animal->delete();

        return redirect()->route('animal.index')->with('message', 'Animal excluido com sucesso!');
    }
}
