@extends('main')

@section('content')

<div class="row">
	<div class="col-lg-10 col-md-9">
		<h1 class="display-3">Все посты</h1>
		<br>
	</div>
	<div class="col-lg-2 col-md-3 align-self-center">
		<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-success">Создать</a>
		<br>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-12">
		<table class="table table-responsive table-sm">
			<thead>
				<th>#</th>
				<th>Заголовок</th>
				<th>Текст</th>
				<th>Создано</th>
				<th></th>
			</thead>
			<tbody>
				
				@foreach ($posts as $post)

					<tr>
						<th>{{ $post->id }}</th>
						<td>{{ $post->title }}</td>
						<td>{{ mb_substr(strip_tags($post->body), 0, 50) }}{{ mb_strlen(strip_tags($post->body)) > 50 ? "..." : "" }}</td>
						<td>{{ $post->created_at }}</td>
						<td><a href="{{ route('posts.show', $post->id) }}" class="btn">Просмотреть</a><br><a href="{{ route('posts.edit', $post->id) }}" class="btn">Изменить</a></td>
					</tr>

				@endforeach

			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			{!! $posts->links('vendor.pagination.bootstrap-4'); !!}
		</div>
	</div>
</div>

@endsection