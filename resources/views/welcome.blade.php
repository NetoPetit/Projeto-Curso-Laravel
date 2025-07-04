@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-containers" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/event_placeholder.jpg" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">10/09/2020</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participants">X participantes</p>
                        <a href="#" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--Comentário do HTML exemplo visível-->
    {{--Comentário do Blade exemplo não visível--}}
@endsection
