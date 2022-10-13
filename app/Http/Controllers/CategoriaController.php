<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class CategoriaController extends Controller
{
    public function show(){
        return view('home.insertarcategoria');
    } 

    public function categoria(Request $request){
        $aux = $request->all();
        $ID_CATEGORIA = $request->get('ID_CATEGORIA');
        $NOMBRE_CATEGORIA = $request->get('NOMBRE_CATEGORIA');

        $resultado=DB::select("CALL INSERTAR_CATEGORIA(?,?,@RESULTADO)", [$ID_CATEGORIA,$NOMBRE_CATEGORIA]);
        return view('home.insertarcategoria')->with('resultado', $resultado);
    }
}
 