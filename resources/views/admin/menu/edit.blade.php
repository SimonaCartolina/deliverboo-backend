@extends('layouts.app')
@section('title', 'update')
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
        <form class="col-8 bg-light p-3 rounded bg-white" action="{{ route('admin.menu.update', $plate->slug) }}" method="POST">
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
                    <input type="text" class="form-control" id="description" name="description" value='{{ $plate->description }}'>
                </div>
            </div>

            <button type="submit" class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" style="fill: #ffffff">
                    <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                </svg>
            </button>



            <a class="btn btn-danger me-2 my-4" href="{{ route('admin.menu.menu') }}">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512" style="fill: #ffffff;">
                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </a>
        </form>
    </div>
</div>
@endsection