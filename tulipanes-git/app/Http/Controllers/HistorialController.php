<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HistorialController extends Controller
{
    public function show(){
        $historiales = DB::select("SELECT HISTORIAL.ID_HISTORIAL, PRODUCTO.NOMBRE_PRODUCTO, HISTORIAL.STOCK_HISTORIAL, DEPARTAMENTO.NOMBRE_DEPARTAMENTO,HISTORIAL.ENCARGADO_HISTORIAL, HISTORIAL.FECHA_HISTORIAL         FROM HISTORIAL INNER JOIN PRODUCTO
            ON HISTORIAL.PRODUCTO_HISTORIAL=PRODUCTO.ID_PRODUCTO
            INNER JOIN DEPARTAMENTO ON HISTORIAL.DEPARTAMENTO_HISTORIAL=DEPARTAMENTO.ID_DEPARTAMENTO;");
        return view('historial.historial')->with('historiales',$historiales);
    } 
    
}