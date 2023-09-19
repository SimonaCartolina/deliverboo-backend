@extends('layouts.app')
@section('title', 'menu')
@section('custom-stylesheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<h1>Menù:</h1>
<div class="container d-flex flex-wrap">


    @foreach ($platesList as $plate)
    <div class="card my-4 mx-4" style="width:22rem;">
        <ul>
            <img src="{{$plate->image}}" alt="">
            <li>
                <h2>{{ $plate->name }}</h2>
                <p>{{ $plate->description }}</p>
                <p>Prezzo: ${{ $plate->price }}</p>
                <p>Prezzo: ${{ $plate->id_restaurant }}</p>
            </li>
        </ul>
    </div>
    @endforeach

</div>
@endsection