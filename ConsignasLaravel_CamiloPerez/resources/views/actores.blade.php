@extends('layouts.mainLayout')
 @section('content')
   <div class="col-8 buscador">
     <div class="row">

             @foreach ($actors as $actor)

              <a href="/actores/{{$actor->id}}"><h3 class="card-title"><b>{{$actor->first_name}} {{$actor->last_name}}</b></h3></a>
             @endforeach
               {{ $actors->links() }}
     </div>
       </section>


     </div>
 @endsection
