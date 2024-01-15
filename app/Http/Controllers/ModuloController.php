<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function listarModulos()
    {
        $modulos = Modulo::all();

        return response()->json($modulos);
    }
}
