<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        return $this->save($request);
    }

    public function show(Article $article)
    {
        return view('articles.view', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, Request $request)
    {
        return $this->save($request, $article);
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index');
    }

    private function save(Request $request, Article $article = null)
    {
        if($article === null) {
            $article = new Article();
        }

        $article->fill($request->all());
        $article->save();

        return redirect()->route('articles.show', ['article' => $article]);
    }
}
