@extends('layouts.app')

@section('page-title', ucfirst('create'))

@section('content')
   <h1 class="py-5 fw-bold text-danger display-1">Benvenuto in Create</h1>
      <form method="POST" action="{{ route('comics.store') }}">

         @csrf

         <div class="mb-3">
            <label for="thumb" class="form-label">Url dell'immagine:</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
         </div>

         <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" class="form-control" id="title" name="title">
         </div>

         <div class="mb-3">
            <label for="type" class="form-label">Tipo di comic:</label>
            <input type="text" class="form-control" id="type" name="type">
         </div>

         <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="text" class="form-control" id="price" name="price">
         </div>

         <div class="mb-3">
            <label for="sale_date" class="form-label">Data di rilascio:</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
         </div>

         <div class="mb-3">
            <label for="series" class="form-label">Serie:</label>
            <input type="text" class="form-control" id="series" name="series">
         </div>

         <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description"></textarea>
         </div>

         <button type="submit" class="btn btn-primary">Salva</button>
      </form>
@endsection
