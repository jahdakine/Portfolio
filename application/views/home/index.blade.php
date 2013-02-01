@layout('layout')

@section('title') Home @endsection

@section('header')		
	{{ HTML::style('/css/index.css') }}
@endsection

@section('nav')
	@parent
	<!-- <li>{{ HTML::link("users/", "Sign-on") }}</li> -->
	<li class="to-right current">{{ HTML::link("#", "Reset", array("title"=>"Clear dynamic content area", "id"=>"reset", "class" => "current")) }}</li>
	<li class="to-right">
		{{ HTML::link("#", "List menu") }}
		<ul>
		  <li>{{ HTML::link("#", "Image&nbsp;List", array("title"=>"Change links to image carousel style", "id"=>"menuGraphics")) }}</li>
		  <li class="current">{{ HTML::link("#", "Text List", array("title"=>"Change links to text list style", "id"=>"menuText", "class" => "current")) }}</li>	
		</ul>
	</li>
</ul>
<ul class="reset">
	<li id="ctrls" class="controls transparent">
		<img src="/img/spacer.gif" width="5" height="1" alt=""/>
		{{ HTML::link("#", "", array("title"=>"Slow down carousel scroll rate", "id"=>"ctrls1")) }}
		{{ HTML::link("#", "", array("title"=>"Scroll backward", "id"=>"ctrls2")) }}
		{{ HTML::link("#", "", array("title"=>"Pause the carousel", "id"=>"ctrls3")) }}
		{{ HTML::link("#", "", array("title"=>"Restart the carousel", "id"=>"ctrls4")) }}
		{{ HTML::link("#", "", array("title"=>"Scroll forward", "id"=>"ctrls5")) }}
		{{ HTML::link("#", "", array("title"=>"Speed up carousel scroll rate", "id"=>"ctrls6")) }} 
		<img src="/img/spacer.gif" width="5" height="1" alt=""/>
	</li>
