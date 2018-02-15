<?php

namespace App\Http\Controllers;

use App\Persona;
use App\Residencia;
use App\Http\Controllers\Controller;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = Persona::all();

		return view('personas.index', compact('personas'));
    }

	public function create()
	{
    $residencias = Residencia::all();
		return view('personas.create', compact('residencias'));
	}

	public function store()
	{
		$p = new Persona();
		$p->documento = request()->documento;
    $p->nombre = request()->nombre;
    $p->fecha = request()->fecha;
    $p->municipio = request()->municipio;
    $p->sangre = request()->sangre;
    $p->residencia = request()->residencia;
		$p->save();

    Residencia::where('direccion',request()->residencia)->increment('residentes', 1);
    Residencia::where('direccion',request()->residencia)->push('habitantes', request()->documento);

		return redirect()->route('personas.index');
	}
}
