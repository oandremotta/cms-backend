<?php

namespace App\Http\Controllers;

use App\Models\Funcionalidade;
use Illuminate\Http\Request;

class FuncionalidadeController extends Controller
{
    public function listarFuncionalidades()
    {
        $funcionalidades = Funcionalidade::all();

        return response()->json($funcionalidades);
    }
}
