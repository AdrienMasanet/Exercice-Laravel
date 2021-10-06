<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\User;
use App\Http\Requests\ArticleCreateRequest;
use App\Services\CreateArticleService;

class AdminController extends Controller
{
    private $users;
    private $articles;

    public function __construct()
    {
        $this->users = User::all();
        $this->articles = Article::all();
    }

    public function dashboard()
    {
        return view('admin/index');
    }

    public function createArticle()
    {
        return view('admin/create-article', [
            "authors" => $this->users
        ]);
    }

    public function storeArticle(ArticleCreateRequest $request)
    {
        CreateArticleService::createArticle($request);

        return view('admin/create-article');
    }

    public function listArticles()
    {
        return view('admin/list-articles', [
            "articles" => $this->articles
        ]);
    }
}
