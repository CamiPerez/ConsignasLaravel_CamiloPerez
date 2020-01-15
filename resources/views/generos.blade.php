@extends('layouts.mainLayout')

@section('content')

   <div class="col-8 buscador">
     <div class="row">

             @foreach ($genres as $genre)

              <a href="/generos/{{$genre->id}}"><h3 class="card-title"><b>{{$genre->name}}</b></h3></a>
             @endforeach
               {{ $genres->links() }}
     </div>
       </section>


     </div>
@endsection
