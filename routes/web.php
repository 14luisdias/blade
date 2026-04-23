<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteHerancaController;
use App\Http\Controllers\SiteComponenteController;

Route::get('/site/heranca', [SiteHerancaController::class, 'home'])->name('site.heranca.home');
Route::get('/site/heranca/portfolio', [SiteHerancaController::class, 'portfolio'])->name('site.heranca.portfolio');
Route::get('/site/heranca/sobre', [SiteHerancaController::class, 'sobre'])->name('site.heranca.sobre');
Route::get('/site/heranca/contato', [SiteHerancaController::class, 'contato'])->name('site.heranca.contato');

Route::get('/site/componente', [SiteComponenteController::class, 'home'])->name('site.componente.home');
Route::get('/site/componente/portfolio', [SiteComponenteController::class, 'portfolio'])->name('site.componente.portfolio');
Route::get('/site/componente/sobre', [SiteComponenteController::class, 'sobre'])->name('site.componente.sobre');
Route::get('/site/componente/contato', [SiteComponenteController::class, 'contato'])->name('site.componente.contato');

Route::get('/', function () {
    return view('index', [
        'projetos' => [
                ['imagem' => 'cabin.png', 'ativo' => 'true'],
                ['imagem' => 'cake.png', 'ativo' => 'true'],
                ['imagem' => 'circus.png', 'ativo' => 'true'],
                ['imagem' => 'game.png', 'ativo' => 'false'],
                ['imagem' => 'safe.png', 'ativo' => 'true'],
                ['imagem' => 'submarine.png', 'ativo' => 'true'],
            ],
    ]);
});

Route::get('/passagem/dados', function (){
    return view('exemplos.passagem_dados', ['nome'=> 'TreinaWeb', 'descricao' => 'Escola de Desenvolvimento']);
});

Route::get('/exibicao/json', function (){
    return view('exemplos.exibicao_json')->with([
        'posts'=> [
             [
                "titulo" => "Novidades do Laravel", 
                "conteudo" => "nesta versão do Laravel, o Laravel é o motor de template padrão. Ele é fácil de usar e oferece uma sintaxe simples para criar templates dinâmicos. O Blade permite que você use diretivas para controlar a lógica de exibição, como loops e condicionais, além de oferecer suporte a layouts e componentes reutilizáveis."
             ],
             [
                "titulo" => "Novidades do Blade", 
                "conteudo" => "nesta versão do Laravel, o Blade é o motor de template padrão. Ele é fácil de usar e oferece uma sintaxe simples para criar templates dinâmicos. O Blade permite que você use diretivas para controlar a lógica de exibição, como loops e condicionais, além de oferecer suporte a layouts e componentes reutilizáveis."
             ], 
        ],
    ]);
    
});

Route::get('/frameworks/js', function () {
    return view('exemplos.frameworks_js');
});

Route::get('/comentarios', function () {
    return view('exemplos.comentarios');
});

