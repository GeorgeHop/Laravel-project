@extends('main');

@section('create_article');
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Create new article</h1>

            <form method="POST" action="/articles">
                @csrf

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
                            value="{{ old('title') }}"
                            required
                        />
                        @error('title');
                            <p>{{$errors->first('title')}}</p>
                        @enderror;
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
                            value="{{ old('description') }}"
                            required
                        />
                        @error('description');
                        <p>{{$errors->first('description')}}</p>
                        @enderror;
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
                            value="{{ old('excerpt') }}"
                            required
                        />
                        @error('excerpt');
                        <p>{{$errors->first('excerpt')}}</p>
                        @enderror;
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
