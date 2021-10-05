<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\User;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {
        return view('authors/index', [
            "authors" => User::all()
        ]);
    }

    public function show($slugName)
    {

        $author = User::where('slug', $slugName)->first();

        $articles = $author->articles()->get();

        return view('authors/show', [
            "author" => $author,
            "articles" => $articles,
        ]);
    }
}
