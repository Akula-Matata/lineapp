@extends('main')

@section('content')

<div class="row">
	<div class="col-md-6 ml-auto mr-auto">

		{!! Form::open() !!}
		
		<div class="form-group">
			{{ Form::label('name', 'Имя: ') }}
			{{ Form::text('name', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('email', 'E-mail: ') }}
			{{ Form::email('email', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Пароль: ') }}
			{{ Form::password('password', ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password_confirmation', 'Подтвердите пароль: ') }}
			{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
		</div>
		
		{{ Form::submit('Зарегистрироваться', ['class' => 'btn btn-success btn-block']) }}
		
		{!! Form::close() !!}

	</div>
</div>

@endsection