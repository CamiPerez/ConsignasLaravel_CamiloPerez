@extends('layouts.mainLayout')
 @section('content')
   <div class="col-8 buscador">
     <div class="row">

             @foreach ($actors as $actor)

              <a href="/actores/{{$actor->id}}"><h3 class="card-title"><b>{{$actor->first_name}} {{$actor->last_name}}</b></h3></a>
             @endforeach
               {{ $actors->links() }}
     </div>
       <div class="row detalle">
           <div class="col-12 col-sm-12 col-md-12 col-lg-12 crear">
               <form class="" action="/actores/nuevo" method="get">
               <input class="button2" type="submit" name="" value="Agregar Nuevo">
               </form>
           </div>
       </div>
       {{-- <div class="row detalle">
           <div class="col-12 col-sm-12 col-md-12 col-lg-12 crear">
               <form class="" action="/events/new" method="get">
               <input type="hidden" name="id" value="">
               <input class="button2" type="submit" name="" value="Crear Evento">
               </form>
           </div>
       </div> --}}
 @endsection
