<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class DepartamentoController extends Controller
{
    public function show(){
        $departamentos = \DB::table('DEPARTAMENTO')
                            ->select('DEPARTAMENTO.*')
                            ->orderBy('ID_DEPARTAMENTO','ASC')
                            ->get();
        return view('departamento.departamento')->with('departamentos',$departamentos);
    } 

    public function departamento(Request $request){
        $NOMBRE_DEPARTAMENTO = $request->get('NOMBRE_DEPARTAMENTO');

        $resultado=DB::select("CALL INSERTAR_DEPARTAMENTO(?,@RESULTADO)", [$NOMBRE_DEPARTAMENTO]);
        return redirect('/departamento')->with('resultado', $resultado);
    }

    public function borrar($ID_DEPARTAMENTO){
        $resultado=DB::select("CALL ELIMINAR_DEPARTAMENTO(?,@RESULTADO)", [$ID_DEPARTAMENTO]);
           return redirect('/departamento');
       }
    
    public function seleccionar($ID_DEPARTAMENTO){
        $departamento=DB::select("SELECT * FROM DEPARTAMENTO WHERE ID_DEPARTAMENTO = ?", [$ID_DEPARTAMENTO]);
        return view('departamento.editar_departamento')->with('departamento',$departamento);
    }

    public function editar(Request $request){
        $ID_DEPARTAMENTO = $request->get('ID_DEPARTAMENTO');
        $NOMBRE_DEPARTAMENTO = $request->get('NOMBRE_DEPARTAMENTO');

        $resultado=DB::select("CALL EDITAR_DEPARTAMENTO(?,?,@RESULTADO)", [$ID_DEPARTAMENTO,$NOMBRE_DEPARTAMENTO]);
        return redirect('/departamento')->with('resultado', $resultado);
    }
}
 