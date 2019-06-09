@extends('layout')

@section('content')

	<h1 class="title">Edit Game</h1>

	<form method="POST" action="/games/{{ $game->id }}">
		@method('PATCH')
		@csrf

		<div class="field">
			<label class="label" for="title">Title</label>

			<div class="control">
				<input type="text" class="input" name="title" placeholder="Title" value="{{ $game->title }}">
			</div>
		</div>

		<div class="field">
			<label class="label" for="description">Description</label>

			<div class="control">
				<textarea name="description" class="textarea">{{ $game->description }}</textarea>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<button type="submit" class="button is-link">Update Game</button>
			</div>
		</div>
	</form>

	<form method="POST" action="/games/{{ $game->id }}">
		@method('DELETE')
		@csrf

		<div class="control">
			<button type="submit" class="button is-link">Delete Game</button>
		</div>
	</form>


@endsection