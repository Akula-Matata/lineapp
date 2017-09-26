@extends('main')

@section('content')

<div class="row">
	<div class="col-md-6 ml-auto mr-auto">
		<div class="panel">
			<div class="panel-header">
				Сбросить пароль
			</div>
			<div class="panel-body">
				{!! Form::open(['url' => 'password/email', 'method' => 'POST']) !!}
				
				<div class="form-group">
					{{ Form::label('email', 'E-mail: ') }}
					{{ Form::email('email', null, ['class' => 'form-control']) }}
				</div>
				
				{{ Form::submit('Сбросить пароль', ['class' => 'btn btn-primary btn-block']) }}
				
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection