<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        $estatisticas = [
            // 'vagas_ativas' => Vaga::where('ativo', true)->count(),
            // 'curriculos' => Curriculo::count(),
            // 'contratacoes' => Vaga::where('status', 'contratado')->count(),
            // 'empresas' => Empresa::where('ativo', true)->count()
        ];

        return view('portal.index', compact('estatisticas'));
    }
}