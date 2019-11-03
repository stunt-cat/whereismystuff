@extends('layout')

@section('content')

<h1 class="title">List of Games</h1>

<form method="GET" action="/games/filter">
	<div class="row">
		<div class="col">
			<input type="text" class="form-control" name="title" placeholder="Title" value="{{$title}}">
		</div>
		<div class="col">
			<input type="text" class="form-control" name="description" placeholder="Description" value="{{$description}}">
		</div>
		<div class="col">
			<input type="submit" class="btn btn-primary" value="Filter">
		</div>
	</div>
</form>
<p></p>
<table class="table">
	<thead>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach ($games as $game)
		<tr>
			<td>{{ $game->title }}</td>
			<td>{{ $game->description }}</td>
			<td><a href="/games/{{ $game->id }}" class="btn btn-primary">View</a></td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-primary" href="/games/create" role="button">Add new game</a>

@endsection