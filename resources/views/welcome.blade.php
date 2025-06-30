@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')


    <h1>Titulo</h1>
    <img src="/img/banner.jpg" alt="Banner" srcset="">
    @if(10 > 15)
        <p>teste de condição</p>
    @endif
    <p>{{ $nome }}</p>
    @if($nome == "Neto")
        <p>O nome da variável é Neto</p>
    @else
        <p>O nome da variável não é Neto é {{ $nome }} e ele tem {{ $idade }} anos de idade, e trabalha como {{ $profissao }} e tem {{ $altura }} de altura.</p>
    @endif
    @for($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if($i == 2)
            <p>O i é igual a 2</p>
        @endif
    @endfor
    @foreach($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
        @if($nome == "Gabriel")
            <p>Achei o {{ $nome }}</p>
        @endif
    @endforeach
    @php
        $name = 'João';
        echo "$name";
    @endphp
    <!--Comentário do HTML exemplo visível-->
    {{--Comentário do Blade exemplo não visível--}}
@endsection
