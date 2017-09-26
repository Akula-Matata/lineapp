@extends('main')

@section('content')

<div class="row">
	<div class="col-md-8 ml-auto mr-auto">
		<h1 class="display-4">Создать новый пост</h1>
		<hr>
		
		{!! Form::open(['route' => 'posts.store']) !!}
		
		<div class="form-group">
			{{ Form::label('title', 'Заголовок:') }}
			{{ Form::text('title', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('slug', 'ЧПУ:') }}
			{{ Form::text('slug', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('body', 'Текст:') }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		</div>
		
		{{ Form::submit('Создать', ['class' => 'btn btn-success btn-block']) }}
		
		{!! Form::close() !!}

		<br>
		
	</div>
</div>

@endsection