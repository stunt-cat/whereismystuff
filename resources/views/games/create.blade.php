<!DOCTYPE html>
<html>
<head>
    <title>create a game</title>
</head>
<body>
	<h1>Add a new game</h1>
	<form method="POST" action="/games">
		{{ csrf_field() }}
		<div>
			<input type="text" name ="title" placeholder="Game title">
		</div>
		<div>
			<textarea name="description" placeholder="Game description"></textarea>
		</div>
		<div>
			<input type="text" name ="when_loaned" placeholder="When loaned">
		</div>
		<div>
			<input type="text" name ="location" placeholder="Location">
		</div>
		<div>
			<button type="submit">Create game</button>
		</div>
	</form>
</body>
</html>