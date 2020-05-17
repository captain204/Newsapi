@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Top News Across the world</h1>
          <p class="lead">top news from selected countries across the world</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-2">
            @foreach ($articles as $article)
            <h1 class="display-7 text-center"><a href="{{$article->url}}">{{$article->title}}</a></h1><br>
                    <img src="{{$article->urlToImage}}" class="img-thumbnail"><br>
                    <p>{{$article->content}}<p>
                    {{$article->author}}
            @endforeach
        </div>
    </div>

</div>
@endsection
