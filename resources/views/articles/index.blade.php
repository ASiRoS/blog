@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">All articles</div>
            <div class="card-body">
                <div class="articles">
                    @foreach($articles as $article)
                        <article>
                            <a class="name" href="{{ route('articles.show', ['article' => $article]) }}">{{ $article->name }}</a>
                        </article>
                    @endforeach
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection