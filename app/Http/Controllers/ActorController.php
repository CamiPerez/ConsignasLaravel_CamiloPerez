<?php

namespace App\Http\Controllers;
use App\Actor;

use Illuminate\Http\Request;

class ActorController extends Controller
{
  public function index(){
      $actors = Actor::orderBy('last_name')->paginate(10);
      return view("actores")->with("actors", $actors);
  }

  public function show(Actor $actor){
    return view("detalleActor")->with("actor", $actor);
  }

  public function create(){
    // $this->authorize('create', Actor::class);

      return view('actors.create');

  }

  public function store(Request $request)
  {
      $reglas = [
        "first_name" => "required|string|min:1|max:255",
        "last_name" => "required|string|min:1|max:255",
        "rating"=> "required|numeric|min:0|max:10",
      ];
      $mensaje = [
        "required" => "El campo :attribute es obligatorio.",
        "min" => "El campo :attribute no puede ser menor a :min.",
        "max" => "El campo :attribute no debe mayor a :max.",
        "numeric" => "El campo :attribute debe ser numérico.",
      ];

      $this->validate($request, $reglas, $mensaje);
      $actorNuevo = new Actor();

      $actorNuevo->first_name=$request["first_name"];
      $actorNuevo->last_name=$request["last_name"];
      $actorNuevo->rating=$request["rating"];
      $actorNuevo->save();

      return view('/detalleActor')->with("actor", $actorNuevo);

      /*Event::create($request->all());*/


  }

}
