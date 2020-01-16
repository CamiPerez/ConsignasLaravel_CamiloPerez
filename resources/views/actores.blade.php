@extends('layouts.mainLayout')
 @section('content')
   <div>
     <div class="listado">
           <h1>Actores</h1>

             @foreach ($actors as $actor)

              <a href="/actores/{{$actor->id}}"><h3>{{$actor->first_name}} {{$actor->last_name}}</h3></a>
             @endforeach
               {{ $actors->links() }}
     </div>
       <div class="row detalle">
           <div class="col-12 col-sm-12 col-md-12 col-lg-12 crear">
               <form class="" action="/actores/nuevo" method="get">
               <input class="btn btn-dark button2" type="submit" name="boton" value="Agregar Nuevo">
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
