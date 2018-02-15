<?php

namespace App\Http\Controllers;

use App\Residencia;
use App\Ubicacion;
use App\Http\Controllers\Controller;

class ResidenciasController extends Controller
{
    public function index()
    {
        $residencias = Residencia::all();

		return view('residencias.index', compact('residencias'));
    }

	public function create()
	{
		return view('residencias.create');
	}

	public function store(){
    $r = new Residencia();
		$r->direccion = request()->direccion;
		$r->municipio = request()->municipio;
    $r->estrato = request()->estrato;
    $r->propia = request()->valor;
    $r->codigo = request()->codigo;
    $r->codigo = request()->codigo;
    $r->residentes = 0;
    $r->habitantes = [];
    $u = new Ubicacion();
    $u->type="Point";
    $u->coordinates=[(float)request()->latitud,(float)request()->longitud];
    $r->ubicacion()->associate($u);
    $r->save();
		return redirect()->route('residencias.index');
	}

}
