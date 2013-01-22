$(document).ready(function() {
	//cache DOM vars
	var list_img = $(".listImg"),
			carousel = $("#carousel"),
			menu_text = $("#menuText"),
			list = $("#list"),
			flickr_frame = $("#flickrFrame"),
			link_box = $("#linkBox"),
			menu_graphics = $("#menuGraphics"),
			reset = $("#reset"),
			flickr = $("#flickr"),
			landing = $("#landing"),
			link_frame = $("#linkFrame"),
			link_box_show = $(".linkBoxShow"),
			carousel_li = $("#carousel>*>li"),
			block1 = $(".block1"),
			block2 = $(".block2"),
			block3 = $(".block3");
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
	link_box.css("display","none");
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
	//clear iframe
	link_box.attr("src", "");
	//reset click
	reset.on('click', function(e) {
		e.preventDefault();
		flickr_frame.empty();
		flickr_frame.css("display","none");
		link_box.attr("src", "");
		link_box.css("display","none");
		landing.css("display","inline");
	});
	//flickr menu click
	flickr.on('click', function(e) {
		var html = "";
		e.preventDefault();
		$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=23019891@N00&lang=en-us&format=json&jsoncallback=?", function(data) {
			$.each(data.items, function(i,item) {
				//console.log(item);
				html += '<a href="' + item.link + '" target="_blank"><img src="' + item.media.m + '" /></a>';
			});
			flickr_frame.html(html);
		});
		flickr_frame.css("display","inline-block");
		landing.css("display","none");
		link_box.attr("src", "");
		link_frame.css("display","none");
	});
	//other menu clicks
	link_box_show.on('click', function() { 
		flickr_frame.empty();
		flickr_frame.css("display","none");
		landing.css("display","none");
		link_frame.css("display","inline");
		link_box.css("display","inline");
	});
});