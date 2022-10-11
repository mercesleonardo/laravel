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

        

        $data = [
            'ingredientes'=>[
                'Ovo',
                'Farinha',
                'Açucar',
                'Leite',
                'Chocolate'
            ]
        ];

        return view('bemvindo', $data);
    }

    
}
