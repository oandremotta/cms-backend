<?php

namespace App\Http\Controllers;

use App\Models\AppDadosCrianca;
use App\Models\Tenant;
use Illuminate\Http\Request;

class AppDadosCriancaController extends Controller
{
    public function show($id)
    {
        $dadosCrianca = AppDadosCrianca::find($id);

        return response()->json($dadosCrianca);
    }
}
