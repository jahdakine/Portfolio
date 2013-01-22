@layout('layout')

@section('title') Home @endsection

@section('header')		
	{{ HTML::script('/js/jquery-ui-1.9.2.custom.js') }}	
	{{ HTML::script('/js/jquery.carouFredSel.js') }}
	{{ HTML::script('/js/index.funcs.js') }}
	{{ HTML::script('/js/xhr-helper.js') }}

	{{ HTML::style('/css/jquery-ui-1.9.2.custom.css') }}
@endsection

@section('nav')
	@parent
	<li>{{ HTML::link("users/", "Sign on") }}</li>
	<li class="to-right">
		{{ HTML::link("#", "List menu") }}
		<ul>
			<li>{{ HTML::link("#", "Text List", array("title"=>"Change links to text list style", "id"=>"menuText")) }}</li>	
		  <li>{{ HTML::link("#", "Image List", array("title"=>"Change links to image carousel style", "id"=>"menuGraphics")) }}
		</ul>
	</li>
	<li class="to-right">{{ HTML::link("#", "Reset", array("title"=>"Clear content in frame", "id"=>"reset")) }} </li>
@endsection 

@section('content')
<div id="list">
	<ul id="carousel">
	<div id="t1"><!-- // removed for carousel -->	
		<li class="block1">
			{{ HTML::link("http://www.linkedin.com/profile/view?id=14123195", "", array("title"=>"Open my LinkedIn profile page in a new window/tab", "target"=>"_blank", "icon"=>"out")) }}
			<!-- !!! Can this be done with blade using a macro? -->
			<a href="#" id="linkedin" title="Show ? from LinkedIn on this page">	
				Linkedin<span class="listImg"><br/><img src="/img/linkedin-icon.png"/></span>
			</a>
		</li>
		<li class="block1">
			{{ HTML::link("https://github.com/jahdakine", "", array("title"=>"Open my Github page in a new window/tab", "target"=>"_blank", "icon"=>"out")) }}
			<a href="#" id="github" title="Show ? from my GitHub repo on this page">
				GitHub<span class="listImg"><br/><img src="/img/github-icon.png"/></span>
			</a>
		</li>
		<li class="block1">
			{{ HTML::link("https://plus.google.com/u/0/114704033710627861845/posts", "", array("title"=>"Open my Google+ page in a new window/tab", "target"=>"_blank", "icon"=>"out")) }}
			<a href="#" id="google+" title="Show 5 latest comments from my Google+ circle on this page">
				Google+<span class="listImg"><br/><img src="/img/google-icon.png"/></span>
			</a>
		</li>			
		<li class="block1">
			{{ HTML::link("http://stackoverflow.com/users/1997909/jahdakine", "", array("title"=>"Open my stackoverflow+ profile page in a new window/tab", "target"=>"_blank", "icon"=>"out")) }}
			<a href="#" id="stackoverflow" title="Show 5 latest question/answers from my stackoverflow on this page">
				stackoverflow<span class="listImg"><br/><img src="/img/stackoverflow-icon.png"/></span>
			</a>
		</li>
	</div><!-- // t1 -->
	<div id="t2">	
		<li class="block2">
			{{ HTML::link("http://www.youtube.com/user/jahdakine", "", array("title"=>"Open my You Tube page in a new window/tab", "target"=>"_blank", "icon"=>"out")) }}
			<a href="#" id="youtube" title="Show 5 latest movies from my channel on this page">
				YouTube<span class="listImg"><br/><img src="/img/youtube-icon.png"/></span>
			</a>
		</li>
		<li class="block2">
			{{ HTML::link("https://twitter.com/jahdakine", "", array("title"=>"Open my Twitter page in a new window/tab", "target"=>"_blank", "icon"=>"out")) }}
			<a href="#" id="twitter" title="Show 20 latest tweets on this page">
				Twitter<span class="listImg"><br/><img src="/img/twitter-icon.png"/></span>
			</a>
		</li>
		<li class="block2">
			<!-- !!! This is the way we want these to work: top link offsite, bottom link jSON in page -->
			{{ HTML::link("http://www.flickr.com/photos/jahdakinebrah/", "", array("title"=>"Open my Flickr page in a new window/tab", "target"=>"_blank", "icon"=>"out")) }}
			<a href="#" id="flickr" title="Show 20 latest images from my stream on this page">
				Flickr<span class="listImg"><br/><img src="/img/flickr-icon.png"/></span>
			</a>
		</li>
		<li class="block2">
			{{ HTML::link("http://jahdakine.blogspot.com/", "", array("title"=>"Open my Blogger page in a new window/tab", "target"=>"_blank", "icon"=>"out")) }}
			<a href="http://jahdakine.blogspot.com/" id="blogger" target="linkBox" class="linkBoxShow" title="Show latest 3 articles from my blog on this page">
				Blogger (photography)<span class="listImg"><br/><img src="/img/blogger-icon.png"/></span>
			</a>
		</li>
	</div><!-- // t2 -->
	<div id="t3">	
		<li class="block3">
			{{ HTML::link("http://www.zazzle.com/jahdakine+gifts", "", array("title"=>"Open my Zazzle gift catalog in a new window/tab", "target"=>"_blank", "icon"=>"out")) }}
			<a href="http://www.zazzle.com/jahdakine+gifts" id="zazzle" target="linkBox" class="linkBoxShow" title="Show latest 3 creations from my gift catalog on this page">
				Zazzle POD (design)<span class="listImg"><br/><img src="/img/zazzle-icon.png"/></span>
			</a>
		</li>
		<li class="block3">
			{{ HTML::link("http://myworld.ebay.com/specrun/", "", array("title"=>"Open my eBay profile page in a new window/tab", "target"=>"_blank", "icon"=>"out")) }}
			<a href="http://myworld.ebay.com/specrun/" id="ebay" target="linkBox" class="linkBoxShow" title="Show latest eBay auctions on this page">
				eBay<span class="listImg"><br/><img src="/img/ebay-icon.png"/></span>
			</a>
		</li>
		<li class="block3">
			{{ HTML::link("http://grooveshark.com/#!/jahdakine", "", array("title"=>"Open my GrooveShark profile page in a new window/tab", "target"=>"_blank", "icon"=>"out")) }}
			<a href="http://grooveshark.com/#!/jahdakine" target="linkBox" class="linkBoxShow" title="Show latest listens from playlist on this page">
				Grooveshark<span class="listImg"><br/><img src="/img/grooveshark-icon.png"/></span>
			</a>
		</li>	
	</div><!-- // t3 -->
	</ul>
