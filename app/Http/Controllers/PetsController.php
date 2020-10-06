<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Exception;

class PetsController extends Controller
{
    
    /*
        Listagem dos Pets (com paginaçāo)
    */
    public function index()
    {
    	try
        {
            return Pet::paginate(10);
        }
        catch (Exception $e)
        {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /*
        Cadastro de um Pet
        $params $request
    */
    public function store(Request $request)
    {
    	try
        {
            $request->validate([
                'name'      => 'required|min:2|max:255',
                'species'   => 'required',
            ]);

            $pet = Pet::create([
                'name'      => $request->input('name'),
                'species'   => $request->input('species'),
            ]);

            return $pet;
        }
        catch (Exception $e)
        {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /*
        Busca um Pet pelo seu ID
        $param $pet (id)
    */
    public function show(Pet $pet)
    {
    	try
        {
            return $pet;
        }
        catch (Exception $e)
        {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /*
        Busca um Pet pelo seu Nome
        $param $name (name)
    */
    public function showName(Pet $pet, $name)
    {
        try
        {
            return Pet::where('name', 'like', '%'.$name.'%')->paginate(10);
        }
        catch (Exception $e)
        {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function update(Request $request, Pet $pet)
    {
    	try
        {
            $pet->name     = $request->input('name');
            $pet->species  = $request->input('species');
            $pet->save();

            return $pet;
        }
        catch (Exception $e)
        {
            return response()->json(['message' => $e->getMessage()], 400);
        }

    	
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
