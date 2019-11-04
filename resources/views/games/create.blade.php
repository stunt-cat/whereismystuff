@extends('layout')

@section('content')

<h1>Add a new game</h1>
	<form method="POST" action="/games">
		{{ csrf_field() }}
		<div class="form-group">
			<input class="form-control" type="text" name ="title" placeholder="Game title">
		</div>
		<div class="form-group">
			<select class="form-control" name ="manufacturer_id" placeholder="Manufacturer">
				@foreach($manufacturers as $id => $name)
					<option value="{{$id}}">{{$name}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<textarea class="form-control" name="description" placeholder="Game description"></textarea>
		</div>
		<div class="form-group">
			<input class="form-control" type="text" name ="when_loaned" placeholder="When loaned">
		</div>
		<div class="form-group">
			<input class="form-control" type="text" name ="location" placeholder="Location">
		</div>
		<div class="form-group">
			<button class="btn btn-success" type="submit">Create game</button>
		</div>
	</form>

@endsection