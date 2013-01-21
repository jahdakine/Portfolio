$(document).ready(function() {
	//setup carousel slider
	function setCarousel(scroll) {
		$("#carousel").carouFredSel({
			align : "center",
			width   : "100%",
			debug			: true,
			onWindowResize : 'throttle',
			items   : Math.round(window.innerWidth/200),
			scroll  : 1
		});
	}
	$(window).resize(function() {
		if($(".list_img").css("display") !== "none") {
			setCarousel(1);
		}
	});
	//set tooltips
	$(document).tooltip();
	//setup links
	$(".list_img").css("display","none"); //hides images embedded in links
	//nav menu clicks
	$("#menu-text").on('click', function(e) {
		e.preventDefault();
		$(".list_img").hide(); //hides images embedded in links
		$("#carousel").trigger("destroy", "origOrder"); //remove the carousel
		$("#list").removeClass("list_carousel");
		$("#list").addClass("list_text");
		$("#carousel").removeAttr("style");
	});
	$("#menu-graphics").on('click', function(e) {
		e.preventDefault();
		$(".list_img").css("display","inline"); //displays hidden images embedded in links
		$("#list").removeClass("list_text");
		$("#list").addClass("list_carousel");
		setCarousel(1);
	});
	//clear iframe
	$("#linkbox").attr("src", "");
	//reset click
	$("#reset").on('click', function(e) {
		e.preventDefault();
		$("#flickrframe").empty();
		$("#flickrframe").css("display","none");
		$("#linkbox").attr("src", "");
		$("#linkbox").css("display","none");
		$("#landing").css("display","inline");
	});
	//flickr menu click
	$("#flickr").on('click', function(e) { console.log("d");
		e.preventDefault();
		var html = "";
		$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=23019891@N00&lang=en-us&format=json&jsoncallback=?", function(data) {
			$.each(data.items, function(i,item){
				//console.log(item);
				html += '<a href="' + item.link + '" target="_blank"><img src="' + item.media.m + '" /></a>';
			});
			$("#flickrframe").html(html);
		});
		$("#flickrframe").css("display","inline-block");
		$("#landing").css("display","none");
		$("#linkbox").attr("src", "");
		$("#linkframe").css("display","none");
	});
	//other menu clicks
	$(".linkBoxShow").on('click', function() {
		$("#flickrframe").empty();
		$("#flickrframe").css("display","none");
		$("#landing").css("display","none");
		$("#linkframe").css("display","inline");
		$("#linkbox").css("display","inline");
	});
});