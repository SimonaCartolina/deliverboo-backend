@extends('layouts.app')
@section('title', 'Admin Add New')
@section('custom-stylesheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-around">
        <div class="col-8 my-5">
            <h1 style="color:black" class="fw-bolder ">
                Modify {{ $restaurant->id }}
            </h1>
        </div>
        <form class="col-8 p-3 rounded bg-warning" action="{{ route('admin.update', $restaurant->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">

                <label for="image" placeholder="Upload image">
                    upload an image
                </label>
                <input type="file" name="image" id="image" class="image" placeholder="upload image">

            </div>

            <div class="mb-3">
                <label for="name" class="form-label">
                    Name:
                </label>
                <input type="text" class="form-control" id="name" name="name" value='{{ $restaurant->name }}' style="background-color:  #E7A85C;">
            </div>

            <div class="mb-3">
                <label for="opening_time" class="form-label">
                    Opening time:
                </label>
                <input type="text" class="form-control" id="opening_time" name="opening_time" value='{{ $restaurant->opening_time }}' style="background-color:  #E7A85C;">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">
                    Address:
                </label>
                <input type="text" class="form-control" id="address" name="address" value='{{ $restaurant->address }}' style="background-color:  #E7A85C;">
            </div>

            <div class="mb-3">
                <label for="P_IVA" class="form-label">
                    P iva:
                </label>
                <input type="text" class="form-control" id="P_IVA" name="P_IVA" value='{{ $restaurant->P_IVA }}' style="background-color:  #E7A85C;">
            </div>



            <button type="submit" class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" style="fill: #ffffff" height="1em" viewBox="0 0 448 512">
                    <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                </svg>
            </button>

            <a href="{{ route('admin.index')}}" class="btn btn-danger my-4">
                <svg xmlns="http://www.w3.org/2000/svg" style="fill: #ffffff" height="1em" viewBox="0 0 384 512">
                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </a>
        </form>
    </div>
</div>
@endsection