@extends('layouts.app')

@section('page-title', ucfirst('edit'))

@section('content')
   <h1 class="py-5 fw-bold text-danger display-1">Benvenuto in Edit</h1>
      <form method="POST" action="{{ route('comics.store', ['comic' => $comic->id]) }}">

         @csrf

         <div class="mb-3">
            <label for="thumb" class="form-label">Url dell'immagine:</label>
            <input type="text" class="form-control" id="thumb" value="{{$comic->thumb}}" name="thumb">
         </div>

         <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" class="form-control" id="title" value="{{$comic->title}}" name="title">
         </div>

         <div class="mb-3">
            <label for="type" class="form-label">Tipo di comic:</label>
            <input type="text" class="form-control" id="type" value="{{$comic->type}}" name="type">
         </div>

         <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="text" class="form-control" id="price" value="{{$comic->price}}" name="price">
         </div>

         <div class="mb-3">
            <label for="sale_date" class="form-label">Data di rilascio:</label>
            <input type="text" class="form-control" id="sale_date" value="{{$comic->sale_date}}" name="sale_date">
         </div>

         <div class="mb-3">
            <label for="series" class="form-label">Serie:</label>
            <input type="text" class="form-control" id="series" value="{{$comic->series}}" name="series">
         </div>

         <div class="mb-3">
            <label for="desctiption" class="form-label">Descrizione</label>
            <textarea class="form-control" id="desctiption" name="desctiption">{{$comic->desctiption}}</textarea>
         </div>

         <button type="submit" class="btn btn-primary">Salva</button>
      </form>
@endsection
