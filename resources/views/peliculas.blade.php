@extends('layouts.mainLayout')

@section('content')

   <div>
     <div class="listado">
           <h1>Películas</h1>
             @foreach ($movies as $movie)
              <a href="{{ url('peliculas/' . $movie->id)}}"><h3>{{$movie->title}}</h3></a>
             @endforeach
               {{ $movies->links() }}
     </div>
       </section>
     </div>
@endsection
