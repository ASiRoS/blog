@extends('layout')

@section('content')
    <div class="articles">
        @foreach($articles as $article)
            <article>
                <a class="name" href="{{ route('articles.show', ['article' => $article]) }}">{{ $article->name }}</a>
            </article>
        @endforeach
        <hr>
    </div>
@endsection