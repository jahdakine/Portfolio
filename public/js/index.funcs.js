$(document).ready(function() {
	//cache DOM vars
	var list = $("#list"),
			list_img = $(".listImg"),
			carousel = $("#carousel"),
			carousel_li = $("#carousel>*>li"),
			block1 = $(".block1"),
			block2 = $(".block2"),
			block3 = $(".block3"),
			menu_text = $("#menuText"),
			menu_graphics = $("#menuGraphics"),
			reset = $("#reset"),
			flickr = $("#flickr"),
			meetup = $("#meetup"),
			twitter = $("#twitter"),
			landing = $("#landing"),
			image_frame = $("#imageFrame"),
			text_frame = $("#textFrame");
	//setup carousel slider
	function setCarousel(scroll) {
		carousel.carouFredSel({
			// debug						: true,
			align						: "center",
			width						: "100%",
			onWindowResize	: 'throttle',
			items						: Math.round(window.innerWidth/200),
			scroll					: scroll
		});
	}
	//Fire carousel on resize - is there a method for this?
	$(window).resize(function() {
		if(list_img.css("display") !== "none") {
			setCarousel(1);
		}
	});
	//set tooltips
	$(document).tooltip();
	text_frame.css("display","none");
	//setup links
	list_img.css("display","none"); //hides images embedded in links
	//nav menu clicks
		menu_text.on('click', function(e) {
		e.preventDefault();
		list_img.hide(); //hides images embedded in links
		carousel.trigger("destroy", "origOrder"); //remove the carousel
		list.removeClass("list-carousel");
		list.addClass("list-text");
		carousel.removeAttr("style");
		//add 3 col divs back in
		block1.wrapAll('<div id="t1"></div>');
		block2.wrapAll('<div id="t2"></div>');
		block3.wrapAll('<div id="t3"></div>');
	});
	menu_graphics.on('click', function(e) {
		e.preventDefault();
		list_img.css("display","inline"); //displays hidden images embedded in links
		list.removeClass("list-text");
		list.addClass("list-carousel");
		carousel_li.unwrap();
		setCarousel(1);
	});
	//reset click
	reset.on('click', function(e) {
		e.preventDefault();
		image_frame.empty();
		image_frame.css("display","none");
		text_frame.css("display","none");
		landing.css("display","inline");
	});
	// !!! make a helper function for the feed clicks
	//flickr menu click
	flickr.on('click', function(e) {
		var html = "<h2>Latest Uploads</h2>";
		e.preventDefault();
		$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=23019891@N00&lang=en-us&format=json&jsoncallback=?", function(data) {
			$.each(data.items, function(i,item) {
				//console.log(item);
				html += '<a href="' + item.link + '" target="_blank" title="' + item.title + '"><img src="' + item.media.m + '" /></a>';
			});
			image_frame.html(html);
		});
		image_frame.css("display","inline-block");
		landing.css("display","none");
		text_frame.css("display","none");
	});
	//meetup click
	meetup.on('click', function(e) {
		var html = "";
		e.preventDefault();
		$.getJSON("https://api.meetup.com/http:--www.meetup.com-HTML5-Denver-Users-Group-/events/65732862/attendance?key=4c20142a4141d657e707171794141c&sign=true&page=20", function(data) {
			$.each(data.items, function(i,item) {
				console.log(item);
				//html += '<a href="' + item.link + '" target="_blank"><img src="' + item.media.m + '" /></a>';
			});
			//text_frame.html(html);
		});
	});
	//twitter click
	twitter.on('click', function(e) {
		var html = '<h2 align="center">Latest Tweets</h2><ul style="list-style:none">';
		e.preventDefault();
		$.getJSON("http://search.twitter.com/search.json?q=jahdakine&callback=?", function(data) {
			console.log(data.results);
			$.each(data.results, function(i,item) {
				console.log(item);
				var date = item.created_at.split(' ').slice(0, 4).join(' ');
				html += '<li><a href="http://twitter.com/jahdakine/status/' + item.id_str + '" target="_blank"><img src="' + item.profile_image_url + '" alt="profile icon"/>&nbsp;' + item.text +'</a> (<time datetime="' + item.created_at + '">' + date + '</time>)</li>';
			});
			html+="</ul>";
			console.log(html);
			text_frame.html(html);
		});
		image_frame.empty();
		image_frame.css("display","none");
		landing.css("display","none");
		text_frame.css("display","inline-block");
	});
});