@extends('partials/admin-base')

@section('title', 'Créer un article')

@section('content')

    <h4 class="text-center mt-3 mb-1">Création d'un article</h4>

    <hr>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Date de création</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->title }}</td>
                        @if ($article->user)
                            <td><a href="{{ url('authors/' . $article->user->slug) }}">{{ $article->user->name }}</a></td>
                        @else
                            <td>Inconnu</td>
                        @endif
                        <td>{{ $article->created_at }}</td>
                        <td class="d-flex"><a class="btn btn-primary m-1" href="todo">Éditer</a><a class="btn btn-danger m-1" href="todo">Supprimer</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
