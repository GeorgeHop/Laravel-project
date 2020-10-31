@extends('main');

@section('edit_article');
<div id="wrapper">
    <div id="page" class="container">
        <h1>Update article</h1>

        <form method="POST" action="/articles/{{$article->id}}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="title">
                    Title
                </label>
                <div class="control">
                    <input
                        class="input"
                        type="text"
                        name="title"
                        id="title"
                        value="{{$article->title ? $article->title : old('title')}}"
                        required
                    />
                </div>
            </div>

            <div class="field">
                <label class="label" for="description">
                    Description
                </label>
                <div class="control">
                    <input
                        class="input"
                        type="text"
                        name="description"
                        id="description"
                        value="{{$article->description ? $article->description : old('description')}}"
                        required
                    />
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">
                    Excerpt
                </label>
                <div class="control">
                    <input
                        class="input"
                        type="text"
                        name="excerpt"
                        id="excerpt"
                        value="{{$article->excerpt ? $article->excerpt : old('excerpt')}}"
                        required
                    />
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection;
