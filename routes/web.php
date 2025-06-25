<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = 'Beto';
    $idade = 35;
    $profissao = 'Dev';
    $arr = [1,2,3,4,5];
    $nomes = ['Neto', 'Gabriel', 'Guilherme', 'João'];

    return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => $profissao,
            'altura' => 1.93,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});

