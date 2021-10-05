@extends('partials/base')

@section('title', 'Article n°' . $article->id)

@section('content')

    <h1 class="text-center mt-3 mb-1">{{ $article->title }}</h1>

    <hr>

    <div class="col-3 text-center m-auto p-0">
        <a class="w-100" href="{{ $article->anchor_url }}">
            <img class="w-100 my-2" src="{{ $article->image_url }}" alt="" class="w-100 m-4 rounded">
        </a>
    </div>

    <p class="m-auto w-25 text-center"><em>{{ $article->description }}</em></p>

    <br>

    @if ($article->user)
        <p class="text-center">Article rédigé par <a href="{{ url('author/' . $article->user->id) }}">{{ $article->user->name }}</a></p>
    @else
        <p class="text-center">Article rédigé par un auteur anonyme</a></p>
    @endif

    <br>

    <div class="m-auto w-25 d-flex justify-content-around">

        @if ($article->id <= 1) <a class="btn btn-primary col-5" href="{{ url('articles/' . count($articles)) }}">Précédent</a>
        @else
            <a class="btn btn-primary col-5" href="{{ url('articles/' . ($article->id - 1)) }}">Précédent</a>
        @endif

        @if ($article->id >= count($articles) - 1)
            <a class="btn btn-primary col-5" href="{{ url('articles/1') }}">Suivant</a>
        @else
            <a class="btn btn-primary col-5" href="{{ url('articles/' . ($article->id + 1)) }}">Suivant</a>
        @endif

    </div>


@endsection
