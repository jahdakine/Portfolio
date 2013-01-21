@layout('layout')

@section('title')
	About
@endsection

@section('header')
	{{ HTML::style('css/style.css') }}
@endsection

@section('nav')
	@parent
@endsection

@section('content')
	<article>
		<h3>History</h3>
		<p>Started out in mechanical design after a stint in ranching, fast food, 
		encyclopedia sales, hardware, and quality assurance testing. Worked in solids modeling 
		and quality assurance. Developed a taste for computer programming while automating 
		processes and writing batch files.</p>

		<p>Apprenticed with a traffic crash analysis software firm testing and writing Delphi code.
		Completed a 4 year program in Computer Information 
		Systems and began testing C++ code for a medical manufacturer.</p> 

		<p>Went on to do various SQL tasks for accounting department at a computer solutions sales group.
		Eventually landed a web programming position in a communications department for Government 
		intra and extranets. This entailed design, documentation, programming and testing web applications.</p>

		<h3>Future</h3>
		<p>Sure, knowing how to serve up data and guide users through complicated processes and make dificult concepts 
		understandable has its place, but the right side of my brain has begun to rebel a little and now has tipped the
		scales toward needing additional creative outlets. The good news is the web is still a wonderful place to balance both 
		creative and analytical skills so my new carreer will include more front end work. My goal will be to round into more of a full-stack
		developer and web artisan.</p>
	</article>

	<h3>Skills/Training</h3>
	<div id="wrapper">
		<div id="firefox-bug-fix">
	    <div class="columns" id="c1"> 
	    	<h3>Solid experience</h3>
	    	<ul>
	    		<li>ColdFusion (3-10)</li>
					<li>Database Design</li>
					<li>SQL - (SQL Server 2000/2008, mySQL, Postgres)</li>
					<li>HTML4.01</li>
					<li>JavaScript (vanilla)</li>
					<li>RegEx</li>
					<li>Web Application Security</li>
					<li style="list-style:none">&nbsp;</li>
				</ul>
				<h3>{{HTML::link("https://tutsplus.com/", "Tuts+", array("title" => "Tuts Plus Premium", "target" => "_blank"))}} Completed Courses/Tutorials</h3>
				<ul>
			   <li>Advanced JavaScript Fundamentals</li>
			   <li>Your Obedient Assistant: Yeoman</li>
			   <li>Are You Using CoffeeScript?</li>
			   <li>JavaScript Fundamentals 101</li>
			   <li>Easy Development With jQuery Mobile</li>
			   <li>30 Days to Learn jQuery</li>
			   <li>Regular Expressions: Up and Running</li>
			   <li>Perfect Workflow in Sublime Text 2</li>
			   <li>HTML5 Fundamentals</li>
			   <li>CSS3 Essentials</li>
			   <li>The Joy of FirePHP: A Crash-Course</li>
			   <li>WordPress Plugin Development Essentials</li>
			   <li>PHP Fundamentals</li>
			 	</ul>  
	    </div>
	    <div class="columns" id="c2">
	    	<h3>Training</h3>
	    	<ul>
					<li>PHP (4 &amp; 5)</li>
					<li>MAMP</li>
					<li><span class="hilited">jQuery</span></li>
					<li>HTML5</li>
					<li><span class="hilited">Laravel</span></li>
					<li>AJAX/jSON</li>
					<li>CSS/3</li>
					<li>Sublime Text 2/VIM</li>
					<li>Git/Subversion</li>
	    	</ul>
	    	<h3>{{HTML::link("https://tutsplus.com/", "Tuts+", array("title" => "Tuts Plus Premium", "target" => "_blank"))}} Current Courses/Tutorials</h3>
				<ul>
					<li>Laravel Essentials</li>
					<li>Hands-On: Build a Practical Web Application with Laravel</li>
					<li>Connected to the Backbone</li>
					<li>jQuery Plugin Development: Best Practices</li>
					<li>Venture Into Vim</li>
					<li>How To Customize Your Terminal</li>
					<li>Build a Canvas Image Editor with Canvas</li>
					<li>Object-Oriented JavaScript</li>
					<li>Learning MongoDB</li>
				</ul>
	    </div>
	    <div class="columns" id="c3">
	    	<h3>Some familiarity</h3>
		    <ul>
					<li>BASH</li>
					<li>Backbone</li>
					<li>Ruby/Rails</li>
					<li>WordPress</li>
					<li>Handlebars</li>
					<li>Modernizr/Prefixr</li>
					<li>SASS</li>	
					<li>SQL - Oracle</li>
					<li style="list-style:none">&nbsp;</li>		
				</ul>
				<h3>Projects</h3>	
	   		<ul>
					<li>Online CV (this site)</li>
					<li>2D Gaming</li>
					<li>Form Beautification</li>
					<li>Conference Generatr</li>
				</ul>
	    </div>
		</div>
	</div>
               

@endsection

@section('footer')
	
@endsection