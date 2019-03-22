@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">View article: {{ $article->id  }}</div>
            <div class="card-body">
                <article>
                    <p class="name"><b>Article Name:</b> {{ $article->name}}</p>
                    <p class="description"><b>Article Description: </b>{{ $article->description }}</p>

                    <form action="{{ route('articles.destroy', ['article' => $article]) }}" method="POST">
                        @method('delete')

                        @csrf
                        <button>Delete article.</button>
                    </form>
                </article>
            </div>
        </div>
    </div>
@endsection