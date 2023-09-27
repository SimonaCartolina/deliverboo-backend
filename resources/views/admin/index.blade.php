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
                MY RESTAURANT:
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




    <div class="px-3 py-3 col-12">

        <div class="card-body d-flex">
            @if ($restaurant)
            <div class="immagine-profile mr-3 col-8">
                @if(str_starts_with($restaurant->image, 'https'))
                <img src="{{$restaurant->image}}" alt="{{$restaurant->id}}">
                @else
                <img src="{{asset('storage/' . $restaurant->image)}}" alt="{{$restaurant->id}}">
                @endif

            </div>
            <div class="container-profile col-4">
                <h5 class="card-title fw-bolder" style="color: #262c2cf7">{{ $restaurant->name  }}</h5>

                <p class="card-text fw-bold mt-3" style="color:#618B35"> {{ $restaurant->address  }}</p>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item fw-bold" style="color:#618B35">{{ $restaurant->opening_time  }}</li>
                    <li class="list-group-item fw-bold" style="color:#618B35">{{ $restaurant->P_IVA  }}</li>
                </ul>
                <div>

                    <a href="{{ route('admin.menu.menu')}}" class="btn btn-sm btn-success">

                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2rem" viewBox="0 0 512 512" style="fill: #FFFFFF">
                            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                        </svg>
                    </a>


                    <a class="btn-sm me-2 my-4 btn btn-warning" href="{{ route('admin.edit', $restaurant->id) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" style="fill: #ffffff" height="1.2rem" viewBox="0 0 512 512">
                            <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                        </svg>
                    </a>
                </div>

            </div>


            @else
            <p>Nessun ristorante creato.</p>
            @endif
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