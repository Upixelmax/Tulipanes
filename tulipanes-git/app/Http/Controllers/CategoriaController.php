<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class CategoriaController extends Controller
{
    public function show(){
        $categorias = \DB::table('CATEGORIA')
                            ->select('CATEGORIA.*')
                            ->orderBy('ID_CATEGORIA','ASC')
                            ->get();
        return view('categoria.categoria')->with('categorias',$categorias);
    } 

    public function categoria(Request $request){
        $NOMBRE_CATEGORIA = $request->get('NOMBRE_CATEGORIA');

        $resultado=DB::select("CALL INSERTAR_CATEGORIA(?,@RESULTADO)", [$NOMBRE_CATEGORIA]);
        return redirect('/categoria')->with('resultado', $resultado);
    }

    public function borrar($ID_CATEGORIA){
        $resultado=DB::select("CALL ELIMINAR_CATEGORIA(?,@RESULTADO)", [$ID_CATEGORIA]);
           return redirect('/categoria');
       }
    
    public function seleccionar($ID_CATEGORIA){
        $categoria=DB::select("SELECT * FROM CATEGORIA WHERE ID_CATEGORIA = ?", [$ID_CATEGORIA]);
        return view('categoria.editar_categoria')->with('categoria',$categoria);
    }

    public function editar(Request $request){
        $ID_CATEGORIA = $request->get('ID_CATEGORIA');
        $NOMBRE_CATEGORIA = $request->get('NOMBRE_CATEGORIA');

        $resultado=DB::select("CALL EDITAR_CATEGORIA(?,?,@RESULTADO)", [$ID_CATEGORIA,$NOMBRE_CATEGORIA]);
        return redirect('/categoria')->with('resultado', $resultado);
    }
}
 