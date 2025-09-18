<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/passagem/dados', function (){
    return view('exemplos.passagem_dados', [
        'nome'=> 'TreinaWb',
        'descricao' => 'Escola de Desenvolvimento'
    ]);
    
});
