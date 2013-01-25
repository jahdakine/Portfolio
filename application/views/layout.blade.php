<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>@yield('title')</title>
	{{ HTML::style('http://fonts.googleapis.com/css?family=Croissant+One|Special+Elite') }}
	{{ HTML::style('/css/style.css') }}
	{{ HTML::style('laravel/css/style.css') }}
	@yield('header')
</head>

<body>
	<a href="#maincontent" class="hidden">Skip navigation</a> 
	<div class="wrapper">
		<header class="headfont">
			<h1>@yield("title")</h1>
			<h2 id="nickName">John Chase (aka 
				<u class="def">
					<dfn title="IPA phonetics: dʒɑ dɑ <strong>ki</strong> neɪ <br/>(sounds like: jaw duh <strong>key</strong> nay)">jahdakine</dfn>
				</u>)
				{{ HTML::a_img('#', '', 'Play nickname pronunciation audio (wav)', '/img/audio-icon.png', '', array('id' => 'nickButton'), array()) }}
			</h2>
			<div class="no-overflow">
				<div id="audioWrap" class="to-left"></div>
				<div id="nickHide" class="hide to-left">&nbsp;
					{{ HTML::a_img('#', '', 'Dismiss player', '/img/delete-icon.png', '', array(), array()) }}
				</div>
				<div class="clear"></div>
			</div>
			<h4>Web Development</h4>
		</header>
		<ul class="drop" id="nav">
			@section('nav')
				@if(URI::is('home'))
					<li class="pad-me">Home</li> 
				@else 
					<li>{{ HTML::link('home/','Home') }}</li>
				@endif 
				@if(URI::is('home/about'))
					<li class="pad-me">About</li> 
				@else 
					<li>{{ HTML::link('home/about', 'About') }}</li>
				@endif 
				@if(URI::is('home/contact'))
					<li class="pad-me">Contact</li> 
				@else 
					<li>{{ HTML::link('home/contact','Contact') }}</li>
				@endif 										
			@yield_section <!-- will yield and close section -->
		</ul>
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
	{{ HTML::script('/js/vendor/jquery-1.8.2.js') }}	
	{{ HTML::script('/js/layout.funcs.js') }}
	@yield('scripts')	
</body>
</html>