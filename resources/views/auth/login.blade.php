@extends('main')

@section('content')

<div class="row">
	<div class="col-md-6 ml-auto mr-auto">
		
		{!! Form::open() !!}
		
		<div class="form-group">
			{{ Form::label('email', 'E-mail: ') }}
			{{ Form::email('email', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Пароль: ') }}
			{{ Form::password('password', ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::checkbox('remember', 1, ['class' => 'form-check-input']) }}
			{{ Form::label('remember', 'Запомнить') }}
		</div>

		{{ Form::submit('Войти', ['class' => 'btn btn-primary btn-block']) }}
		
		{!! Form::close() !!}
	
		<br>
		<hr>
		<p class="text-center"><small>Если вы ещё не присоединились к нашему блогу, вам нужно срочно <a href="/auth/register">зарегистрироваться</a></small></p>

	</div>
</div>

@endsection