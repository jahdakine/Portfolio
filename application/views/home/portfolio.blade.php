@layout('layout')

@section('title')
	Portfolio
@endsection

@section('header')
	{{ HTML::style('/css/about.css') }}
@endsection

@section('nav')
	@parent
@endsection

@section('top')
<hr class="shim">
@endsection

@section('aside')
@endsection

@section('main')	
	<section>
		<h3>Past projects</h3>
		<article>
			<p>
				Many of my projects are protected by authentication protocols and are inaccessible to the general public. 
				I have presented screenshots that will provide general concepts only, but have enhanced these with detailed 
				descriptions where possible. 
			</p>
			<p>
				Screenshots have been obtained through the 
				{{ HTML::link("http://archive.org/web/web.php", "Internet Archive (Wayback Machine)", array("title"=>"Offsite to Wayback Machine in a new window", "target"=>"_blank", "class" => "offsite")) }} 
				if the site is no longer available or has been radically changed from the time of my involvement.
			</p>
			<p>
				Select a client from tabs below revealing a sample of the projects delivered. Click on a specific project to view screenshot(s) and 
				description/statement of work and tools listing. 
			</p>
			<br/>
		</article>
		<div id="tabs">
			<div id="projects">
				<ul>
					<li><a href="#contract">Contracts</a></li>
					<li><a href="#doe">DOE&nbsp;<abbr title="Department of Energy">(?)</abbr></a></li>	
					<li><a href="#nrel">NREL&nbsp;<abbr title="National Renewable Energy Laboratory">(?)</abbr></a></li>
					<li><a href="#eere">EERE&nbsp;<abbr title="Energy Efficiency &amp; Renewable Energy Network">(?)</abbr></a></li>
					<li><a href="#source">Source&nbsp;<abbr title="NREL's Intranet">(?)</abbr></a></li>				
				</ul>
				<div id="contract">
				<ul>
					<li><a href="#" title="Show description and screenshots below" class="project">Solar Decathlon</a></li>
					<li><a href="#" title="Show description and screenshots below" class="project">USDA</a></li>
					<li><a href="#" title="Show description and screenshots below" class="project">Treasury</a></li>
					<li><a href="#" title="Show description and screenshots below" class="project">American Solar Challenge</a></li>
					<li><a href="#" title="Show description and screenshots below" class="project">AIA</a>&nbsp;<abbr title="American Institute of Architects">(?)</abbr></li>
					<li><a href="#" title="Show description and screenshots below" class="project">Denver Public Library</a></li>
				</ul>
				<section id="contractFrame" class="box hide"></section>
				</div><!-- // contract -->

				<div id="doe">
				  <ul>
						<li><a href="#" title="Show description and screenshots below" class="project">Hydrogen and Fuel Cells Program</a></li>
					</ul>
					<section id="doeFrame" class="box hide"></section>
				</div><!-- // doe -->					
				<div id="nrel">
					<ul>
						<li><a href="#" title="Show description and screenshots below" class="project">Building America</a></li>
						<li><a href="#" title="Show description and screenshots below" class="project">Basic Sciences</a></li>
						<li><a href="#" title="Show description and screenshots below" class="project">PV Manufacturing</a></li>
					</ul> 
					<section id="nrelFrame" class="box hide"></section> 		
				</div><!-- // nrel -->
				<div id="eere">
				  <ul>
						<li><a href="#" title="Show description and screenshots below" class="project">News &amp; Events</a></li>
						<li><a href="#" title="Show description and screenshots below" class="project">Energy Plus</a></li>
					</ul>
				</div><!-- // eere -->
				<section id="eereFrame" class="box hide"></section>
				<div id="source">
				  <ul>
						<li><a href="#" title="Show description and screenshots below" class="project">Library</a></li>
						<li><a href="#" title="Show description and screenshots below" class="project">NREL Now</a></li>
					</ul>
					<section id="sourceFrame" class="box hide"></section>
				</div><!-- // source -->		
			</div><!-- // projects -->
		</div><!-- // tabs -->
	</section>    
@endsection

@section('footer')
@endsection

@section('scripts')
	{{ HTML::script('/js/portfolio.funcs.js') }}
@endsection
