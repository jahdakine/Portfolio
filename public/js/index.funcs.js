//!!! TODO
//make OOP - maybe next iteration
//*one class for button clicks
//CACHE jSON
//*make helper function
//*JSON error?
//get square size from flickr
//use carouFredSel method to resize
//*fix FF bug for button #6

(function() {
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
			c1 = $("#ctrls1"),
			c2 = $("#ctrls2"),
			c3 = $("#ctrls3"),
			c4 = $("#ctrls4"),
			c5 = $("#ctrls5"),
			c6 = $("#ctrls6"),
			ctrls = $("#ctrls");
			reset = $("#reset"),
			aside=$("#aside"),
			landing = $("#landing"),
			feed_btn = $(".feedBtn"),
			content_frame = $("#contentFrame"),
			num2Scroll = 1,
			dir2Scroll = "left";
	//setup carousel slider
	function setCarousel(num2Scroll, dir2Scroll) {
		carousel.carouFredSel({
			align						: "center",
			width						: "100%",
			onWindowResize	: 'throttle',
			items						: Math.round(window.innerWidth/200),
			scroll					: window.num2Scroll,
			direction       : window.dir2Scroll,
			prev						: {
        button				: c2
			},
			next						: {
        button				: c5
			}
		}, {
					debug       : false // !!! production  - set to false
		});
	}
	//!!!Fire carousel on resize - is there a method for this (check API)?
	$(window).resize(function(dir2Scroll) {
		if(list_img.css("display") !== "none") {
			setCarousel(window.num2Scroll, window.dir2Scroll); //!!!dont reset
		}
	});
	//set tooltips
	$(document).tooltip();
	content_frame.css("display","none");
	//setup links
	list_img.css("display","none"); //hides images embedded in links
	//nav menu clicks
		//text
	menu_text.on('click', function(e) {
		e.preventDefault();
		if(!ctrls.hasClass("transparent")) {
			list_img.hide(); //hides images embedded in links
			carousel.trigger("destroy", "origOrder");
			list.removeClass("list-carousel");
			list.addClass("list-text");
			carousel.removeAttr("style");
			//add 3 col divs back in
			block1.wrapAll('<div id="t1"></div>');
			block2.wrapAll('<div id="t2"></div>');
			block3.wrapAll('<div id="t3"></div>');
			ctrls.addClass("transparent");
			menu_text.addClass("current");
			menu_graphics.removeClass("current");
		}
	});
		//graphics
	menu_graphics.on('click', function(e, num2Scroll, dir2Scroll) {
		e.preventDefault();
		if(list_img.css("display") !== "inline") {
			list_img.css("display","inline"); //displays hidden images embedded in links
			list.removeClass("list-text");
			list.addClass("list-carousel");
			carousel_li.unwrap();
			setCarousel(window.num2Scroll, window.dir2Scroll);
			ctrls.removeClass("transparent").center({vertical: false});
			menu_graphics.addClass("current");
			menu_text.removeClass("current");
		}
	});
	//reset click
	reset.on('click', function(e) {
		e.preventDefault();
		content_frame.empty();
		content_frame.css("display","none");
		landing.css("display","inline");
		reset.addClass("current");
		aside.css("display","inline");
	});
	//carousel controls
	c1.on('click', function(e, num2Scroll, dir2Scroll) { //slow down num2Scroll
		e.preventDefault();
		if(window.num2Scroll > 1) {
			carousel.trigger("configuration", ["scroll", window.num2Scroll-=1]);
			carousel.trigger("play");
		}
	});
	c2.on('click', function(e, num2Scroll, dir2Scroll) { //scroll backward
		e.preventDefault();
		carousel.trigger("configuration", ["direction", "right"]);
		carousel.trigger("play");
	});
	c3.on('click', function(e, num2Scroll, dir2Scroll) { //pause scroll
		e.preventDefault();
		carousel.trigger("pause", true);
	});
	c4.on('click', function(e, num2Scroll, dir2Scroll) { //start scroll
		e.preventDefault();
		if(!carousel.triggerHandler("isScrolling")) {
			carousel.trigger("play", [window.dir2Scroll, true]);
		} else {
			carousel.trigger("resume");
		}
	});
	c5.on('click', function(e) { //scroll forward
		e.preventDefault();
		carousel.trigger("configuration", ["direction", "left"]);
		carousel.trigger("play");
	});
	c6.on('click', function(e, num2Scroll, dir2Scroll) { //speed up scroll
		e.preventDefault();
		var numVisible = carousel.triggerHandler("configuration", "items.visible");
		if(window.num2Scroll < numVisible) {
			carousel.trigger("configuration", ["scroll", window.num2Scroll+=1]);
			carousel.trigger("play");
		}
	});
	//!!!feed click handler - I'm sure there's a better way
	feed_btn.on('click', function(e) {
		var id = this.id,
				html = '<h2 align="center">Latest ' +id.substr(0,1).toUpperCase()+id.substr(1)+ ' Updates</h2><ul style="list-style:none">',
				http = '',
				obj = '',
				date = '',
				show = '',
				success = false;
		show = "content_frame.css('display','inline').removeClass('image-matrix')";
		switch (id) {
			case ('blogger'):
				http = 'https://www.googleapis.com/blogger/v3/blogs/2575251403540723939/posts?key=AIzaSyC4Zhv-nd_98_9Vn8Ad3U6TjY99Pd2YzOQ';
				obj = 'data.items';
				tmp = "'<li><time datetime=\"' + item.updated.split('T') + '\">' + item.updated.split('T') + '</time>: <a href=\"' + item.url + '\" target=\"_blank\">' + item.title + '</a></li>'";
        limit = 5;
        break;
      case ('twitter'):
				http = 'http://search.twitter.com/search.json?q=jahdakine&callback=?';
				obj = 'data.results';
				tmp = "'<li><img src=\"' +item.profile_image_url+ '\" height=\"24\" width=\"24\" alt=\"profile icon\"/>&nbsp;<time datetime=\"' +item.created_at.split(' ').slice(0, 4).join(' ')+ '\">' +item.created_at.split(' ').slice(0, 4).join(' ')+ '</time>:&nbsp;<a href=\"http://twitter.com/jahdakine/status/' +item.id_str+ '\" target=\"_blank\">' +item.text+ '</a></li>'";
        limit = 10;
        break;
      case ('meetup'): //venue=1139097 member=65732862 group=1769691 group_urlname=HTML5-Denver-Users-Group
				http = 'https://api.meetup.com/2/checkins?group_id=1769691&key=4c20142a4141d657e707171794141c&_=1359581403601&event_id=93211712&order=time&desc=True&member_id=65732862&offset=0&callback=jQuery1710643855888454944_1359581333830&format=json&page=20&sign=true';
				obj = 'results';
				tmp = "<li><li>";
				limit = 3;
        break;
      case ('linkedin'):
				http = 'http://api.linkedin.com/v1/people/~:(14123195)?format=json';
				obj = ''; //!!!needs oauth
				limit = 10;
        break;
      case ('grooveshark'):
        //http = "http://api.grooveshark.com/ws3.php?sig=cd3ccc949251e0ece014d620bbf306e7{'method': 'addUserFavoriteSong', 'parameters': {'songID': 0}, 'header': {'wsKey': 'key', 'sessionID': 'sessionID'}}";
				obj = ''; //!!!just a placeholder
				limit = 10;
        break;
      case ('flickr'):
				http = 'http://api.flickr.com/services/feeds/photos_public.gne?id=23019891@N00&lang=en-us&format=json&jsoncallback=?';
				obj = 'data.items';
				tmp = "'<a href=\"' + item.link + '\" target=\"_blank\" title=\"Open Flickr page titled &#34;' + item.title + '&#34;<br/> in a new window/tab\"><img src=\"' + item.media.m + '\" /></a>'";
				show = "content_frame.css('display','inline-block').addClass('image-matrix')";
				limit = 20;
        break;
    }
    function appendDOM(html) {
			console.log(html);
			content_frame.html(html);
			landing.css("display","none");
			aside.css("display","none");
			reset.removeClass("current");
			eval(show);
    }
		function getFeed(http, obj, tmp, html) {
			//!!!cache? Would need to use local storage or DB
			return $.getJSON(http, function(data) {
				success = true;
				console.log(data);
				$.each(eval(obj), function(i,item) {
						console.log(item);
						html += eval(tmp);
						console.log(html);
						if(i === limit) { return false; }
					});
				html += '</ul>';
				appendDOM(html);
			});
		}
		getFeed(http, obj, tmp, html);
		// ERROR: Can be tested by commenting appendDOM(html) line in getFeed
		setTimeout(function() {
			if (!success) {
				html = '<h2 align="center">Error!</h2><blockquote>There has been an error requesting ' +id.substr(0,1).toUpperCase()+id.substr(1)+ ' data</blockquote>';
				appendDOM(html);
			}
		}, 5000);
	});
})();