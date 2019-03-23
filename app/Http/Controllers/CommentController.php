<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;

class CommentController
{
    public function store(Article $article, Request $request)
    {
        $request->validate([
            'text' => 'required',
        ]);

        $comment = new Comment();
        $comment->fill($request->all());
        $article->comments()->save($comment);

        return redirect()->route('articles.show', compact('article'));
    }
}