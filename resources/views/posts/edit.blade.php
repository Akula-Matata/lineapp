@extends('main')

@section('content')

<div class="row">
	<div class="col-md-8">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
		
		<div class="form-group">
			{{ Form::label('title', 'Заголовок:') }}
			{{ Form::text('title', null, ['class' => 'form-control form-control-lg']) }}
		</div>
		<div class="form-group">
			{{ Form::label('slug', 'ЧПУ:') }}
			{{ Form::text('slug', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('body', 'Текст:') }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		</div>
		
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
					<div class="col-sm-6">
						{{ Form::submit('Сохранить', ['class' => 'btn btn-success btn-block']) }}
						<br>
					</div>
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Отменить', [$post->id], ['class' => 'btn btn-danger btn-block']) !!}
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
	{!! Form::close() !!}
</div>
@endsection