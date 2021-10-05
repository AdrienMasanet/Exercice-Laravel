@extends('partials/base')

@section('title', 'Auteurs')

@section('content')

    <h4 class="text-center mt-3 mb-1">Page des auteurs</h4>

    <hr>

    <div class="container d-flex justify-content-start flex-wrap">
        @foreach ($authors as $author)
            <div class="card m-4" style="width: 20%; height: 200px;">
                <a class="h-100 d-flex justify-content-center align-items-center" href="{{ url('authors/' . $author->slug) }}">
                    <p class="m-0">{{ $author->name }}</p>
                </a>
            </div>
        @endforeach
    </div>

@endsection
