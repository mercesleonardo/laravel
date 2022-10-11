<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index() {
        // Criar uma lógica
        // Verificar se um usuario existe
        // Buscar dados de um usuário, etc...

        $name = 'Leonardo';

        $data = [
            'apelido_nome' => $name
        ];

        return view('bemvindo', $data);
    }

    public function exit() {
        return view('sair');
    }

    public function users(Request $r) {

        $data = [
            'quantidade'=> $r->qnt
        ];
        return view('usuarios', $data);
    }
}
