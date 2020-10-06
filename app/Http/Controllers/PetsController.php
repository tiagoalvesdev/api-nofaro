<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    
    /*
        Listagem dos Pets (com paginaçāo)
    */
    public function index()
    {
    	return Pet::paginate(10);
    }

    /*
        Cadastro de um Pet
        $params $request
    */
    public function store(Request $request)
    {
    	$request->validate([
    		'name' 		=> 'required|min:2|max:255',
    		'species'	=> 'required',
    	]);

    	$pet = Pet::create([
    		'name' 		=> $request->input('name'),
    		'species'	=> $request->input('species'),
    	]);

		return $pet;

    }

    /*
        Busca um Pet pelo seu ID
        $param $pet (id)
    */
    public function show(Pet $pet)
    {
    	return $pet;
    }

    /*
        Busca um Pet pelo seu Nome
        $param $name (name)
    */
    public function showName(Pet $pet, $name)
    {
        return Pet::where('name', 'like', '%'.$name.'%')->paginate(10);
    }

    public function update(Request $request, Pet $pet)
    {
    	$request->validate([
    		'name' 		=> 'required|min:2|max:255',
    		'species'	=> 'required',
    	]);

    	$pet->name = $request->input('name');
    	$pet->save();

    	return $pet;
    }

    /*
        Deleta um Pet
        @param $pet (id)
    */

    public function delete(Pet $pet)
    {
    	$pet->delete();

    	return response()->json(['success' => true]);
    }
}
