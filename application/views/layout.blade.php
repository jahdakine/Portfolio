<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8"> 
	<title>@yield('title')</title>
	{{ HTML::style('/css/vendor/jquery.qtip2.css') }}
	{{ HTML::style('/css/layout.css') }}
	@yield('header')
</head>

<body>
	<a href="#content" class="hidden">Skip navigation</a> 
	<div class="wrapper">
		<header>
			<h1>@yield("title")</h1>
			<h2 id="nickName">John Chase</h2>
			<h4>Web Developer</h4>
			{{ HTML::link("users/", "Sign-on") }}
		</header>
		<div id="navigation">
			<ul class="drop" id="nav">
				@section('nav')
					@if(URI::is('home') || URI::is('/'))
						<li class="current">Home</li> 
					@else 
						<li>{{ HTML::link('home/','Home') }}</li>
					@endif 
					@if(URI::is('home/about'))
						<li class="current">About</li> 
					@else 
						<li>{{ HTML::link('home/about', 'About') }}</li>
					@endif 
					@if(URI::is('home/contact'))
						<li class="current">Contact</li> 
					@else 
						<li>{{ HTML::link('home/contact','Contact') }}</li>
					@endif 										
				@yield_section <!-- will yield and close section -->
			</ul>
		</div><!-- // navigation -->	
		<div class="clear-fix"></div>
		@yield('top')
		<div role="main" id="content" class="main">		
			<aside id="aside" class="landAside">
				<h3 class="to-center">Legend</h3>
				<ul class="nolist">
					<li><span class="href" title="Links to webpages on my site">Onsite link</span></li>
					<li><span class="href" title="Links to webpages on an external site">Offsite link</span><span class="offsite">&#8658;</span></li>
					<li><span class="hover" title="Link style with cursor above">Hover</span></li>
					<li><span class="visited" title="Links that have been followed">Visited</span></li>
					<li><span class="dfn def" title="Tooltip style">Acronym/Abbreviation/Definition</span></li>
				</ul>
				@yield('aside')
			</aside><!-- // aside -->
			@yield('main')
		</div><!-- // content -->
		<div class="clear-fix"></div>
		<footer class="flex-footer">
			@yield('footer')
			<div id="audioWrap" class="hide">
				{{ HTML::a_img('#', '', 'Dismiss player', '/img/delete-icon.png', '', array("id" => "nickHide"), array("height" => "16", "width" => "16", "class" => "to-top")) }}
			</div>
			<p class="copy">copyright &copy;2013 John Chase (aka 
				<u class="def">
					<dfn title="IPA phonetics: dʒɑ dɑ <strong>ki</strong> neɪ <br/>(sounds like: jaw duh <strong>key</strong> nay)">jahdakine</dfn>
				</u>)<span style="padding-top:2px;">{{ HTML::a_img('#', '', 'Play nickname pronunciation audio (wav)', '/img/audio-icon.png', '', array('id' => 'nickButton'), array("height" => "16", "width" => "21", "class" => "to-middle")) }}</span>
			</p>	
		</footer>
	</div> <!-- // wrapper -->
	{{ HTML::script('/js/vendor/jquery-1.8.2.min.js') }}	
	{{ HTML::script('/js/vendor/jquery-ui-1.9.2.custom.min.js') }}
	{{ HTML::script('/js/vendor/jquery.qtip2.min.js') }}		
	@yield('scripts')	
	{{ HTML::script('/js/layout.funcs.js') }}
</body>
</html>