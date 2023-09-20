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

    <div class="row d-flex flex-row m-auto justify-content-center">
        @foreach ($restaurantsList as $restaurant)

        <div class="card px-3 py-3 col-4 m-4" style="width:18rem;">

            <div class="card-body">

                <h5 class="card-title">{{ $restaurant->name  }}</h5>

                @if (str_starts_with($restaurant->image, 'http' ))
                <img src="{{ $restaurant->image }}" alt="{{ $restaurant->name }}">
                @else
                <img src="{{ asset('storage/' . $restaurant->image) }}" alt="{{ $restaurant->name }}">
                @endif


                <!-- <img src="{{$restaurant->image}}" alt=""> -->
                <p class="card-text"> {{ $restaurant->address  }}</p>

            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $restaurant->opening_time  }}</li>
                <li class="list-group-item">{{ $restaurant->P_IVA  }}</li>
            </ul>

            <button class="button-container">
                <a href="{{ route('guest.menu')}}">Vedi menu</a>
            </button>

            <a class="btn btn-sm btn-success me-2 my-4" href="{{ route('admin.edit', $restaurant->id) }}">
                <i class="fa-solid fa-pen"></i>
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