</div><!-- // list -->
<div class="clear-fix"></div>	

<!-- !!! Flickr and linkframe should not be separate. All jSON feeds should go into one div -->
<div id="flickrFrame" class="image-matrix"></div>
<div id="linkFrame">
	<iframe frameborder="1" scrolling="yes" width="100%" height="800" src="" name="linkBox" id="linkBox">
   <p>iframes are not supported by your browser.</p>
	</iframe>
</div><!-- // linkframe -->
<div id="landing">
	<article>
		Welcome. This is my online 
		<acronym title="Curriculum Vitae">CV</acronym>. 
		Select from any of the menu items above to explore more of my interests 
		and accomplishments, or contact me if you have a dream front-end web programming job 
		opening! This website is powered by jQuery, <acronym title="PHP: Hypertext Preprocessor">PHP</acronym>, and Laravel, the 
		<acronym title="Model View Controller">MVC</acronym>
		framework that I've gravitated to. 
		It includes a scrolling style jQuery image carousel, and a 
		<acronym title="Javascript Object Notation">jSON</acronym>
		Flickr feed. It is basically my playground to spend time trying new things and learning 
		about what works and what doesn't in the fine art and science of internet 
		programming and design. Tooltips and other user interface goodies found at 
		{{ HTML::link("http://jqueryui.com/", "jQuery UI", array("title"=>"Offsite to jQuery UI in a new window", "target"=>"_blank", "icon"=>"out-text")) }}.
		Menu carousel is available at 
		{{ HTML::link("http://caroufredsel.dev7studios.com/", "carouFred", array("title"=>"Offsite to carouFred in a new window", "target"=>"_blank", "icon"=>"out-text")) }}.
		Flickr jSON request example description is available at 
		{{ HTML::link("http://api.jquery.com/jQuery.getJSON/", "jQuery API", array("title"=>"Offsite to jQuery API in a new window", "target"=>"_blank", "icon"=>"out-text")) }}.
		Mail hide utility demonstrated on {{ HTML::link("contact", "Contact page", array("title"=>"Contact page")) }} courtesy of Google's 
		{{ HTML::link("http://www.google.com/recaptcha/mailhide/", "reCAPTCHA", array("title"=>"Offiste to Mail Hide in a new window", "target"=>"_blank", "icon"=>"out-text")) }}. 
		Slick icons from the folks at {{ HTML::link("http://www.iconarchive.com/", "IconArchive", array("title"=>"Offiste to IconArchive in a new window", "target"=>"_blank", "icon"=>"out-text")) }}.
	</article>	
	<section class="notes">
		<h3 align="center">To do:</h3> 
		<ul>
			<li><strike>Make menu changeable</strike></li>
			<li>Add login area</li>
			<li><strike>Git it</strike></li>
			<li>Package (minify, optimize)</li>
			<li>Tabify about skills</li>
			<li>DB lists</li>
			<li>Resize images on fly</li>
			<li>Soliloquy blog</li>
			<li>facility for adding icons/sites</li>
			<li>Make dropdown for List menu</li>
		</ul>																
	</section><!-- // notes -->
</div><!-- // landing -->
<div class="clear-fix"></div>
@endsection

@section('footer')
	
@endsection