@extends('layout')

@section('content')
    <article>
        <p class="name"><b>Article Name:</b> {{ $article->name}}</p>
        <p class="description"><b>Article Description: </b>{{ $article->description }}</p>

        <form action="{{ route('articles.destroy', ['article' => $article]) }}" method="POST">
            @method('delete')

            @csrf
            <button>Delete article.</button>
        </form>
    </article>
    <hr>
@endsection