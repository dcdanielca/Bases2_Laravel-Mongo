<?php

namespace App\Http\Controllers;

use App\Restaurante;
use App\Http\Controllers\Controller;

class RestaurantesController extends Controller
{
    public function index()
    {

	   $restaurantes = Restaurante::where('location', 'near', [
			'$geometry' => [
				'type' => 'Point',
				'coordinates' => [ -73.9667, 40.78 ]
			],
			'$minDistance' => 0,    
			'$maxDistance' => 500
	   ])->get();
		
		return view('restaurantes.index', compact('restaurantes'));		
    }
}