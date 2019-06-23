@extends('layout')

@section('content')

	<h1 class="title">{{ $game->title }}</h1>
	<table class="table">
		<tbody>
			<tr>
				<td>Description: </td>
				<td>{{ $game->description }}</td>
			</tr>
			<tr>
				<td>Loaned:</td>
				<td>{{ $game->when_loaned }}</td>
			</tr>
			<tr>
				<td>Location: </td>
				<td>{{ $game->location }}</td>
			</tr>
		</tbody>
	</table>

	<a href="/games/{{ $game->id}}/edit" class="btn btn-primary">Edit game</a>

	<a href="/games" class="btn btn-warning"> Back to games</a>

@endsection