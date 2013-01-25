@layout('layout')

@section('title') Home @endsection

@section('header')		
	{{ HTML::style('/css/vendor/jquery-ui-1.9.2.custom.css') }}
@endsection

@section('nav')
	@parent
	<li>{{ HTML::link("users/", "Sign on") }}</li>

	<li class="to-right">{{ HTML::link("#", "Reset", array("title"=>"Clear dynamic content area", "id"=>"reset")) }}</li>
	<li class="to-right">
		{{ HTML::link("#", "List menu") }}
		<ul>
		  <li>{{ HTML::link("#", "Image List", array("title"=>"Change links to image carousel style", "id"=>"menuGraphics")) }}</li>
		  <li>{{ HTML::link("#", "Text List", array("title"=>"Change links to text list style", "id"=>"menuText")) }}</li>	
		</ul>
	</li>
@endsection 

@section('content')
<div id="list">
	<ul id="carousel">
	<div id="t1"><!-- // removed for carousel -->	
		<li class="block1">
			{{ HTML::link("http://www.linkedin.com/profile/view?id=14123195", "Linkedin", array("title"=>"Open my LinkedIn profile page in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}
			{{ HTML::a_img('#', '', 'Show ? from LinkedIn on this page', '/img/linkedin-icon.png', '', array('id' => 'linkedin', 'class' => 'feedBtn'), array('class' => 'listImg')) }}
		</li>
		<li class="block1">
			{{ HTML::link("https://github.com/jahdakine", "GitHub", array("title"=>"Open my Github page in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}
			{{ HTML::a_img('#', '', 'Show ? from GitHub repo on this page', '/img/github-icon.png', '', array('id' => 'github', 'class' => 'feedBtn'), array('class' => 'listImg')) }}
		</li>
		<li class="block1">
			{{ HTML::link("https://plus.google.com/u/0/114704033710627861845/posts", "Google+", array("title"=>"Open my Google+ page in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}
			{{ HTML::a_img('#', '', 'Show 5 latest comments from my Google+ circle on this page', '/img/google-icon.png', '', array('id' => 'google+', 'class' => 'feedBtn'), array('class' => 'listImg')) }}
		</li>			
		<li class="block1">
			{{ HTML::link("http://stackoverflow.com/users/1997909/jahdakine", "Stackoverflow", array("title"=>"Open my stackoverflow+ profile page in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}
			{{ HTML::a_img('#', '', 'Show 5 latest question/answers from my stackoverflow on this page', '/img/stackoverflow-icon.png', '', array('id' => 'stackoverflow', 'class' => 'feedBtn'), array('class' => 'listImg')) }}
		</li>
		<li class="block1">
			Yelp<span class="listImg"><br/><img src="/img/yelp-icon.png"/></span>
		</li>
		<li class="block1">
			iCloud<span class="listImg"><br/><img src="/img/mobileme-icon.png"/></span>
		</li>
		<li class="block1">
			Vimeo<span class="listImg"><br/><img src="/img/vimeo-icon.png"/></span>
		</li>		
	</div><!-- // t1 -->
	<div id="t2">	
		<li class="block2">
			{{ HTML::link("http://www.youtube.com/user/jahdakine", "Youtube", array("title"=>"Open my You Tube page in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}
			{{ HTML::a_img('#', '', 'Show 5 latest movies from my channel on this page', '/img/youtube-icon.png', '', array('id' => 'youtube', 'class' => 'feedBtn'), array('class' => 'listImg')) }}
		</li>
		<li class="block2">
			{{ HTML::link("https://twitter.com/jahdakine", "Twitter", array("title"=>"Open my Twitter page in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}
			{{ HTML::a_img('#', '', 'Show 20 latest tweets on this page', '/img/twitter-icon.png', '', array('id' => 'twitter', 'class' => 'feedBtn'), array('class' => 'listImg')) }}
		</li>
		<li class="block2">
			{{ HTML::link("http://www.flickr.com/photos/jahdakinebrah/", 'Flickr', array("title"=>"Open my Flickr page in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}
			{{ HTML::a_img('#', '', 'Show 20 latest images from my stream on this page', '/img/flickr-icon.png', '', array('id' => 'flickr', 'class' => 'feedBtn'), array('class' => 'listImg')) }}
		</li>
		<li class="block2">
			{{ HTML::link("http://jahdakine.blogspot.com/", "Blogger", array("title"=>"Open my Blogger page in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}
			{{ HTML::a_img('#', '', 'Show latest 5 articles from my blog on this page', '/img/blogger-icon.png', '', array('id' => 'blogger', 'class' => 'feedBtn'), array('class' => 'listImg')) }}
		</li>
		<li class="block2">
			Evernote<span class="listImg"><br/><img src="/img/evernote-icon.png"/></span>
		</li>
		<li class="block2">
			Picassa<span class="listImg"><br/><img src="/img/picasa-icon.png"/></span>
		</li>		
		<li class="block2">
			Amazon<span class="listImg"><br/><img src="/img/amazon-icon.png"/></span>
		</li>						
	</div><!-- // t2 -->
	<div id="t3">	
		<li class="block3">
			{{ HTML::link("http://www.zazzle.com/jahdakine+gifts", "Zazzle POD (design)", array("title"=>"Open my Zazzle gift catalog in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}
			{{ HTML::a_img('#', '', 'Show latest 3 creations from my gift catalog on this page', '/img/zazzle-icon.png', '', array('id' => 'zazzle', 'class' => 'feedBtn'), array('class' => 'listImg')) }}
		</li>
		<li class="block3">
			{{ HTML::link("http://myworld.ebay.com/specrun/", "eBay", array("title"=>"Open my eBay profile page in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}
			{{ HTML::a_img('#', '', 'Show latest 5 feedback comments on this page', '/img/ebay-icon.png', '', array('id' => 'ebay', 'class' => 'feedBtn'), array('class' => 'listImg')) }}
		</li>
		<li class="block3">
			{{ HTML::link("http://grooveshark.com/#!/jahdakine", "Grooveshark", array("title"=>"Open my GrooveShark profile page in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}
			{{ HTML::a_img('#', '', 'Show latest 5 listens from playlist on this page', '/img/grooveshark-icon.png', '', array('id' => 'grooveshark', 'class' => 'feedBtn'), array('class' => 'listImg')) }}
		</li>	
		<li class="block3">
			{{ HTML::link("http://www.meetup.com/HTML5-Denver-Users-Group/members/65732862/", "Meetup", array("title"=>"Open my Meetup profile page in a new window/tab", "target"=>"_blank", "icon"=>"out-text")) }}
			{{ HTML::a_img('#', '', 'Show 5 latest Meetup meetings attended on this page', '/img/meetup-icon.png', '', array('id' => 'meetup', 'class' => 'feedBtn'), array('class' => 'listImg')) }}
		</li>		
		<li class="block3">
			PayPal<span class="listImg"><br/><img src="/img/paypal-icon.png"/></span>
		</li>
		<li class="block3">
			Skype<span class="listImg"><br/><img src="/img/skype-icon.png"/></span>
		</li>	
		<li class="block3">
			Gmail<span class="listImg"><br/><img src="/img/gmail-icon.png"/></span>
		</li>		
	</div><!-- // t3 -->
	</ul>
</div><!-- // list -->
<div class="clear-fix"></div>	
<div id="contentFrame"></div>
<div id="landing">
	<article>
		Welcome. This is my online 
		<acronym title="Curriculum Vitae">CV</acronym>. 
		Select from any of the menu items above to explore more of my interests 
		and accomplishments, or contact me if you have a dream front-end web programming job 
		opening! This website is powered by jQuery, <acronym title="PHP: Hypertext Preprocessor">PHP</acronym>, and Laravel, the 
		<acronym title="Model View Controller">MVC</acronym>
		framework that I've gravitated to. 
		It includes a scrolling style jQuery image carousel, and 
		<acronym title="Javascript Object Notation">jSON</acronym>
		feeds. It is basically my playground to spend time trying new things and learning 
		about what works and what doesn't in the fine art and science of internet 
		programming and design. Tooltips and other user interface goodies found at 
		{{ HTML::link("http://jqueryui.com/", "jQuery UI", array("title"=>"Offsite to jQuery UI in a new window", "target"=>"_blank", "icon"=>"out-text")) }}.
		Menu carousel is available at 
		{{ HTML::link("http://caroufredsel.dev7studios.com/", "carouFred", array("title"=>"Offsite to carouFred in a new window", "target"=>"_blank", "icon"=>"out-text")) }}.
		Flickr jSON request example description is available at 
		{{ HTML::link("http://api.jquery.com/jQuery.getJSON/", "jQuery API", array("title"=>"Offsite to jQuery API in a new window", "target"=>"_blank", "icon"=>"out-text")) }}.
		Mail hide utility demonstrated on {{ HTML::link("contact", "Contact page", array("title"=>"Contact page")) }} courtesy of Google's 
		{{ HTML::link("http://www.google.com/recaptcha/mailhide/", "reCAPTCHA", array("title"=>"Offsite to Mail Hide in a new window", "target"=>"_blank", "icon"=>"out-text")) }}. 
		Slick icons from the folks at {{ HTML::link("http://www.iconarchive.com/", "IconArchive", array("title"=>"Offsite to IconArchive in a new window", "target"=>"_blank", "icon"=>"out-text")) }}, 
		and of some ultra nice styling from {{ HTML::link("http://twitter.github.com/bootstrap/customize", "Twitter's Bootstrap", array("title"=>"Offsite to Bootstrap Customization in a new window", "target"=>"_blank", 'icon'=>"out-text")) }}
	</article>	
	<section class="notes">
		<h3 align="center">To do:</h3> 
		<ul>
			<li><strike>move scripts to bottom with yield in layout</strike></li>
			<li>Add login area</li>
			<li>DB lists</li>
			<li>restructure xhr code</li>
			<li>Soliloquy blog</li>
			<li>facility for adding icons/sites</li>
			<li>Package (minify, optimize)</li>
			<li>Cure world hunger</li>
		</ul>																
	</section><!-- // notes -->
</div><!-- // landing -->
<div class="clear-fix"></div>
@endsection

@section('footer')
	
@endsection

@section('scripts')
	{{ HTML::script('/js/vendor/jquery-ui-1.9.2.custom.js') }}	
	{{ HTML::script('/js/vendor/jquery.carouFredSel.js') }}
	{{ HTML::script('/js/index.funcs.js') }}
@endsection