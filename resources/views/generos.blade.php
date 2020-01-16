@extends('layouts.mainLayout')

@section('content')

   <div>
     <div class="listado">
           <h1>Géneros</h1>
             @foreach ($genres as $genre)

              <a href="/generos/{{$genre->id}}"><h3>{{$genre->name}}</h3></a>
             @endforeach
               {{ $genres->links() }}
     </div>
       </section>


     </div>
@endsection
