<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view ('events.create');
    }

    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        /*image upload*/


        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
}
