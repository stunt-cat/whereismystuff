@extends('layout')

@section('content')

	<h1 class="title">{{ $game->title }}</h1>
	<li>Description: {{ $game->description }}</li>
	<li>Loaned: {{ $game->when_loaned }}</li>
	<li>Location: {{ $game->location }}</li>
	<a href="/games/{{ $game->id}}/edit">Edit game</a>

	<a href="/games"> Back to games</a>

@endsection