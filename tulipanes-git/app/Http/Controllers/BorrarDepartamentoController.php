<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BorrarDepartamentoController extends Controller
{
    public function borrar($ID_DEPARTAMENTO){
     $resultado=DB::select("CALL ELIMINAR_DEPARTAMENTO(?,@RESULTADO)", [$ID_DEPARTAMENTO]);
        return redirect('/ld');
    }
}
