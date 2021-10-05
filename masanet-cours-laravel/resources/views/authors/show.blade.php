@extends('partials/base')

@section('title', 'Auteurs')

@section('content')

    <h4 class="text-center mt-3 mb-1">Page de {{ $author->name }}</h4>

    @if ($articles)
        @if (count($articles) > 1)
            <p class="text-center">{{ count($articles) }} articles</p>
        @else
            <p class="text-center">Un article</p>
        @endif
    @else
        <p class="text-center">{{ $author->name }} n'a pas d'articles pour le moment</p>
    @endif

    <hr>

    @include('partials/articles-list')

@endsection
