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
        $sobrenome = 'Carvalho';
        $age = 36;
        $aniversario = '19-07-1986';

        $data = [
            'apelido_nome' => $name,
            'apelido_sobrenome' => $sobrenome,
            'idade' => $age,
            'nascimento' => $aniversario
        ];

        return view('bemvindo', $data);
    }

    public function exit() {
        return view('sair');
    }
}
