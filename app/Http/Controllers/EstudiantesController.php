<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Http\Controllers\Controller;

class EstudiantesController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
		
		return view('estudiantes.index', compact('estudiantes'));		
    }
	
	public function create()
	{
		return view('estudiantes.create');		
	}
	
	public function store()
	{
		$e = new Estudiante();
		$e->nombre = request()->nombre;
		$e->email = request()->email;
		$e->save();
		
		return redirect()->route('estudiantes.index');
	}
}