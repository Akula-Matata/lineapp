@extends('main')

@section('content')


<div class="row">
	<div class="col-md-8  ml-auto mr-auto">
		<h1 class="display-3">Блог</h1>
	</div>
</div>

<br>

@foreach ($posts as $post)

<div class="row">
	<div class="col-md-8 ml-auto mr-auto">
		<h4>{{ $post->title }}</h4>
		<p>{{ mb_substr(strip_tags($post->body), 0, 300) }}{{ mb_strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
		<a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Читать далее</a>
		<br>
		<br>
		<br>
	</div>
</div>

<br>

@endforeach

<div class="row">
	<div class="col-md-12">
		<div class="d-flex justify-content-center">
			{!! $posts->links('vendor.pagination.bootstrap-4'); !!}
		</div>
	</div>
</div>

@endsection