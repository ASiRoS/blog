<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;

class CommentController
{
    public function store(Article $article, Request $request)
    {
        $request->validate(Comment::validations());

        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->fill($request->all());
        $article->comments()->save($comment);

        return redirect()->route('articles.show', compact('article'));
    }
}