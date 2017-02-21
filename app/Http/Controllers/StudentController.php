<?php

namespace TSFI\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TSFI\Alumno;

class StudentController extends Controller
{
    public function searchStudent(){
    	return view('adminlte::studentSearch');
    }

    public function studentCreated(Request $request){
    	
    	$nombre = $request->input('nombre');
    	$DNI = $request->input('DNI');

    	$users = DB::table('users');
    	if (isset($nombre)){
	    	$users -> where("name", "like", $nombre ."%");
	    }
	    if (isset($DNI)) {
	    	$users -> where("email", "like", $DNI ."%");
	    }
	    
	    $users = $users -> get();
	    
		$nombres="";

		foreach ($users as $user) {
			$nombres = $nombres .", ". $user -> name;
		}

	    return "Usuarios encontrados: ". $nombres;
    }
}
