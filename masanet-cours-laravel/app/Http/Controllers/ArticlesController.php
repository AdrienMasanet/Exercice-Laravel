<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    private $articles;

    public function __construct()
    {
        $this->articles = Article::all();
    }

    public function index()
    {
        return view('articles/index', [
            "articles" => $this->articles
        ]);
    }

    public function show($id)
    {

        if ($id > count($this->articles)) {
            return redirect()->route('articles.show', ['id' => count($this->articles)]);
        } else if ($id == 0) {
            return redirect()->route('articles.show', ['id' => 1]);
        }

        return view('articles/show', [
            "article" => Article::find($id),
            "articles" => $this->articles,
        ]);
    }
}
