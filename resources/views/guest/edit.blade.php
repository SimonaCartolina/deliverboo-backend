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
                Modify {{ $plate->slug }}
            </h1>
        </div>
        <form class="col-8 bg-light p-3 rounded bg-white" action="{{ route('guest.update', $plate->id) }}" method="POST">
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
                <input type="text" class="form-control" id="name" name="name" value='{{ $plate->name }}'>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">
                    Description:
                </label>
                <input type="text" class="form-control" id="description" name="description" value='{{ $plate->description }}'>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">
                    Price:
                </label>
                <input type="text" class="form-control" id="price" name="price" value='{{ $plate->price }}'>
            </div>



            <div class="d-flex justify-content-between my-4">
                <div class="mb-3">
                    <label for="description" class="form-label">
                        Description
                    </label>
                    <input type="text" class="form-control" id="description" name="description" value='{{ $wedding->description }}'>
                </div>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-check"></i>
            </button>

            <a class="btn btn-sm btn-success me-2 my-4" href="{{ route('guest.edit', $plate->id) }}">
                <i class="fa-solid fa-pen"></i>
            </a>
        </form>
    </div>
</div>
@endsection