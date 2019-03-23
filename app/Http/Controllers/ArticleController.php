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
        $article = new Article();

        return $this->save($article, $request);
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        return $this->save($article, $request);
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'You have deleted your article successfully.');
    }

    private function save(Article $article, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Article::create($article, $request->all());

        return redirect()->route('articles.show', ['article' => $article]);
    }
}
