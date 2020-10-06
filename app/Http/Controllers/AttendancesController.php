<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendancesController extends Controller
{
    /*
		Listagem de todos os atendimento com os Pets
	*/
    public function index()
    {
    	try
        {
            return Attendance::join('pets','pets.id','attendances.id_pet')->paginate(10);
        }
        catch (Exception $e)
        {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /*
		Inserçāo de um atendimento
		@params $request
    */
    public function store(Request $request)
    {
    	try
    	{
	    	$request->validate([
	    		'id_pet' 			=> 'required',
	    		'date_attendance'	=> 'required',
	    	]);

	    	$attendance = Attendance::create([
	    		'id_pet' 			=> $request->input('id_pet'),
	    		'date_attendance'	=> $request->input('date_attendance'),
	    		'description'		=> $request->input('description'),
	    	]);

			return $attendance;
		}
		catch (Exception $e)
        {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /*
		Listagem dos atendimentos buscado pelo nome do Pet
		@params $name
    */
    public function show(Attendance $attendance, $name)
    {
    	try
    	{	
			return Attendance::join('pets','pets.id','attendances.id_pet')
        						->where('pets.name', 'like', '%'.$name.'%')
        						->paginate(10);

    	}
    	catch (Exception $e)
        {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /*
		Atualiza um atendimento
		$params $request
    */
    public function update(Request $request, Attendance $attendance)
    {	
    	try
    	{
	    	$request->validate([
	    		'id_pet' 			=> 'required',
	    		'date_attendance'	=> 'required',
	    	]);

	    	$attendance->id_pet 			= $request->input('id_pet');
	    	$attendance->date_attendance 	= $request->input('date_attendance');
	    	$attendance->description 		= $request->input('description');
	    	$attendance->save();

	    	return $attendance;
	    }
	    catch (Exception $e)
        {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /*
		Deleta um atendimento
		@param $attendance (id)
    */
    public function delete(Attendance $attendance)
    {
    	try
    	{
	    	$attendance->delete();

	    	return response()->json(['success' => true]);
	    }
	    catch (Exception $e)
        {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
