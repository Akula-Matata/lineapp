@extends('main')

@section('content')

<div class="row">
	<div class="col-md-8">
		<h1>{{ $post->title }}</h1>
		<p class="lead">{{ $post->body }}</p>
	</div>
	<div class="col-md-4">
		<div class="card border-0">
			<div class="card-body">
				<strong>ЧПУ:</strong>
				<p class="card-text"><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
				
				<strong>Создано:</strong>
				<p class="card-text">{{ $post->created_at }}</p>
				
				<strong>Изменено:</strong>
				<p class="card-text">{{ $post->updated_at }}</p>
				<br>
				<div class="row">
					<div class="col-lg-6">
						{!! Html::linkRoute('posts.edit', 'Изменить', [$post->id], ['class' => 'btn btn-primary btn-block']) !!}
						<br>
					</div>
					<div class="col-lg-6">
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
						
						{{ Form::submit('Удалить', ['class' => 'btn btn-danger btn-block']) }}
						
						{!! Form::close() !!}
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						{!! Html::linkRoute('posts.index', '<< Все посты', [$post->id], ['class' => 'btn btn-secondary btn-block']) !!}
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
</div>

@endsection