@extends('layout')

@section('content')
    <form action="{{ route('articles.update', ['article' => $article]) }}" method="POST">
        @method('put')
        <fieldset>
            <legend>Add article</legend>
            <div class="form-group">
                <label for="name">Article's name:</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $article->name }}">
            </div>
            <div class="form-group">
                <label for="description">Article's description:</label>
                <textarea name="description" class="form-control" id="description">{{ $article->description }}</textarea>
            </div>

            <button type="submit">Edit article</button>
        </fieldset>
        @csrf
    </form>
@endsection