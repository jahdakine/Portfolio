@layout('layout')

@section('title')
	About
@endsection<!-- // title -->

@section('header')
@endsection<!-- // header -->

@section('nav')
	@parent
@endsection<!-- // nav -->

@section('aside')
@endsection<!-- // aside -->

@section('main')
<article>
	<h3>History</h3>
	<p>Started out in mechanical design after a stint in ranching, fast food, 
	encyclopedia sales, hardware, and quality assurance testing. Worked in solids modeling 
	and quality control for a tape drive manufacturer. Developed a taste for computer programming while automating 
	processes and writing batch files.</p>

	<p>Apprenticed with a traffic crash analysis software firm testing and writing Delphi code.
	Completed a 4 year program in Computer Information Systems and began testing C++ code for a medical manufacturer.</p> 

	<p>Went on to do various SQL tasks for an accounting department at a computer solutions sales group.
	Eventually landed a web programming position in a communications department for Government 
	intra and extranets. This entailed design, documentation, programming and testing web applications.</p>

	<h3>Future</h3>
	<p>Sure, knowing how to serve up data correctly and guide users through complicated processes and make difficult concepts 
	understandable has its place, but the right side of my brain has begun to rebel a little and now has tipped the
	scales toward balance in additional creative outlets. The good news is the web is still a wonderful place to enhance both 
	creative and analytical skills! So my new career will include more front end work. My goal is to round into a full-stack
	developer and web artisan.</p>
</article>
<section>
	<h3>Skills</h3>
	<div id="wrapper">
		<div id="skills">
			<ul>
				<li><a href="#skills-1">Solid Experience</a></li>
				<li><a href="#skills-2">Training</a></li>
				<li><a href="#skills-3">Some familiarity</a></li>
			</ul>
			<div id="skills-1"
			<ul>
				<li>ColdFusion (3-10)</li>
				<li>Database Design</li>
				<li>SQL - (SQL Server 2000/2008, mySQL, Postgres)</li>
				<li>HTML4.01</li>
				<li>JavaScript (vanilla)</li>
				<li>RegEx</li>
				<li>Web Application Security</li>
			</ul>
			</div><!-- // skills-1 -->
			<div id="skills-2">
				<ul>
					<li>PHP (4 &amp; 5)</li>
					<li>MAMP</li>
					<li><dfn title="Heavy emphasis" class="def hilited">jQuery</dfn></li>
					<li>HTML5</li>
					<li><dfn title="Heavy emphasis" class="def hilited">Laravel</dfn></li>
					<li>AJAX/jSON</li>
					<li>CSS/3</li>
					<li>Sublime Text 2/VIM</li>
					<li>Git/Subversion</li>
				</ul> 
			</div><!-- // skills-2 -->
			<div id="skills-3">
			  <ul>
					<li>BASH</li>
					<li>Backbone</li>
					<li>Ruby/Rails</li>
					<li>WordPress</li>
					<li>Handlebars</li>
					<li>Modernizr/Prefixr</li>
					<li>SASS</li>	
					<li>SQL - Oracle</li>	
				</ul>
			</div><!-- // skills-3 -->
		</div><!-- // skills -->

	<h3>Training</h3>
	<div id="wrapper">
		<div id="courses">
			<ul>
				<li><a href="#courses-1">Completed Courses/Tutorials</a></li>
				<li><a href="#courses-2">Current Courses/Tutorials</a></li>
				<li><a href="#courses-3">Projects/Interests</a></li>
			</ul>
			<div id="courses-1">
				<h3>{{ HTML::link("https://tutsplus.com/", "Tuts+ Premium", array("title"=>"Open Tuts+ Premium in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}</h3>
				<ul>
					<li>Laravel Essentials</li>
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
			</div><!-- // courses-1 -->
			<div id="courses-2">
				<h3>{{ HTML::link("https://tutsplus.com/", "Tuts+ Premium", array("title"=>"Open Tuts+ Premium in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}</h3>	
				<ul>
					<li>Hands-On: Build a Practical Web Application with Laravel</li>
					<li>Connected to the Backbone</li>
					<li>jQuery Plugin Development: Best Practices</li>
					<li>Venture Into Vim</li>
					<li>How To Customize Your Terminal</li>
					<li>Build a Canvas Image Editor with Canvas</li>
					<li>Object-Oriented JavaScript</li>
					<li>Learning MongoDB</li>
				</ul> 
			</div><!-- // courses-2 -->
			<div id="courses-3">
			  <ul>
					<li>Online CV (this site)</li>
					<li>2D Gaming</li>
					<li>Form Beautification</li>
					<li>Conference Generatr</li>
					<li>SoShl Parade</li>	
				</ul>
			</div><!-- // courses-3 -->
		</div><!-- // courses -->
	</div><!-- // wrapper -->
</section>             
@endsection<!-- // main -->

@section('footer')
@endsection<!-- // footer -->

@section('scripts')
	{{ HTML::script('/js/about.funcs.js') }}
@endsection<!-- // scripts -->
