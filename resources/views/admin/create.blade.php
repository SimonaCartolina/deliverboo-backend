@extends('layouts.app')
@section('title', 'Create')
@section('custom-stylesheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-around">
        <div class="col-8 my-5">
            <h1 class="fw-bolder" style="color:black">
                Make your restaurant!
            </h1>
        </div>
        <form class="col-8 bg-light p-3 rounded bg-white " action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">


                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="image" class="form-label">
                        Image
                    </label>
                    {{-- <input type="text" class="form-control" id="image" name="image"> --}}
                    <input type="file" name="image" id="image" class="form-control" placeholder="Upload your image" value="{{ old('image', '') }}">
                </div>

            </div>

            <div class="mb-3">

                <label for="name" class="form-label">
                    Name:
                </label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="opening_time" class="form-label">
                    Opening_time
                </label>
                <input type="text" class="form-control" id="opening_time" name="opening_time">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">
                    Address:
                </label>
                <input type="text" class="form-control" id="address" name="address">
            </div>

            <div class="mb-3">
                <label for="P_IVA" class="form-label">
                    P_IVA:
                </label>
                <input type="text" class="form-control" id="P_IVA" name="P_IVA">
            </div>

            <button type="submit" class="btn btn-success">
                Create
            </button>

            <a href="{{ route('admin.index')}}" class="btn btn-danger">
                Delete
            </a>
        </form>
    </div>
</div>
@endsection