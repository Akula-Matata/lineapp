@extends('main')

@section('content')

<div class="row">
	<div class="col-md-6 ml-auto mr-auto">
		<h1>Сбросить пароль</h1>
		<br>
		
		{!! Form::open(['url' => 'auth/passwords/email', 'method' => 'POST']) !!}

		{{ Form::hidden('token', $token) }}
		
		<div class="form-group">
			{{ Form::label('email', 'E-mail: ') }}
			{{ Form::email('email', $email, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Новый пароль: ') }}
			{{ Form::password('password', ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password_confirmation', 'Поттвердите пароль: ') }}
			{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
		</div>
		
		{{ Form::submit('Сбросить пароль', ['class' => 'btn btn-primary btn-block']) }}
		
		{!! Form::close() !!}
		
	</div>
</div>

@endsection