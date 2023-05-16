@extends('layouts.app')

@section('page-title', ucfirst('index'))

@section('content')
   <h1 class="py-5 fw-bold text-danger display-1">Benvenuto in index</h1>
   <div class="row">
      @foreach ($comics as $comic)
         <div class="col-3">
            <div class="card">
               <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
               <div class="card-body">
                  <a class="btn btn-primary" href="{{route("comics.show", ["comic" => $comic->id])}}">Vedi</a>
                  <h5 class="card-title">{{$comic->title}}</h5>
                  <span>Price: {{$comic->price}} - Data di uscita: {{$comic->sale_date}}</span>
                  <span>Serie: {{$comic->series}} - Tipo: {{$comic->type}}</span>
                  <p class="card-text">{{$comic->desctiption}}</p>
               </div>
            </div>
         </div>
      @endforeach
   </div>
@endsection
