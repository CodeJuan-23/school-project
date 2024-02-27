<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\v1\Alumno;
use Illuminate\Http\Request;
 
class AlumnosController extends Controller
{
	function getAll()
	{
		$response=new \stdClass();
		$response ->success=true;
		$alumnos=Alumno::all();
		$response ->data= $alumnos;
		return response()-> json($response,200);
	}

	function getItem($id)
	{
		$response=new \stdClass();
		$response ->success=true;
		$alumnos=Alumno::find($id);
		$response ->data= $alumnos;
		return response()->json($response,200);
	}

	function store(Request $request)
	{
		$response=new \stdClass();
		$response-> success=true;
		$alumno=new Alumno();
		$alumno ->codigo=$request->codigo;
		$alumno ->nombres=$request->nombres;
		$alumno ->apellidos=$request->apellidos;
		$alumno ->direccion=$request->direccion;
		$alumno ->telefono=$request->telefono;
		$alumno ->fecha_nacimiento=$request->fecha_nacimiento;
		$alumno ->dni=$request->dni;
		$alumno ->genero=$request->genero;
		$alumno ->nacionalidad=$request->nacionalidad;
		$alumno ->save();
		$response->data=$alumno;
		return response()->json($response,201);

	}
}


