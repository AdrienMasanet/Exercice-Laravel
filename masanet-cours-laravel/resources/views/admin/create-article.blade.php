@extends('partials/admin-base')

@section('title', 'Créer un article')

@section('content')

    <h4 class="text-center mt-3 mb-1">Création d'un article</h4>

    <hr>

    <div class="container col-lg-6">

        <form action="{{ URL::route('admin.post-article') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="article_auteur">Auteur</label>
                <select class="form-control" id="article_auteur" name="article_auteur">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="article_titre">Titre</label>
                <input type="text" class="form-control" id="article_titre" name="article_titre" placeholder="Écrivez le titre de votre article ici">
            </div>

            <div class="form-group">
                <label for="article_description">Description</label>
                <input type="text" class="form-control" id="article_description" name="article_description" placeholder="Écrivez la description de votre article ici">
            </div>

            <div class="form-group">
                <label for="article_content">Contenu</label>
                <textarea class="form-control" id="article_content" name="article_content" rows=10 style="resize:none;" placeholder="Écrivez le contenu de votre article ici"></textarea>
            </div>

            <div class="form-group">
                <label for="article_image">Image mise en avant</label>
                <input type="file" class="form-control-file" id="article_image" name="article_image">
            </div>

            <div class="form-group">
                <label for="article_content">Lien URL de l'article</label>
                <input type="text" class="form-control" id="article_url" name="article_url" placeholder="Vous pouvez écrire ici une adresse URL à laquelle l'article doit mener">
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary my-2">Créer l'article</button>
            </div>

        </form>

    </div>

@endsection
