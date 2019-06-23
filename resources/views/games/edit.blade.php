@extends('layout')

@section('content')

	<h1 class="title">Edit Game</h1>

	<form method="POST" action="/games/{{ $game->id }}">
		@method('PATCH')
		@csrf

		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" class="form-control" name="title" value="{{$game->title }}">
		</div>

		<div class="form-group">
			<label class="label" for="description">Description</label>
			<textarea name="description" class="form-control">{{ $game->description }}</textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-success">Update</button>
		</div>
	</form>

	<form method="POST" action="/games/{{ $game->id }}">
		@method('DELETE')
		@csrf

		<div class="form-group">
			<button type="submit" class="btn btn-danger">Delete</button>
		</div>
	</form>
	
	<a href="/games/{{ $game->id}}" class="btn btn-primary">Back</a>


@endsection