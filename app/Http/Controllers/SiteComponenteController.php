<?php

namespace App\Http\Controllers;


class SiteComponenteController extends Controller
{
    //
    public function home()
    {
        return view('componente.home');
    }

    public function portfolio()
    {
        return view('componente.portfolio', [
            'projetos' => [
                ['imagem' => 'cabin.png', 'ativo' => 'true'],
                ['imagem' => 'cake.png', 'ativo' => 'true'],
                ['imagem' => 'circus.png', 'ativo' => 'true'],
                ['imagem' => 'game.png', 'ativo' => 'false'],
                ['imagem' => 'safe.png', 'ativo' => 'true'],
                ['imagem' => 'submarine.png', 'ativo' => 'true'],
            ],
        ]);
    }

    public function sobre()
    {
        return view('componente.sobre');
    }

    public function contato()
    {
        return view('componente.contato');
    }
}
