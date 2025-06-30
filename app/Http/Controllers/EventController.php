<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
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
    }

    public function create(){
        return view ('events.create');
    }
}
