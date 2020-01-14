<?php

namespace App\Http\Controllers;
use App\Actor;

use Illuminate\Http\Request;

class ActorController extends Controller
{
  public function index(){
      $actors = Actor::orderBy('last_name')->paginate(5);
      return view("actores")->with("actors", $actors);
  }

  public function show(Actor $actor){
    return view("detalleActor")->with("actor", $actor);
  }
}
