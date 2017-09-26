@extends('main')

@section('content')

<div class="row">
	<div class="col-md-8 ml-auto mr-auto">
		<br>
		<h1>{{ $post->title }}</h1>
		<br>
		<p class="lead">{{ $post->body }}</p>
		<br>
	</div>
</div>

<div class="row">
	<div class="col-md-8 ml-auto mr-auto">
		<h3>Количество комментариев: {{ $post->comments->count() }}</h3>
		<br>
		@foreach ($post->comments as $comment)
		<div class="media">
			<img class="d-flex mr-3" src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=64&d=mm"}}">
			<div class="media-body">
				<h5 class="mt-0 mb-1">{{ $comment->name }}</h5>
				<p><small>{{ $comment->created_at }}</small></p>
				<p>{{ $comment->comment }}</p>
			</div>
		</div>
		<br>
		@endforeach
	</div>
</div>

<div class="row">
	<div id="comment-form" class="col-md-8 ml-auto mr-auto">
		
		{{ Form::open(['route' =>['comments.store', $post->id], 'method' => 'POST']) }}
		<br>
		
		<div class="row">
			<div class="col-md-6">
				{{ Form::label('name', "Имя:") }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}
				<br>
			</div>
			
			<div class="col-md-6">
				{{ Form::label('email', 'E-mail:') }}
				{{ Form::text('email', null, ['class' => 'form-control']) }}
				<br>
			</div>
			
			<div class="col-md-12">
				{{ Form::label('comment', "Комментарий:") }}
				{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}
				<br>
				{{ Form::submit('Добавить', ['class' => 'btn btn-success btn-block']) }}
				<br>
			</div>
		</div>
	</div>
	
	{{ Form::close() }}
	
</div>
</div>

@endsection