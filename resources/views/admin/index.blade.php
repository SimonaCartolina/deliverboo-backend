@extends('layouts.app')
@section('title', 'index')
@section('custom-stylesheets')



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<div class="container py-3">
    <div class="row">
        <div class="col-12">
            <h1 class="m-3 my-5 fw-bolder">
                Our restaurants:
            </h1>
        </div>
    </div>

    <div class="row">
        @if( session('created'))
        <div class="col-4">
            <div class="alert alert-success">
                <i class="fa-solid fa-circle-exclamation"></i> {{ session('created') }} has been succesfully created.
            </div>
        </div>
        @endif
    </div>


    <div class="row d-flex flex-row m-auto justify-content-center">
        @foreach ($restaurantsList as $restaurant)

        <div class="card px-3 py-3 col-4 m-4" style="width:18rem;">

            <div class="card-body">

                @if(str_starts_with($restaurant->image, 'https'))
                <img src="{{$restaurant->image}}" alt="{{$restaurant->id}}">
                @else
                <img src="{{asset('storage/' . $restaurant->image)}}" alt="{{$restaurant->id}}">
                @endif

                <h5 class="card-title">{{ $restaurant->name  }}</h5>

                <p class="card-text"> {{ $restaurant->address  }}</p>

            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $restaurant->opening_time  }}</li>
                <li class="list-group-item">{{ $restaurant->P_IVA  }}</li>
            </ul>

            <button class="button-container">
                <a href="{{ route('admin.menu.menu')}}">Vedi menu</a>
            </button>

            <a class="btn btn-sm btn-success me-2 my-4" href="{{ route('admin.edit', $restaurant->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" style="fill: #ffffff" height="1em" viewBox="0 0 512 512">
                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                </svg>
            </a>
        </div>
        @endforeach
    </div>
</div>
</div>


</div>

@endsection


@section('custom-script-tail')
<script>
    // intercettare un evento
    // individuare l'elemento che faccia triggerare il nostro evento
    // bloccare il comportamento naturale del nostro bottone/form
    // chiedere all'utente cosa vuole fare
    // se l'utente conferma allora cancellare, altrimenti non fare nulla

    const deleteFormElements = document.querySelectorAll('form.form-terminator');
    deleteFormElements.forEach(formElement => {
        formElement.addEventListener('submit', function(event) {
            event.preventDefault();
            if (userConfirm) {
                this.submit();
            }
        });
    });
</script>
@endsection