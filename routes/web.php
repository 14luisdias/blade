<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/passagem/dados', function (){
    return view('exemplos.passagem_dados', ['nome'=> 'TreinaWeb', 'descricao' => 'Escola de Desenvolvimento']);
});

Route::get('/exibicao-json', function (){
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