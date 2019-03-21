@extends('layout')

@section('content')
    <form action="{{ route('articles.store') }}" method="POST">
        <fieldset>
            <legend>Add article</legend>
            <div class="form-group">
                <label for="name">Article's name:</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="description">Article's description:</label>
                <textarea name="description" class="form-control" id="description"></textarea>
            </div>
            <button type="submit">Add article</button>
        </fieldset>
        @csrf
    </form>
@endsection