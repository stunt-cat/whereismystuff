@extends('layout')

@section('content')

<h1 class="title">List of Games</h1>

	@foreach ($games as $game)
		<ul>
			<li><a href="/games/{{ $game->id }}">{{ $game->title }}</a></li>
		</ul>
	@endforeach

<a class="btn btn-primary" href="/games/create" role="button">Add new game</a>

@endsection