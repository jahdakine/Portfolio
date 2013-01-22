$(document).ready(function() {
		var xhr_mu = $get.JSON("https://api.meetup.com/2/open_events?key=4c20142a4141d657e707171794141c&sign=true&state=CO&city=Denver&country=US&topic=HTML5, javascript&page=20",
		function() {
			alert("Success");
		}
	);

	var xhr_fr = $.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?", {
			tags: "mount rainier",
			tagmode: "any",
			format: "json"
		},
		function(data) {
			$.each(data.items, function(i,item) {
				$("<img/>").attr("src", item.media.m).appendTo("#images");
				if ( i == 3 ) return false;
		});
	});	

});