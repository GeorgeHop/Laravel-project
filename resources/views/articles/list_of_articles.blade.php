@extends ('main');

@section('list_of_articles');
<div id="wrapper">
    <div id="page" class="container">
@foreach($articles as $article)
        <div id="content">
            <a href='{{ route('articles.show', $article) }}' class="article-link">
                <div class="title">
                    <h2>{{$article->title}}</h2>
                    <span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>
                <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                <p>
                    {{$article->description}}
                </p>
            </a>
        </div>
@endforeach
    </div>
</div>
@endsection;
