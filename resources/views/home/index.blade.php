<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="banner">
		<div class="navbar">
			<img src="logo.jpg" class="logo">
			<ul>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/dashboard') }}">{{ Auth::user()->name }}</a></li>
                @else

				    <li><a href="{{ route('login') }}">sign in</a></li>
				    <li><a href="{{ route('register') }}">sign up</a></li>
                @endauth
            @endif
			</ul>
		</div>
		<div class="content">
			<h1>BASIC WEBPAGE</h1>
			<p>This webpage is for learning purpose. It will be a simple webpage.</p>
			<div>
				<button type="button"><span></span>About</button>
				<button type="button"><span></span>Learn</button>
			</div>
		</div>
	</div>
</body>
</html>