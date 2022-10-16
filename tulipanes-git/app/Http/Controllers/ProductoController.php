<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductoController extends Controller
{
    public function show(){
        $productos = \DB::table('PRODUCTO')
                            ->select('PRODUCTO.*')
                            ->orderBy('ID_PRODUCTO','ASC')
                            ->get();
        return view('producto.producto')->with('productos',$productos);
    } 

    public function producto(Request $request){
        $ID_PRODUCTO = $request->get('ID_PRODUCTO');
        $NOMBRE_PRODUCTO = $request->get('NOMBRE_PRODUCTO');
        $MARCA_PRODUCTO = $request->get('MARCA_PRODUCTO');
        $CATEGORIA_PRODUCTO = $request->get('CATEGORIA_PRODUCTO');
        $STOCK_PRODUCTO = $request->get('STOCK_PRODUCTO');
        $PRECIO_PRODUCTO = $request->get('PRECIO_PRODUCTO');

        $resultado=DB::select("CALL INSERTAR_PRODUCTO(?,?,?,?,?,?,@RESULTADO)", [$ID_PRODUCTO,$NOMBRE_PRODUCTO,$MARCA_PRODUCTO,$CATEGORIA_PRODUCTO,$STOCK_PRODUCTO,$PRECIO_PRODUCTO]);
        return redirect('/producto')->with('resultado', $resultado);
    }

    public function borrar($ID_PRODUCTO){
        $resultado=DB::select("CALL ELIMINAR_PRODUCTO(?,@RESULTADO)", [$ID_PRODUCTO]);
        return redirect('/producto');
    }

    public function seleccionar($ID_PRODUCTO){
        $producto=DB::select("SELECT * FROM PRODUCTO WHERE ID_PRODUCTO = ?", [$ID_PRODUCTO]);
        return view('producto.editar_producto')->with('producto',$producto);
    }

    public function editar(Request $request){
        $ID_PRODUCTO = $request->get('ID_PRODUCTO');
        $NOMBRE_PRODUCTO = $request->get('NOMBRE_PRODUCTO');
        $MARCA_PRODUCTO = $request->get('MARCA_PRODUCTO');
        $CATEGORIA_PRODUCTO = $request->get('CATEGORIA_PRODUCTO');
        $STOCK_PRODUCTO = $request->get('STOCK_PRODUCTO');
        $PRECIO_PRODUCTO = $request->get('PRECIO_PRODUCTO');

        $resultado=DB::select("CALL EDITAR_PRODUCTO(?,?,?,?,?,?,@RESULTADO)", [$ID_PRODUCTO,$NOMBRE_PRODUCTO,$MARCA_PRODUCTO,$CATEGORIA_PRODUCTO,$STOCK_PRODUCTO,$PRECIO_PRODUCTO]);
        return redirect('/producto')->with('resultado', $resultado);
    }

    public function seleccionar_mover($ID_PRODUCTO){
        $producto=DB::select("SELECT * FROM PRODUCTO WHERE ID_PRODUCTO = ?", [$ID_PRODUCTO]);
        return view('producto.mover_producto')->with('producto',$producto);
    }

    public function mover(Request $request){
        $PRODUCTO_INVENTARIO = $request->get('PRODUCTO_INVENTARIO');
        $STOCK_INVENTARIO = $request->get('STOCK_INVENTARIO');
        $DEPARTAMENTO_INVENTARIO = $request->get('DEPARTAMENTO_INVENTARIO');

        $resultado=DB::select("CALL INSERTAR_INVENTARIO(?,?,?,@RESULTADO)", [$PRODUCTO_INVENTARIO,$STOCK_INVENTARIO,$DEPARTAMENTO_INVENTARIO]);
        return redirect('/producto')->with('resultado', $resultado);
    }  

}
