@extends ('main');

@section ('article');
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>{{$article->title}}</h2>
                <span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>
            <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
            <p>
                {{$article->description}}
            </p>
        </div>
    </div>
</div>
@endsection;
