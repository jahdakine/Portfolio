<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>@yield('title')</title>
	{{ HTML::style('/css/vendor/jquery-ui-1.9.2.custom.css') }}
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
				</u>){{ HTML::a_img('#', '', 'Play nickname pronunciation audio (wav)', '/img/audio-icon.png', '', array('id' => 'nickButton'), array("height" => "32px", "width" => "32px")) }}
			</h2>
			<div class="no-overflow">
				<div id="audioWrap" class="to-left"></div>
				<div id="nickHide" class="hide to-left">&nbsp;
					{{ HTML::a_img('#', '', 'Dismiss player', '/img/delete-icon.png', '', array(), array("height" => "16px", "width" => "16px")) }}
				</div>
				<div class="clear"></div>
			</div>
			<h4>Web Developer</h4>
		</header>
		<div id="navigation">
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
		</div><!-- // navigation -->
		<div role="main" id="maincontent">	
			@yield('top')	
			<aside>
				<h3 align="center">Legend</h3>
				<ul class="nolist">
					<li><span class="href" title="Style of links to webpages on my site">Onsite link</li>
					<li><span class="href" title="Style of links to webpages on an external site">Offsite link</span><span class="offsite">&#8658;</span></li>
					<li><span class="hover" title="Style of links with cursor above">Hover</span></li>
					<li><span class="visited" title="Style of links that have been followed">Visited</span></li>
					<li><span class="dfn def" title="Style of tooltips">Acronym/Abbreviation/Definition</span></li>
				</ul>
				@yield('aside')
			</aside>
			<div class="container">
				@yield('main')
			</div>
		</div><!-- // maincontent -->
		<div class="clear-fix"></div>
		<footer class="footer">
			<p class="copy">copyright &copy;2013 John Chase (jahdakine)</p>
			@yield('footer')
		</footer>
	</div> <!-- // wrapper -->
	{{ HTML::script('/js/vendor/jquery-1.8.2.js') }}	
	{{ HTML::script('/js/vendor/jquery-ui-1.9.2.custom.js') }}		
	@yield('scripts')	
	{{ HTML::script('/js/layout.funcs.js') }}
</body>
</html>