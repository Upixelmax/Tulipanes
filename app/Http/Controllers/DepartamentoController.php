<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class DepartamentoController extends Controller
{
    public function show(){
        return view('home.insertardepartamento');
    } 

    public function departamento(Request $request){
        $aux = $request->all();
        $NOMBRE_DEPARTAMENTO = $request->get('NOMBRE_DEPARTAMENTO');

        $resultado=DB::select("CALL INSERTAR_DEPARTAMENTO(?,@RESULTADO)", [$NOMBRE_DEPARTAMENTO]);
        return redirect('/ld')->with('resultado', $resultado);
    }
}


