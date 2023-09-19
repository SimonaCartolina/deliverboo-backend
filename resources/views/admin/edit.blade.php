@extends('layouts.app')
@section('title', 'Admin Add New')
@section('custom-stylesheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-around">
        <div class="col-8 my-5">
            <h1 style="color:white" class="fw-bolder">
                Modify {{ $restaurant->id }}
            </h1>
        </div>
        <form class="col-8 bg-light p-3 rounded bg-white" action="{{ route('admin.update', $restaurant->id) }}" method="POST">
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
                <input type="text" class="form-control" id="name" name="name" value='{{ $restaurant->name }}'>
            </div>

            <div class="mb-3">
                <label for="opening_time" class="form-label">
                    Opening time:
                </label>
                <input type="text" class="form-control" id="opening_time" name="opening_time" value='{{ $restaurant->opening_time }}'>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">
                    Address:
                </label>
                <input type="text" class="form-control" id="address" name="address" value='{{ $restaurant->address }}'>
            </div>

            <div class="mb-3">
                <label for="P_IVA" class="form-label">
                    P iva:
                </label>
                <input type="text" class="form-control" id="P_IVA" name="P_IVA" value='{{ $restaurant->P_IVA }}'>
            </div>



            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-check"></i>
            </button>

            <a href="{{ route('admin.index')}}" class="btn btn-danger my-4">
                <i class="fa-solid fa-xmark"></i>
            </a>
        </form>
    </div>
</div>
@endsection