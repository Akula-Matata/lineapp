@extends('main')

@section('content')

    <div class="jumbotron">
        <h1 class="display-3">Это блог LineApp</h1>
        <hr class="my-4">
        <p class="lead">
            Лучший блог в истории человечества. Здесь вы можете зарегистрироваться, публиковать статьи, оставлять свои комментарии
        </p>
    </div>
    <br>

@foreach($posts as $post)

    <h4>{{ $post->title }}</h4>
    <p>{{ mb_substr(strip_tags($post->body), 0, 300) }}{{ mb_strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
    <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Читать далее</a>
    <br>
    <br>
    <br>

@endforeach

@endsection