@extends('layouts.mainLayout')
 @section('content')
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     </ol>
     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
     <div class="carousel-inner" role="listbox">
       <!-- Primer slide -->
       <div class="carousel-item active">
         <img src="{{asset('storage/Slider-01.jpg')}}" alt="">
         <div class="carousel-caption">
           <h2>Avengers</h2>
           </div>
       </div>
       <!-- Segundo slide -->
       <div class="carousel-item">
         <img src="{{asset('storage/Slider-02.jpg')}}" alt="">
         <div class="carousel-caption">
           <h2>El Conjuro 2</h2>
         </div>
       </div>
       <!-- Tercer slide -->
       <div class="carousel-item">
       <img src="{{asset('storage/Slider-03.jpg')}}" alt="">
         <div class="carousel-caption">
           <h2>Once Upon a Time in Hollywood</h2>
         </div>
       </div>
     </div>

   </div>

  <section id="generos">
    <h1 class= "generos">Géneros</h1>
    <ul class="row principal todas">
    @foreach ($genres as $genre)
      <li class="col-6 col-sm-6 col-md-4 col-lg-2">
      <a href="{{ url('generos/' . $genre->id) }}">
        <h3>{{$genre->name}}</h3>
      </a>
      </li>
    @endforeach
    </ul>
  </section>
 @endsection
