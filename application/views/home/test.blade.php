@layout('layout')

@section('title') Home @endsection

@section('header')
	{{ HTML::style('/css/jquery-ui-1.9.2.custom.css') }}	
	{{ HTML::script('/js/jquery-1.8.2.js') }}	
	{{ HTML::script('/js/jquery.carouFredSel.js') }}
	{{ HTML::script('/js/jquery-ui-1.9.2.custom.js') }}
	{{ HTML::script('/js/menu.js') }}
	{{ HTML::script('/js/test.funcs.js') }}
@endsection

@section('nav')
	@parent
	<li>{{ HTML::link("login", "Sign in") }}</li>
	<li style="float:right" class="parent">
		{{ HTML::link("#", "List menu") }}
		<ul>
			<li><a href="#" id="menu-text" title="Change links to text list style">Text List</a></li>	
		  <li><a href="#" id="menu-graphics" title="Change links to image carousel style">Image List</a></li>
		</ul>
	</li>
@endsection 

@section('content')
<div id="list">
	<menu id="carousel" title="Use the list menu to toggle list display">
	<div id="t1"><!-- // removed for carousel -->	
		<li class="block1">
			<a href="http://www.linkedin.com/profile/view?id=14123195" icon="out" target="_blank" title="Open my LinkedIn profile page in a new window/tab"></a>
			<a href="#" id="linkedin" title="Show ? from LinkedIn on this page">	
				Linkedin<span class="list_img"><br/><img src="/img/linkedin-icon.png"/></span>
			</a>
		</li>
		<li class="block1">
			<a href="https://github.com/jahdakine" icon="out" target="_blank" title="Open my Github page in a new window/tab"></a>
			<a href="#" id="github" title="Show ? from my GitHub repo on this page">
				GitHub<span class="list_img"><br/><img src="/img/github-icon.png"/></span>
			</a>
		</li>
		<li class="block1">
			<a href="https://plus.google.com/u/0/114704033710627861845/posts" icon="out" target="_blank" title="Open my Google+ page in a new window/tab"></a>
			<a href="#" id="google+" title="Show 5 latest comments from my Google+ circle on this page">
				Google+<span class="list_img"><br/><img src="/img/google-icon.png"/></span>
			</a>
		</li>			
		<li class="block1">
			<a href="http://stackoverflow.com/users/1997909/jahdakine" icon="out" target="_blank" title="Open my stackoverflow+ profile page in a new window/tab"></a>
			<a href="#" id="stackoverflow" title="Show 5 latest question/answers from my stackoverflow on this page">
				stackoverflow<span class="list_img"><br/><img src="/img/stackoverflow-icon.png"/></span>
			</a>
		</li>
	</div><!-- // t1 -->
	<div id="t2">	
		<li class="block2">
			<a href="http://www.youtube.com/user/jahdakine" icon="out" target="_blank" title="Open my You Tube page in a new window/tab"></a>
			<a href="#" id="youtube" title="Show 5 latest movies from my channel on this page">
				YouTube<span class="list_img"><br/><img src="/img/youtube-icon.png"/></span>
			</a>
		</li>
		<li class="block2">
			<a href="https://twitter.com/jahdakine" icon="out" target="_blank" title="Open my Twitter page in a new window/tab"></a>
			<a href="#" id="twitter" title="Show 20 latest tweets on this page">
				Twitter<span class="list_img"><br/><img src="/img/twitter-icon.png"/></span>
			</a>
		</li>
		<li class="block2">
			<a href="http://www.flickr.com/photos/jahdakinebrah/" icon="out" target="_blank" title="Open my Flickr page in a new window/tab"></a>
			<a href="#" id="flickr" title="Show 20 latest images from my stream on this page">
				Flickr<span class="list_img"><br/><img src="/img/flickr-icon.png"/></span>
			</a>
		</li>
		<li class="block2">
			<a href="http://jahdakine.blogspot.com/" icon="out" target="_blank" title="Open my Blogger page in a new window/tab"></a>
			<a href="#" id="blogger" target="linkbox" class="linkBoxShow" title="Show latest 3 articles from my blog on this page">
				Blogger (photography)<span class="list_img"><br/><img src="/img/blogger-icon.png"/></span>
			</a>
		</li>
	</div><!-- // t2 -->
	<div id="t3">	
		<li class="block3">
			<a href="http://www.zazzle.com/jahdakine+gifts" icon="out" target="_blank" title="Open my Zazzle gift catalog in a new window/tab"></a>
			<a href="#" id="zazzle" target="linkbox" class="linkBoxShow" title="Show latest 3 creations from my gift catalog on this page">
				Zazzle POD (design)<span class="list_img"><br/><img src="/img/zazzle-icon.png"/></span>
			</a>
		</li>
		<li class="block3">
			<a href="http://myworld.ebay.com/specrun/" icon="out" target="_blank" title="Open my eBay profile page in a new window/tab"></a>
			<a href="#" id="ebay" target="linkbox" class="linkBoxShow" title="Show latest eBay auctions on this page">
				eBay<span class="list_img"><br/><img src="/img/ebay-icon.png"/></span>
			</a>
		</li>
		<li class="block3">
			<a href="http://grooveshark.com/#!/jahdakine" icon="out" target="_blank" title="Open my GrooveShark profile page in a new window/tab"></a>
			<a href="#" target="linkbox" class="linkBoxShow" title="Show latest listens from playlist on this page">
				Grooveshark<span class="list_img"><br/><img src="/img/grooveshark-icon.png"/></span>
			</a>
		</li>	
	</div><!-- // t3 -->
	</menu>
