<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'whereismystuff')</title>
</head>
<body>
    <ul>
    	<li><a href="/">Home</a></li>
    	<li><a href="/about">About</a></li>
    	<li><a href="/mystuff">Where is my stuff?</a></li>
    </ul>

    @yield('content')
</body>
</html>