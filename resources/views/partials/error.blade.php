@if ($errors->any())
    <div class="alert alert-danger container display-6 fw-bold my-3">
        <ul class="mb-0 ">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success text-center display-4 fw-bold my-3">
        {{ session('status') }}
    </div>
@endif