</div><!-- // list -->
<div class="clearfix"></div>	

<div id="flickrframe" class="image_matrix"></div>
<div id="linkframe">
	<iframe frameborder="1" scrolling="yes" width="100%" height="800" src="" name="linkbox" id="linkbox">
   <p>iframes are not supported by your browser.</p>
	</iframe>
</div><!-- // linkframe -->
<div id="landing">
	<p>
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
		programming and design. <abbr class="abbr" title="Notes produced on mouseover">Tooltips</abbr> and other user interface goodies found at 
		{{ HTML::link("http://jqueryui.com/", "jQuery UI", array("title"=>"Offsite to jQuery UI in a new window", "target"=>"_blank", "icon"=>"out-text")) }}.
		Menu carousel is available at 
		{{ HTML::link("http://caroufredsel.dev7studios.com/", "carouFred", array("title"=>"Offsite to carouFred in a new window", "target"=>"_blank", "icon"=>"out-text")) }}.
		Flickr jSON request example description is available at 
		{{ HTML::link("http://api.jquery.com/jQuery.getJSON/", "jQuery API", array("title"=>"Offsite to jQuery API in a new window", "target"=>"_blank", "icon"=>"out-text")) }}.
		Mail hide utility demonstrated on {{ HTML::link("contact", "Contact page", array("title"=>"Contact page")) }} courtesy of Google's 
		{{ HTML::link("http://www.google.com/recaptcha/mailhide/", "reCAPTCHA", array("title"=>"Offiste to Mail Hide in a new window", "target"=>"_blank", "icon"=>"out-text")) }}. 
		Slick icons from the folks at {{ HTML::link("http://www.iconarchive.com/", "IconArchive", array("title"=>"Offiste to IconArchive in a new window", "target"=>"_blank", "icon"=>"out-text")) }}.
	</p>	
	<div class="notes">
		<h3 align="center">To do:</h3> 
		<ul>
			<li><strike>Only load iframe when needed</strike></li>
			<li><strike>Make adaptive/responsive</strike></li>
			<li><strike>Use icons instead of text in rotating menu</strike></li>
			<li>Make menu changeable</li>
			<li>Add login area</li>
			<li>Git it</li>
			<li>Package (minify, optiize)</li>
			<li>Tabify about skills</li>
			<li>DB lists</li>
			<li>Resize images on fly</li>
			<li>Soliloquy blog</li>
			<li>facility for adding icons/sites</li>
		</ul>																
	</div><!-- // notes -->
</div><!-- // landing -->
<div class="clearfix"></div>
@endsection

@section('footer')
	
@endsection