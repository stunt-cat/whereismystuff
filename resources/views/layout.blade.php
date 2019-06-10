<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <title>@yield('title', 'whereismystuff')</title>
</head>
<body>
    <div class="container-fluid">
	    <ul class="nav justify-content-centre">
	    	<li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
	    	<li class="nav-item"><a class="nav-link active" href="/about">About</a></li>
	    	<li class="nav-item"><a class="nav-link active" href="/mystuff">Where is my stuff?</a></li>
	    </ul>
	    
	    @yield('content')

    </div>
</body>
</html>