@endsection 
@section('top')
<div id="list">
	<div id="carousel">
		<ul id="t1">
			<li class="block1">
				{{ HTML::link("http://www.linkedin.com/profile/view?id=14123195", "Linkedin", array("title"=>"Open my LinkedIn profile page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::a_img('#', '', 'Show ? from LinkedIn on this page', '/img/linkedin-icon.png', '', array('id' => 'linkedin', 'class' => 'feedBtn'), array('class' => 'listImg', "height" => "128", "width" => "128")) }}
			</li>
			<li class="block1">
				{{ HTML::link("https://github.com/jahdakine", "GitHub", array("title"=>"Open my Github page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::a_img('#', '', 'Show ? from GitHub repo on this page', '/img/github-icon.png', '', array('id' => 'github', 'class' => 'feedBtn'), array('class' => 'listImg', "height" => "128", "width" => "128")) }}
			</li>
			<li class="block1">
				{{ HTML::link("https://plus.google.com/u/0/114704033710627861845/posts", "Google+", array("title"=>"Open my Google+ page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::a_img('#', '', 'Show 5 latest comments from my Google+ circle on this page', '/img/google-icon.png', '', array('id' => 'google+', 'class' => 'feedBtn'), array('class' => 'listImg', "height" => "128", "width" => "128")) }}
			</li>			
			<li class="block1">
				{{ HTML::link("http://stackoverflow.com/users/1997909/jahdakine", "Stackoverflow", array("title"=>"Open my stackoverflow+ profile page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::a_img('#', '', 'Show 5 latest question/answers from my stackoverflow on this page', '/img/stackoverflow-icon.png', '', array('id' => 'stackoverflow', 'class' => 'feedBtn'), array('class' => 'listImg', "height" => "128", "width" => "128")) }}
			</li>
			<li class="block1">
				<a href="/users" title="You must be logged in to access" onclick="return false;">Yelp<span class="listImg"><br/><img src="/img/yelp-icon.png" height="128" width="128" alt="" /></span></a>
			</li>
			<li class="block1">
				<a href="/users" title="You must be logged in to access" onclick="return false;">iCloud<span class="listImg"><br/><img src="/img/mobileme-icon.png" height="128" width="128" alt="" /></span></a>
			</li>
			<li class="block1">
				<a href="/users" title="You must be logged in to access" onclick="return false;">Vimeo<span class="listImg"><br/><img src="/img/vimeo-icon.png" height="128" width="128" alt="" /></span></a>
			</li>		
		</ul><!-- //t1 -->
		<ul id="t2">
			<li class="block2">
				{{ HTML::link("http://www.youtube.com/user/jahdakine", "YouTube", array("title"=>"Open my YouTube page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::a_img('#', '', 'Show 5 latest movies from my channel on this page', '/img/youtube-icon.png', '', array('id' => 'youtube', 'class' => 'feedBtn'), array('class' => 'listImg', "height" => "128", "width" => "128")) }}
			</li>
			<li class="block2">
				{{ HTML::link("https://twitter.com/jahdakine", "Twitter", array("title"=>"Open my Twitter page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::a_img('#', '', 'Show 10 latest tweets on this page', '/img/twitter-icon.png', '', array('id' => 'twitter', 'class' => 'feedBtn'), array('class' => 'listImg', "height" => "128", "width" => "128")) }}
			</li>
			<li class="block2">
				{{ HTML::link("http://www.flickr.com/photos/jahdakinebrah/", 'Flickr', array("title"=>"Open my Flickr page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::a_img('#', '', 'Show 20 latest images from my stream on this page', '/img/flickr-icon.png', '', array('id' => 'flickr', 'class' => 'feedBtn'), array('class' => 'listImg', "height" => "128", "width" => "128")) }}
			</li>
			<li class="block2">
				{{ HTML::link("http://jahdakine.blogspot.com/", "Blogger", array("title"=>"Open my Blogger page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::a_img('#', '', 'Show latest 5 articles from my blog on this page', '/img/blogger-icon.png', '', array('id' => 'blogger', 'class' => 'feedBtn'), array('class' => 'listImg', "height" => "128", "width" => "128")) }}
			</li>
			<li class="block2">
				<a href="/users" title="You must be logged in to access" onclick="return false;">Evernote<span class="listImg"><br/><img src="/img/evernote-icon.png" height="128" width="128" alt="" /></span></a>
			</li>
			<li class="block2">
				<a href="/users" title="You must be logged in to access" onclick="return false;">Picassa<span class="listImg"><br/><img src="/img/picasa-icon.png" height="128" width="128" alt="" /></span></a>
			</li>		
			<li class="block2">
				<a href="/users" title="You must be logged in to access" onclick="return false;">Amazon<span class="listImg"><br/><img src="/img/amazon-icon.png" height="128" width="128" alt="" /></span></a>
			</li>						
		</ul><!-- // t2 -->
		<ul id="t3">	
			<li class="block3">
				{{ HTML::link("http://www.zazzle.com/jahdakine+gifts", "Zazzle", array("title"=>"Open my Zazzle gift catalog in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::a_img('#', '', 'Show latest 3 creations from my gift catalog on this page', '/img/zazzle-icon.png', '', array('id' => 'zazzle', 'class' => 'feedBtn'), array('class' => 'listImg', "height" => "128", "width" => "128")) }}
			</li>
			<li class="block3">
				{{ HTML::link("http://myworld.ebay.com/specrun/", "eBay", array("title"=>"Open my eBay profile page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::a_img('#', '', 'Show latest 5 feedback comments on this page', '/img/ebay-icon.png', '', array('id' => 'ebay', 'class' => 'feedBtn'), array('class' => 'listImg', "height" => "128", "width" => "128")) }}
			</li>
			<li class="block3">
				{{ HTML::link("http://grooveshark.com/#!/jahdakine", "Grooveshark", array("title"=>"Open my GrooveShark profile page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::a_img('#', '', 'Show latest 5 listens from playlist on this page', '/img/grooveshark-icon.png', '', array('id' => 'grooveshark', 'class' => 'feedBtn'), array('class' => 'listImg', "height" => "128", "width" => "128")) }}
			</li>	
			<li class="block3">
				{{ HTML::link("http://www.meetup.com/HTML5-Denver-Users-Group/members/65732862/", "Meetup", array("title"=>"Open my Meetup profile page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::a_img('#', '', 'Show 5 latest Meetup meetings attended on this page', '/img/meetup-icon.png', '', array('id' => 'meetup', 'class' => 'feedBtn'), array('class' => 'listImg', "height" => "128", "width" => "128")) }}
			</li>		
			<li class="block3">
				<a href="/users" title="You must be logged in to access" onclick="return false;">PayPal<span class="listImg"><br/><img src="/img/paypal-icon.png" height="128" width="128" alt="" /></span></a>
			</li>
			<li class="block3">
				<a href="/users" title="You must be logged in to access" onclick="return false;">Skype<span class="listImg"><br/><img src="/img/skype-icon.png" height="128" width="128" alt="" /></span></a>
			</li>	
			<li class="block3">
				<a href="/users" title="You must be logged in to access" onclick="return false;">Gmail<span class="listImg"><br/><img src="/img/gmail-icon.png" height="128" width="128" alt="" /></span></a>
			</li>		
		</ul><!-- // t3 -->
	</div><!-- // carousel -->
</div><!-- // list -->
<div class="clear-fix"></div>
<hr class="separator"/>	
@endsection

@section('main')
	@section('aside')
	something new
	@endsection	
	<div id="landing">
		<article>
			Welcome. This is my online 
			<abbr title="Curriculum Vitae">CV</abbr>. 
			Select from any of the menu items above to explore more of my interests 
			and accomplishments, or contact me if you have a dream front-end web programming job 
			opening! This website is powered by jQuery, <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>, and Laravel, the 
			<abbr title="Model View Controller">MVC</abbr>
			framework that I've gravitated to. 
			It includes a scrolling style jQuery image carousel (List menu | Image list), and 
			<abbr title="Javascript Object Notation">jSON</abbr>
			feeds via icon selection. It is basically my playground to spend time trying new things and learning 
			about what works and what doesn't in the fine art and science of internet 
			programming and design. Tabs and other user interface goodies can be found at 
			{{ HTML::link("http://jqueryui.com/", "jQuery UI", array("title"=>"Offsite to jQuery UI in a new window", "target"=>"_blank", "class" => "offsite")) }}.
			Customizable tooltips:
			{{ HTML::link("http://craigsworks.com/projects/qtip2/", "qTips2", array("title"=>"Offsite to qTips2 in a new window", "target"=>"_blank", "class" => "offsite")) }}.
			Menu carousel is available at 
			{{ HTML::link("http://caroufredsel.dev7studios.com/", "carouFred", array("title"=>"Offsite to carouFred in a new window", "target"=>"_blank", "class" => "offsite")) }}.
			Flickr jSON request example description is available at 
			{{ HTML::link("http://api.jquery.com/jQuery.getJSON/", "jQuery API", array("title"=>"Offsite to jQuery API in a new window", "target"=>"_blank", "class" => "offsite")) }}.
			Mail hide utility demonstrated on {{ HTML::link("contact", "Contact page", array("title"=>"Contact page")) }} courtesy of Google's 
			{{ HTML::link("http://www.google.com/recaptcha/mailhide/", "reCAPTCHA", array("title"=>"Offsite to Mail Hide in a new window", "target"=>"_blank", "class" => "offsite")) }}. 
			Slick icons from the folks at {{ HTML::link("http://www.iconarchive.com/", "IconArchive", array("title"=>"Offsite to IconArchive in a new window", "target"=>"_blank", "class" => "offsite")) }}, 
			and of some ultra nice styling from {{ HTML::link("http://twitter.github.com/bootstrap/customize", "Twitter's Bootstrap", array("title"=>"Offsite to Bootstrap Customization in a new window", "target"=>"_blank", "class" => "offsite")) }}.
			<p>
				This is as much a launching pad for me as it is a showcase of what I care about and can do. Please excuse the external linking to new windows, 
				I keep this page open during my surfing day and would rather not have to right click links to get them into a separate tab. I will work on a switcher that 
				allows an override of this functionality. 
			</p>
		</article>	
		<section class="notes">
			<h3 class="to-center">To do:</h3> 
			<ul>
				<li>Create external link switcher</li>
				<li>Spitesheet all graphics</li>
				<li>Add smooth transitions</li>
				<li>Add login area</li>
				<li>Facility for adding icons/sites</li>
				<li>Package (minify, optimize)</li>
				<li>Finish AJAX calls that error</li>
				<li>Cure world hunger</li>
			</ul>																
		</section><!-- // notes -->
	</div><!-- // landing -->
	<div id="contentFrame" class="content"></div><!-- // contentFrame -->
@endsection

@section('footer')	
@endsection

@section('scripts')
	{{ HTML::script('/js/vendor/jquery.carouFredSel-6.2.0-packed.js') }}
	{{ HTML::script('/js/vendor/jquery.center.min.js') }}	
	{{ HTML::script('/js/index.funcs.js') }}
@endsection
