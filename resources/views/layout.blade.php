<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('partials.nav')<br>
    @include('partials.session-status')<br>
	@yield('content')
</body>
</html>
