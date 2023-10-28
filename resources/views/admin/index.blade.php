@extends('layouts.app')
@section('title', 'index')
@section('custom-stylesheets')



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<section style="height:90vh">

    <div class="py-5 main-index" style="position:relative; left:150%; width:550px">

        @if( session('created'))
        <div class="col-4">
            <div class="alert alert-success">
                <i class="fa-solid fa-circle-exclamation"></i> {{ session('created') }} has been succesfully created.
            </div>
        </div>
        @endif

        <div class="d-flex flex-sm-column flex-lg-row">

            <div class="card-body row">
                @if ($restaurant)
                <div class="immagine-profile col-lg-4 col-sm-12 p-2">
                    @if(str_starts_with($restaurant->image, 'https'))
                    <img src="{{$restaurant->image}}" alt="{{$restaurant->id}}">
                    @else
                    <img src="{{asset('storage/' . $restaurant->image)}}" alt="{{$restaurant->id}}">
                    @endif

                </div>
                <div class="col-lg-8 col-sm-6 p-2">
                    <h5 class="card-title fw-bolder fs-1" style="color: #e7a85c">{{ $restaurant->name  }}</h5>

                    <p class="card-text fw-bold mt-3 fs-3" style="color:#e7a85c"> {{ $restaurant->address  }}</p>

                    <ul class="list-group list-group-item-warning">
                        <li class="list-group-item fw-bold" style="color:#E7A85C">Orario di apertura: {{ $restaurant->opening_time  }}</li>
                        <li class="list-group-item fw-bold" style="color:#E7A85C">P-IVA: {{ $restaurant->P_IVA  }}</li>
                        <li class="list-group-item fw-bold" style="color:#E7A85C">categoria Ristorante: {{ $restaurant->category }}</li>
                    </ul>
                    <div>

                        <a href="{{ route('admin.menu.menu')}}" class="btn btn-sm btn-success">
                            <span>vedi menù</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.2rem" viewBox="0 0 512 512" style="fill: #FFFFFF">
                                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                        </a>


                        <a class="btn-sm me-2 my-4 btn btn-warning" href="{{ route('admin.edit', $restaurant->id) }}">
                            <span>aggiorna ristorante</span>
                            <svg xmlns="http://www.w3.org/2000/svg" style="fill: #ffffff" height="1.2rem" viewBox="0 0 512 512">
                                <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                            </svg>
                        </a>
                    </div>

                </div>


                @else
                <p class="fw-bold fs-3" style="position:relative; left:50%; font-family: 'Agbalumo';">No restaurant created yet.</p>
                @endif
            </div>
        </div>

    </div>
</section>



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

<style>
    .immagine-profile {
        width: 5rem;
        height: 5rem;
        border-radius: 50%;
    }
</style>

@endsection