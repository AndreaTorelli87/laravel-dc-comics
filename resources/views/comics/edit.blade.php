@extends('layouts.app')

@section('page-title', ucfirst('edit'))

@section('content')
   <h1 class="py-5 fw-bold text-danger display-1">Benvenuto in Edit</h1>
      <form method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}">

         @csrf
         @method("PUT")

         <div class="mb-3">
            <label for="thumb" class="form-label">Url dell'immagine:</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" value="{{old('thumb', $comic->thumb)}}" name="thumb">
            @error('thumb')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
         </div>

         <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{old('title', $comic->title)}}" name="title">
            @error('title')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
         </div>

         <div class="mb-3">
            <label for="type" class="form-label">Tipo di comic:</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" value="{{old('type', $comic->type)}}" name="type">
            @error('type')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
         </div>

         <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{old('price', $comic->price)}}" name="price">
            @error('price')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
         </div>

         <div class="mb-3">
            <label for="sale_date" class="form-label">Data di rilascio:</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}" name="sale_date">
            @error('sale_date')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
         </div>

         <div class="mb-3">
            <label for="series" class="form-label">Serie:</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" value="{{old('series', $comic->series)}}" name="series">
            @error('series')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
         </div>

         <div class="mb-3">
            <label for="desctiption" class="form-label">Descrizione</label>
            <textarea class="form-control @error('desctiption') is-invalid @enderror" id="desctiption" name="desctiption">{{old('desctiption', $comic->desctiption)}}</textarea>
            @error('desctiption')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
         </div>

         <button type="submit" class="btn btn-primary">Salva</button>
      </form>
@endsection
