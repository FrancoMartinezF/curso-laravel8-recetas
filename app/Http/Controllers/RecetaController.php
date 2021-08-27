<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function __invoke(Request $request){

        $recetas = ["Pizza", "Hamburguesas", "Milanesas"];

        return view('recetas.index')->with('recetas', $recetas);
    }
}
