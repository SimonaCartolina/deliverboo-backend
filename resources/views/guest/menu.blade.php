@extends('layouts.app')
@section('title', 'menu')
@section('custom-stylesheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')


<div class="container d-flex flex-wrap">
    <div class="col-12 ps-4">
        <div>
            <h1>Menù:</h1>
            <button class="button-container mt-2 p-2">
                <a href="{{ route('guest.create')}}">Create new plate</a>
            </button>
        </div>
    </div>




    @foreach ($platesList as $plate)
    <div class="card my-4 mx-4" style="width:22rem;">
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
                <p>{{ $plate->id_restaurant }}</p>
            </li>
            <li>
                <a class="btn btn-sm btn-success" style="width:3rem;" href="{{ route('guest.edit', $plate->slug) }}">

                    <svg xmlns="http://www.w3.org/2000/svg" style="fill: #ffffff" height="1em" viewBox="0 0 512 512">
                        <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                    </svg>

                </a>
            </li>
        </ul>

    </div>
    @endforeach

</div>
@endsection