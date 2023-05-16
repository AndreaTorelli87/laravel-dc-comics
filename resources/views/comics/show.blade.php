
      @extends("layouts.app")

      @section("page-title", ucfirst("show"))

      @section("content")
      <h1 class="fw-bold text-danger display-1">Benvenuto in show</h1>
      <a href="{{route('comics.index')}}" class="btn btn-secondary">Torna alla lista</a>
      <div class="card align-items-center">
         <img src="{{$comic->thumb}}" class="card-img-top w-25" alt="{{$comic->title}}">
         <div class="card-body">
            <h5 class="card-title">{{$comic->title}}</h5>
            <span>Price: {{$comic->price}} - Data di uscita: {{$comic->sale_date}}</span>
            <span>Serie: {{$comic->series}} - Tipo: {{$comic->type}}</span>
            <p class="card-text">{{$comic->desctiption}}</p>
         </div>
      </div>
         
      @endsection
