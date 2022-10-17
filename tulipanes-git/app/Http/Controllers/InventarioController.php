<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InventarioController extends Controller
{
    public function show(){
        $inventarios = DB::select("SELECT INVENTARIO.ID_INVENTARIO, PRODUCTO.NOMBRE_PRODUCTO, INVENTARIO.STOCK_INVENTARIO, DEPARTAMENTO.NOMBRE_DEPARTAMENTO, INVENTARIO.FECHA_INVENTARIO
                                    FROM INVENTARIO INNER JOIN PRODUCTO
                                    ON INVENTARIO.PRODUCTO_INVENTARIO=PRODUCTO.ID_PRODUCTO
                                    INNER JOIN DEPARTAMENTO ON INVENTARIO.DEPARTAMENTO_INVENTARIO=DEPARTAMENTO.ID_DEPARTAMENTO
                                    WHERE INVENTARIO.FECHA_INVENTARIO=CURDATE();");
        return view('inventario.inventario')->with('inventarios',$inventarios);
    } 
    
}
