<header>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
         <a class="navbar-brand fs-3 fw-bold border border-4 rounded-3 p-2" href="/">{{ucfirst("laravel-dc-comics")}}</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link {{Route::currentRouteName() == "home"?"border-bottom border-4 border-warning text-black":""}}" href="/">Home</a>
               </li>
               {{-- @foreach ($data[0] as $link)
               <li class="nav-item">
                  <a class="nav-link {{Route::currentRouteName() == $link?"border-bottom border-4 border-warning text-black":""}}" href="/{{ $link }}">{{ ucfirst($link) }}</a>
               </li>
               @endforeach --}}
            </ul>
         </div>
      </div>
   </nav>
</header>
