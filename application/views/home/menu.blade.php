$menulist = array({
	'list1' =>
	'<ul id="menu">
		<li>{{ HTML::link("#", "Reset", array("target"=>"_blank", "id"=>"reset")) }} </li>
		<li>{{ HTML::link("http://www.linkedin.com/profile/view?id=14123195", "Linkedin", array("target" => "_blank")) }} </li>
		<li>{{ HTML::link("https://plus.google.com/u/0/114704033710627861845/posts", "Google+", array("target" => "_blank")) }} </li>
		<li>{{ HTML::link("https://github.com/jahdakine", "GitHub", array("target" => "_blank")) }} </li>
		<li>{{ HTML::link("#", "Flickr", array("id" => "flickr"))}}<img src='/img/flickr-icon.png'/></li>
		<li>{{ HTML::link("http://jahdakine.blogspot.com/", "Blogger (photography)", array("target" => "linkbox", "class" => "linkBoxShow")) }} </li>
		<li>{{ HTML::link("http://www.zazzle.com/jahdakine+gifts", "Zazzle POD (design)", array("target" => "linkbox", "class" => "linkBoxShow")) }} </li>
		<li>{{ HTML::link("http://myworld.ebay.com/specrun/", "eBay", array("target" => "linkbox", "class" => "linkBoxShow")) }} </li>
		<li>{{ HTML::link("http://grooveshark.com/#!/jahdakine", "Grooveshark", array("target" => "linkbox", "class" => "linkBoxShow")) }} </li>
	</ul>',
	'list2' =>
	'<ul id="menu">
		<li><a href="#" target="_blank" id="reset">Reset<img src='/img/no-icon.png'/></a></li>
		<li><a href="http://www.linkedin.com/profile/view?id=14123195" target="_blank">Linkedin<img src='/img/linkedin-icon.png'/></a></li>
		<li><a href="https://plus.google.com/u/0/114704033710627861845/posts" target="_blank">Google+<img src='/img/google-icon.png'/></a></li>
		<li><a href="https://github.com/jahdakine" target="_blank">GitHub<img src='/img/github-icon.png'/></a></li>
		<li><a href="#" id="flickr">Flickr<img src='/img/flickr-icon.png'/></a></li>
		<li><a href="http://jahdakine.blogspot.com/" target="linkbox" class="linkBoxShow">Blogger (photography)<img src='/img/blogger-icon.png'/></a></li>
		<li><a href="http://www.zazzle.com/jahdakine+gifts" target="linkbox" class="linkBoxShow">Zazzle POD (design)<img src='/img/zazzle-icon.png'/></a></li>
		<li><a href="http://myworld.ebay.com/specrun/" target="linkbox" class="linkBoxShow">eBay<img src='/img/ebay-icon.png'/></a></li>
		<li><a href="http://grooveshark.com/#!/jahdakine" target="linkbox", class="linkBoxShow">Grooveshark<img src='/img/grooveshark-icon.png'/></a></li>
	</ul>'
)};	