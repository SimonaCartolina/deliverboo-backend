@extends('layouts.app')
@section('title', 'menu')
@section('custom-stylesheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')


<div class="container d-flex flex-wrap" style="height:90vh">
    <div class="col-12 ps-4" style="position:relative; left:100%;">
        <div>
            <h1 class="fw-bolder" style="color:#e7a85c">Menù:</h1>
            <button class="button-container btn btn-warning mt-2 p-2">
                <a href="{{ route('admin.menu.create')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" height="2rem" viewBox="0 0 448 512">
                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                    </svg>
                </a>
            </button>
        </div>
    </div>




    @if ($plates->count() > 0)
    @foreach($plates as $plate)
    <div class="special-card my-4 mx-4" style="width:22rem;">
        <ul>
            @if (str_starts_with($plate->image, 'http'))
            <img src="{{ $plate->image }}" alt="{{ $plate->name }}">
            @else
            <img src="{{ asset('storage/' . $plate->image) }}" alt="{{ $plate->name }}">
            @endif
            <li class="my-4">
                <h2>{{ $plate->name }}</h2>
                <p>{{ $plate->description }}</p>
                <p>Prezzo: {{ $plate->price }} €</p>
            </li>
            <li>
                <a class="btn btn-sm btn-success" style="width:3rem;" href="{{ route('admin.menu.edit', $plate->id) }}">

                    <svg xmlns="http://www.w3.org/2000/svg" style="fill: #ffffff" height="1em" viewBox="0 0 512 512">
                        <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                    </svg>

                </a>
            </li>
        </ul>

    </div>
    @endforeach

    @else
    <div class="my-4">
        <p>Nessun piatto nel menu.</p>

    </div>

    @endif

</div>
@endsection