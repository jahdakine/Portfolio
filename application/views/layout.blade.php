<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>@yield('title')</title>
	{{ HTML::style('http://fonts.googleapis.com/css?family=Croissant+One|Special+Elite') }}
	{{ HTML::style('/css/menu.css') }}
	{{ HTML::style('/css/style.css') }}
	{{ HTML::style('laravel/css/style.css') }}
	@yield('header')
</head>

<body>
	<a href="#maincontent" class="hidden">Skip navigation</a> 
	<div class="wrapper">
		<header class="headfont">
			<h1>@yield("title")</h1>
			<h2>John Chase (aka <dfn>jahdakine</dfn>)</h2>
			<h4>Web Development</h4>
		</header>
		<menu class="nav menu">
			@section('nav')
				@if(URI::is('/'))
					<li class="pad-me">Home</li> 
				@else 
					<li>{{ HTML::link('/','Home') }}</li>
				@endif 
				@if(URI::is('about'))
					<li class="pad-me">About</li> 
				@else 
					<li>{{ HTML::link('about', 'About') }}</li>
				@endif 
				@if(URI::is('contact'))
					<li class="pad-me">Contact</li> 
				@else 
					<li>{{ HTML::link('contact','Contact') }}</li>
				@endif 										
			@yield_section <!-- will yield and close section -->
		</menu>
		<div role="main" id="maincontent">
			<div class="container">
				@yield('content')
			</div>
		</div>
		<footer class="footer">
			<p class="copy">copyright &copy;2013 John Chase (jahdakine)</p>
			@yield('footer')
		</footer>
	</div>
</body>
</html>