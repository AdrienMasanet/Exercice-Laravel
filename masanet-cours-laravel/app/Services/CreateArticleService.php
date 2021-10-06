<?php

namespace App\Services;

use App\Models\Article;
use App\Models\User;
use App\Http\Requests\ArticleCreateRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class CreateArticleService
{
    public static function createArticle(ArticleCreateRequest $request)
    {

        if ($request->hasFile('article_image')) {
            $imageName = $request->file('article_image')->getClientOriginalName();
            echo $imageName . $imageExtension;
            die();
            $request->file('article_image')->storeAs(resource_path('uploads/articles_images'), Str::slug(Carbon::now()->toDateTimeString()) . "_" . $imageName);
            dd('ookazofkaozf');
        }

        dd($request->all());

        Article::create([
            'title' => $request->article_title,
            'slug' => Str::slug($request->article_title),
            'description' => $request->article_description,
            'content' => $request->article_content,
            'image_url' => $request->article_image,
            'anchor_url' => $request->article_url
        ]);
    }
}
