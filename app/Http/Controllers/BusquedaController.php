<?php

namespace App\Http\Controllers;

use App\Residencia;
use App\Http\Controllers\Controller;

class BusquedaController extends Controller
{
    public function index(){

      return view('busqueda.index');
    }


    public function store(){
      $residencias = Residencia::where('ubicacion', 'near', [
       '$geometry' => [
         'type' => 'Point',
         'coordinates' => [(float) request()->longitud, (float)request()->latitud]
       ],
       '$minDistance' => (float)request()->minimo,
       '$maxDistance' => (float)request()->maximo
      ])->get();
      return view('busqueda.search',compact('residencias'));
    }



}
