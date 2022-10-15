<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListDepartamentoController extends Controller
{
    public function show(){
        $departamentos = \DB::table('DEPARTAMENTO')
                            ->select('DEPARTAMENTO.*')
                            ->orderBy('ID_DEPARTAMENTO','ASC')
                            ->get();
        return view('departamento.departamento')->with('departamentos',$departamentos);
    } 
}
