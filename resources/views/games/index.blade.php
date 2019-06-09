@extends('layout')

@section('content')

<h1 class="title">List of Games</h1>

	@foreach ($games as $game)
		<ul>
			<li><em>{{ $game->title }}</em></li>
			<li>Description: {{ $game->description }}</li>
			<li>Loaned: {{ $game->when_loaned }}</li>
			<li>Location: {{ $game->location }}</li>
			<a href="/games/{{ $game->id}}/edit">Edit game</a>
		</ul>
	@endforeach

	<a href="/games/create">Add new game</a>

@endsection