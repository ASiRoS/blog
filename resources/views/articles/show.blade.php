@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View article: {{ $article->name  }}</div>
                <div class="card-body">
                    <article>
                        <p class="autho"><b>Article Author:</b> {{ $article->user->name }}</p>
                        <p class="description"><b>Article Description: </b>{{ $article->description }}</p>
                        @if(Auth::user())
                            <form action="{{ route('articles.destroy', ['article' => $article]) }}" method="POST">
                                @method('delete')

                                @csrf
                                <button>Delete article.</button>
                            </form>
                        @endif
                    </article>
                </div>
            </div>
        </div>

        @if(Auth::user())
            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header">Add comment</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('comments.store', ['article' => $article]) }}">
                            @include('layouts.form-errors')

                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <textarea name="text" cols="30" rows="10" class="form-control"></textarea>
                                    @if ($errors->has('text'))
                                        <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('text') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <button class="btn btn-primary">Add comment</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Comments</div>
                <div class="card-body">
                    @foreach($article->comments as $comment)
                        <div class="card mt-2">
                            <div class="card-header">Comment by: {{ $comment->user->name }}</div>
                            <div class="card-body">{{ $comment->text  }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection