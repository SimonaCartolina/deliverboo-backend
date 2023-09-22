@extends('layouts.app')

@section('content')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@dump($restaurant->name);
@dump($restaurant->id);
<div>
        <h1>
            Restaurant:  {{ $restaurant->id }} -- {{ $restaurant->name }}
        </h1>
</div>


<script>
    
</script>
@endsection